<?php

namespace App\Http\Controllers;


use App\Charity;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $projects = Project::TotalStats()->first();
        $TotalDonations = $projects->TotalDonations;
        $TotalCampaigns = $projects->TotalCampaigns;
        $TotalDonors = $projects->TotalDonors;

        $charities = Charity::all();
        return view('home',compact('TotalCampaigns','TotalDonations','TotalDonors','charities'));
    }
}
