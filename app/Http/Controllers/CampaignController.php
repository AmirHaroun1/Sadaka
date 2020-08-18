<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Http\CampaignFilter;
use App\Project;
use Illuminate\Http\Request;

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
    public function create()
    {
        return view('Campaign._Create_Campaign');
    }
}
