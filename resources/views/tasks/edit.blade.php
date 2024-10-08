<div>
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')
        <label>Name
            <input type="text" name="name" value="{{ $task->name }}">
        </label><br/>
        <label>Description
            <input type="text" name="description" value="{{ $task->description }}">
        </label><br/>
        <button type="submit">Update</button>
    </form>
</div>
