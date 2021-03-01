<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // we pass this model because this model is actually projects table, this model communicate with database,
//Model is used to connect with database layer. Controller is place where all you logic created. and view is the place where all your returned data is display.

class ProjectController extends Controller
{
    public function create()
    {
        return view('jakub.project_settings'); // correct way
        //return view('jakub.project_settings'); // Wrong way

        //use . (dot) instead of / (forward slash) to separate the folder
    }

    // To store data in database method should be able to accept request. So we pass Request $request Parameters.
    public function store(Request $request)
    {
        //return dd($request->all()); //Comment all the code in store method and just uncomment this code and submit your form with some data. your entered data will return on the page

        //Now we have the access of project model or you can say project table

        //This method is used to store the data in database. Here Project is model (which is actually accessing projects table)
        //Note we pass the in this method as array.
        Project::create(
            [
            'color' => $request->color, //here 'color' is the column name in the table and in $request->color (color) is the input field name in the form and $request is the property through which we access name of input field
            'icon' => $request->icon,
            'name' => $request->name
            ]
        );

        return redirect()->back(); //this line redirect the page where it comes from. project/create
    }
}
