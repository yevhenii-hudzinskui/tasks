@extends('layouts.app')

@section('content')
    <div>
       My tasks
    </div>
    <a href="{{ route('tasks.create') }}">Add new tasks</a>

    <form method="GET" action="{{ route('tasks.index') }}">
        <label> Search:
            <input type="text" name="search" value="{{ request('search') }}">
        </label>
        <label> With deleted:
            <input type="checkbox" name="deleted" value="1" @checked(request('deleted'))>
        </label>
        <label> Sort:
            <select name="sort">
                <option value="a-z" @selected(request('sort') == 'a-z')>A-Z</option>
                <option value="z-a" @selected(request('sort') == 'z-a')>Z-A</option>
            </select>
        </label>
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('tasks.index') }}">Reset filters</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Completed</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task) }}">
                            {{ $task->name }}
                        </a>
                    </td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->compaleted }}</td>
                    <td>{{ $task->status() }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}">edit</a> |
                        <a href="{{ route('tasks.show', $task) }}">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tasks->links() }}
@endsection
