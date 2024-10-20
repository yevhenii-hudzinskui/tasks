<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::resource('tasks', TaskController::class)
    ->withTrashed(['index', 'show', 'restore']);

