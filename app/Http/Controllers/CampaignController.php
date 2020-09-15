<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Category;
use GuzzleHttp\Client;
use App\Http\CampaignFilter;
use App\Http\Requests\CreateCampaignRequest;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CampaignController extends Controller
{
    //
    public function index()
    {
          $campaigns = Campaign::WithCollectedAmount()
            ->with('project:id,name,objective,image')
            ->withCount('donations')
            ->paginate(4);

          return response()->json(['campaigns'=>$campaigns,200]);
    }
    public function search($name)
    {
         $campaigns = Campaign::where('name','LIKE','%'.$name.'%')
            ->WithCollectedAmount()
            ->with('project:id,name,objective,image')
            ->withCount('donations')
            ->paginate();
        return response()->json(['SearchedCampaigns'=>$campaigns,200]);

    }
    public function create(Project $project =null , $section = 1)
    {
        $categories = Category::with('projects')->get();
        return view('Campaign._Create_Campaign',compact('categories','project','section'));
    }
    public  function store(CreateCampaignRequest $request)
    {
        if($request->has('NewUser'))
        {
            $newUser = User::create([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'password' => Hash::make($request['NewUserPassword']),
                ]);
            Auth::login($newUser);
        }
        $campaign = Campaign::create
        ([
            'creator_id'=>auth()->id()
            ,'name'=>$request['name']
            ,'description'=>$request['description']
            ,'project_id'=>$request['project_id']
        ]);
        if(request()->hasFile('image'))
        {
            $campaign->image = $request['image']->store('CampaignImages');
        }
        else{
            $campaign->image = 'images/campaign/campaignPhoto.jpg';
        }
        $campaign->save();

        return response()->json([],201);
    }

    public function show($campaignID,$campaignName)
    {

        // if a donation is made it will redirect to the payment controller to get the status of the payment
        if(request('id') && request('resourcePath'))
        {
            $PaymentController = new PaymentController();
            $PaymentStatus =  $PaymentController
                ->GetPaymentResult(request('id'),request('resourcePath'));
            if(isset($PaymentStatus['id']))
            {
                // if the payment is done successfully
                //create new donation
                $settings = [
                    'base_uri' => route('donation.store'),
                    'form_params' => [
                        'campaignID'=>$campaignID,
                        'auth_id' => \auth()->id(),
                        'DonationAmount' => \request('DonationAmount'),
                        'DonationWord' => \request('DonationWord'),
                    ]
                ];
                $client = new Client($settings);
                $response = $client->request('POST');
                return redirect()->route('campaign.show',[$campaignID,$campaignName])->with('success', 'بنجاح'.\request('DonationAmount').'قد تم التبرع بقيمة');

            }
            else{
                return redirect()->route('campaign.show',[$campaignID,$campaignName])->with('failed', 'عملية فاشلة, يرجى مراجعة بيانات البطاقة');
            }
        }
        $campaign = Campaign::WithCollectedAmount()
                    ->with('user','project','donations')
                    ->withCount('donations')
                    ->findOrFail($campaignID);
        return view('Campaign.CampaignProfile',compact('campaign'));
    }

}
