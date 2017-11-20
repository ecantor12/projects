<?php

namespace App\Http\Controllers;

use App\Project;
use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'alias' => 'required|string',
            'initial_date' => 'required|date',
            'final_date' => 'required|date'
        ]);

        //Almacenamiento
        //$project = Project::create($request->all());
        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->alias = $request->alias;
        $project->description = $request->description;
        $project->initial_date = $request->initial_date;
        $project->final_date = $request->final_date;
        $project->user_id = Auth::user()->id;
        $project->save();
        
        //redirección
        return view('project.show', compact('project'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //dd($project);
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $input = Project::findOrFail($project->id);

        $input->name = $request->name;
        $input->description = $request->description;
        $input->alias = $request->alias;
        $input->description = $request->description;
        $input->initial_date = $request->initial_date;
        $input->final_date = $request->final_date;
        $input->user_id = Auth::user()->id;
        $input->save();

        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //dd($project);
    }
}
