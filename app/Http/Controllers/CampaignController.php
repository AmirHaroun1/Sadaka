<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Category;
use App\Http\CampaignFilter;
use App\Http\Requests\CreateCampaignRequest;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CampaignController extends Controller
{
    //
    public function index()
    {
        return  $campaigns = Campaign::WithCollectedAmount()
            ->with('project:id,name,objective,image')
            ->withCount('donations')
            ->paginate(4);
    }
    public function search($name)
    {
        return $campaigns = Campaign::where('name','LIKE','%'.$name.'%')
            ->WithCollectedAmount()
            ->with('project:id,name,objective,image')
            ->withCount('donations')
            ->paginate();
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

        return $campaign;
    }
}
