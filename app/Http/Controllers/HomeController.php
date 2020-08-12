<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $campaigns = Campaign::WithCollectedAmount()->paginate(10);
        return view('home',compact('campaigns'));
    }
}
