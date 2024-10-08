<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::post('/server', ProvisionServer::class);

Route::resource('tasks', TaskController::class);

Route::get('tasks/index', [TaskController::class, 'index'])
    ->name('tasks.index');
//
//Route::get('tasks/create', [TaskController::class, 'create'])
//    ->name('tasks.create');
//
//Route::post('tasks/store', [TaskController::class, 'store'])
//    ->name('tasks.store');
//
//Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])
//    ->name('tasks.edit');
//
//Route::put('tasks/{task}/update', [TaskController::class, 'update'])
//    ->name('tasks.update');
//
//Route::get('tasks/{task}/show', [TaskController::class, 'show'])
//    ->name('tasks.show');
//
//Route::delete('tasks/{task}/destroy', [TaskController::class, 'destroy'])
//    ->name('tasks.destroy');
