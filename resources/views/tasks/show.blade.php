<div>
    <p>Id: {{ $task->id }}</p>
    <p>Name: {{ $task->name }}</p>
    <p>Description:{{ $task->description }}</p>

    <form method="POST" action="{{ route('tasks.destroy', $task) }}">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>
</div>
