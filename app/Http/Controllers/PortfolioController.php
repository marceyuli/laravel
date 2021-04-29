<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\SaveProjectRequest;
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
        return view('projects\create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request){

        Project::create($request->validated());

        return redirect()->route('portfolio.index');
    }

    public function edit(Project $project){
        return view('projects\edit',['project'=>$project]);
    }

    public function update(Project $project, SaveProjectRequest $request){
        $project->update( $request->validated() );

        return redirect()->route('portfolio.show', $project);
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('portfolio.index');
    }
}
