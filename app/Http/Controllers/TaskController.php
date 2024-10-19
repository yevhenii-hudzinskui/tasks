<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $deleted = $request->query('deleted');

        $tasks = Task::query()
        ->when($search, function ($query, string $search) {
            $query->where('name', '=', $search);
        })
        ->when($deleted, function ($query) {
            $query->withTrashed();
        })
        ->simplePaginate(15)
        ->withQueryString();

        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request){
        Task::create($request->safe()->only(['name', 'description']));

        return to_route("tasks.index");
    }

    public function update(Task $task, UpdateTaskRequest $request){
        $task->update($request->safe()->only(['name', 'description']));

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
