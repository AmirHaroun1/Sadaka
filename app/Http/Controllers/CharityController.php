<?php

namespace App\Http\Controllers;

use App\Charity;
use Illuminate\Http\Request;

class CharityController extends Controller
{
    public function show($name)
    {
        $charity = Charity::where('name',$name)->with('projects')->withCount('projects','campaigns')->first();

        return view('charity/CharityProfile',compact('charity'));
    }
}
