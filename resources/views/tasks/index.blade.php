<div>
   My tasks
</div>
<a href="{{ route('tasks.create') }}">Add new tasks</a>

<form method="GET" action="{{ route('tasks.index') }}">
    <label> Search
        <input type="text" name="search" value="{{ request('search') }}">
    </label>
    <label> With deleted
        <input type="checkbox" name="deleted" value="1" @checked(request('deleted'))>
    </label>
    <button type="submit">Search</button>
</form>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Completed</th>
        <th>Deleted</th>
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
                <td>{{ $task->deleted_at }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}">edit</a> |
                    <a href="{{ route('tasks.show', $task) }}">show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tasks->links() }}
