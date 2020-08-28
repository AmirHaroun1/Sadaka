<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
         $categories = Category::with('projects')->get();

        return response()->json([
            'data' => $categories
        ], 200);
    }
}
