<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {

        $project = new Project();

        $project->title = request('project_title');
        $project->description = request('project_description');

        $project->save();

        return redirect('/projects');

    }
}
