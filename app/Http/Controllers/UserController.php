<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function update(EditProfileRequest $request)
    {
        $user = auth()->user();

        if($request->has('password'))
        {
            $user->update([
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->back()->with('Edited-Successfully', 'قد تم تعديل كلمة السر بنجاح');
        }

        if ($request->hasFile('image'))
        {
            if(file_exists(public_path().'/storage/'.$user->image)) {
                unlink('storage/'.$user->image);
            }
              $request->image = request('image')->store('userImages');
        }
        else{
            $request->image = $user->image;
        }
        $user->update([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'image'=>$request->image,
        ]);
        return redirect()->back()->with('Edited-Successfully', 'قد تم تعديل البيانات بنجاح');
    }

}
