<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::with('type','technologies')->get();
        return response()->json([
            'success' => 'true',
            'result' => $projects,

        ]);
    }

    // public function show($slug)
    // {
    //     $project = Project::all();

    //     if ($project) {
    //         return response()->json([
    //             'success' => true,
    //             'results' => $project
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'error' => 'No Project found'
    //         ]);
    //     }
    // }
}