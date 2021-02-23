<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use Auth;

class MessageController extends Controller
{
    public function index($project, $task)
    {

        $project =  Project::where('id', $project)->with(['tasks' => function($query) use ($task){
            $query->where('id', $task)->with('messages');
        }])->first();

       // return dd($project);

       return view('backend.kanban.messages.index', ['project' => $project]);
    }

    public function store($project, $task, Request $request)
    {
        Auth::user()->messages()->create([
            'task_id' => $task,
            'message' => $request->message,
        ]);

        return redirect()->route('kanban.project.task.message', ['project' => $project, 'task' => $task]);
    }
}
