<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', WelcomeController::class);

Route::view('/', 'projects.index')->name('projects.index');

Route::view('projects/{project}', 'projects.show')->name('projects.show');
