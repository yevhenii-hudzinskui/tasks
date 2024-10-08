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

    public function update(Task $task, Request $request){
        $task->update($request->only(['name', 'description']));
        return to_route("tasks.index");
    }

    public function edit(Task $task){
        return view('tasks.edit', ['task' => $task]);
    }

    public function show(Task $task){
        return view('tasks.show', ['task' => $task]);
    }

    public function destroy(Task $task){
        $task->delete();
        return to_route("tasks.index");
    }
}
