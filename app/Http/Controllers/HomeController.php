<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
         $projects = Project::TotalStats()->first();
        return view('home',compact('projects'));
    }
}
