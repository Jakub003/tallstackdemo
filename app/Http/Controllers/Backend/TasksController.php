<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class TasksController extends Controller
{
    public function create()
    {
        return view('backend.kanban.tasks.create');
    }

    public function tasks(Project $project)
    {
        return view('backend.kanban.tasks.index', ['project' => $project]);
    }

    public function filterByTag($tag)
    {
        $tasks = Task::where('tag', $tag)->get();

        //return dd($tasks);

        return view('backend.kanban.tasks.filter-by-tag', ['tasks' => $tasks]);
    }

    public function store(Request $request, $project)
    {
        $project = Project::findOrFail($project);
        $project->tasks()->create($request->all());
        return redirect()->back()->with([
            'message' => 'Task created successfully.'
        ]);
    }
}
