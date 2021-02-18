<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/addbacklog', function () {
    return view('/backend/addbacklog');
})->name('addbacklog');

Route::middleware(['auth:sanctum', 'verified'])->get('/viewbacklog', function () {
    return view('/backend/viewbacklog');
})->name('viewbacklog');

Route::middleware(['auth:sanctum', 'verified'])->get('/viewideas', function () {
    return view('/backend/viewideas');
})->name('viewideas');
