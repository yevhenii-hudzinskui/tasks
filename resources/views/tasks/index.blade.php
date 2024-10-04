<div>
   My tasks
</div>
<a href="{{ route('tasks.create') }}">Add new tasks</a>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Completed</th>
{{--        <th>Actions</th>--}}
    </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->compaleted }}</td>
{{--                <td><a href="{{ route('tasks.edit', $task) }}">edit</a></td>--}}
            </tr>
        @endforeach
    </tbody>
</table>
