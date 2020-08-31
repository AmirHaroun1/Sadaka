<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function show(){
        $user = User::with(
            // get campaigns created by the user
            // use Sub Query to load the count of users donated for each loaded campaign
            ['campaigns'=>function($query){
            $query->addSelect(['donations_count' => function ($query) {
                $query->selectRaw('count(id)')
                    ->from('campaign_user')
                    ->whereColumn('campaign_id', 'campaigns.id');
            }]);
        }
            // load the project of each campaign
            // load the campaigns the user has donated for
            ,'campaigns.project'
            ,'donations.project'
            ])
            ->withCount('campaigns','donations')
            ->findOrFail(auth()->id());
        return view('user.profile',compact('user'));
    }

}
