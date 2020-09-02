<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function show(){

        $user = auth()->user()->loadCount('donations','campaigns');

        $myCampaigns = $user->campaigns;
        $myCampaigns->loadCount('donations');
        $myCampaigns->load('project:id,name,image,objective');

        $myDonations = $user->donations;
        $myDonations->load('project:id,name,image,objective');

        return view('user.profile',compact('user','myCampaigns','myDonations'));
    }
    public function edit()
    {
       return  view('user.edit');
    }
    public function update()
    {
        return "i'll update later";
    }

}
