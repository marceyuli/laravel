<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('portfolio',['projects'=>Project::latest()->paginate()]);
    }

    public function show(Project $project){
        return view('projects\show',['project'=>$project]);
    }

}
