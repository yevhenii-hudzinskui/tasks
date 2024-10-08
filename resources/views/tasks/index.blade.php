<div>
   My tasks
</div>
<a href="{{ route('tasks.create') }}">Add new tasks</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Completed</th>
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
                <td>
                    <a href="{{ route('tasks.edit', $task) }}">edit</a> |
                    <a href="{{ route('tasks.show', $task) }}">show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
