<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function show()
    {
        $projects = \App\Project::inRandomOrder()->get();
        return view('home.show',['projects'=>$projects]);
    }

}
