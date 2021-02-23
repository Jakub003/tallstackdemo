<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KanbanController extends Controller
{
    public function index()
    {
        return view('backend.kanban.index');
        
        //$projects = Project::where('is_active')->get();
        //return view('backend.kanban.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('backend.kanban.projects.create');
    }

    public function store(Request $request)
    {
         $request->validate([
             'name' => 'required|string',
             'order' => 'required|integer',
             'is_active' => 'boolean'
        ]);

        Auth::User()->projects()->create($request->all());

        return redirect()->route('kanban.create')->with([
            'message' => 'Project '.$request->name.' added successfully.'
        ]);
    }

  
}
