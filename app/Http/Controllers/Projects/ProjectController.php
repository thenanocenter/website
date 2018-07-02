<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = \App\Project::whereIn('status',['active','funded','completed'])->inRandomOrder()->get();
        return view('projects.index',['projects'=>$projects]);
    }

    public function show(Request $request, $projectKey)
    {
        $project = \App\Project::findByKey($projectKey);
        if(!$project){
            abort(404);
        }
        return view('projects.show',[
            'project'=>$project,
        ]);
    }

}
