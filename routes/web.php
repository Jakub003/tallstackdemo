<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\KanbanController;
use App\Http\Controllers\Backend\TasksController;
use App\Http\Controllers\Backend\MessageController;

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
});

Route::get('/jakub/add_project', function () {
    return view('jakub/add_project');
});
















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
