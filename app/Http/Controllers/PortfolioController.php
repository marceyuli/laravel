<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
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

    public function create(){
        return view('projects\create');
    }

    public function store(CreateProjectRequest $request){

        Project::create($request->validated());

        return redirect()->route('portfolio.index');
    }

}
