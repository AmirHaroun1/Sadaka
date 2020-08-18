<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
         $projects = Project::with('campaigns')->get();

        return response()->json([
            'data' => $projects
        ], 200);
    }
}
