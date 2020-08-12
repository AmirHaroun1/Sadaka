<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $campaigns = Campaign::WithCollectedAmount()
            ->with('project:id,name,objective,image')
            ->withCount('donations')
            ->paginate(12);
        return view('home',compact('campaigns'));
    }
}
