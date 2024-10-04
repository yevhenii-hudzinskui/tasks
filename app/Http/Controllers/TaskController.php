<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        Task::create($request->only(['name', 'description']));

        return to_route("tasks.index");
    }

//    public function edit(Task $task){
//        dd($task->name, $task->id);
//    }
}
