<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\KanbanController;
use App\Http\Controllers\Backend\TasksController;
use App\Http\Controllers\Backend\MessageController;

//Path reference of the controller if we no define the controller path, Route will not work
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    //Kanban
    Route::get('kanban', [KanbanController::class, 'index'])->name('kanban');
    Route::get('kanban/create', [KanbanController::class, 'create'])->name('kanban.create');
    Route::post('kanban/store', [KanbanController::class, 'store'])->name('kanban.store');

    //Kanban Tasks
    Route::get('kanban/{project}/tasks/create', [TasksController::class, 'create'])->name('kanban.tasks.create');
    Route::post('kanban/{project}/tasks/store', [TasksController::class, 'store'])->name('kanban.tasks.store');
    Route::get('kanban/{project}/tasks', [TasksController::class, 'tasks'])->name('kanban.tasks');
    Route::post('kanban/{tag}/tasks', [TasksController::class, 'filterByTag'])->name('kanban.tasks.filterByTag');

    //Tasks Messages
    Route::get('kanban/{project}/{task}/messages', [MessageController::class, 'index'])->name('kanban.project.task.message');
    Route::post('kanban/{project}/{task}/messages', [MessageController::class, 'store'])->name('kanban.project.task.message.store');

});

// Attempt #2
Route::get('/jakub', function () {
    return view('jakub/kanban');
})->name('jakub');

Route::get('/jakub/project_settings', function () {
    return view('jakub/project_settings');
})->name('project-settings');

Route::get('/jakub/view_project', function () {
    return view('jakub/view_project');
})->name('view-project');


/*
For now do not use resource route. just concentrate get, post routes.
*/

//Route::get('url', [NameController::class, 'MethdName'])->name('name of route');
//try to name the route as it URL shown.
//
//For Example:
//URL = project/create  So route name should be project.create
//


//This route is used to access the Controller method (index) which is responsible for show create project title page.
// To get the Html or Blade view, we use get method. so we write Route::get
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');

//This route is used to access Controller method (store) which is responsible for data store in database.
//When we want to store data in database we use (post) method. So we write Route::post
Route::post('project/store', [ProjectController::class, 'store'])->name('project.store');















Route::get('/', function () {
    return view('welcome');
});

Route::get('/ideas', function () {
    return view('ideas');
});

Route::get('/backlog', function () {
    return view('backlog');
});

Route::get('/dojo', function () {
    return view('layouts/dojoapp');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/backend/dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/navigation', function () {
    return view('/backend/navigation');
})->name('navigation');

Route::middleware(['auth:sanctum', 'verified'])->get('/addpages', function () {
    return view('/backend/addpages');
})->name('addpages');

Route::middleware(['auth:sanctum', 'verified'])->get('/viewpages', function () {
    return view('/backend/viewpages');
})->name('viewpages');


Route::middleware(['auth:sanctum', 'verified'])->get('/viewideas', function () {
    return view('/backend/viewideas');
})->name('viewideas');

Route::middleware(['auth:sanctum', 'verified'])->get('/kanbantask', function () {
    return view('/backend/kanbantask');
})->name('kanbantask');
