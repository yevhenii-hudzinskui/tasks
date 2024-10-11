<div>
    <h1>Edit Task</h1>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')
        <label>Name
            <input type="text" name="name"  value="{{ old('name', $task->name) }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label><br/>
        <label>Description
            <input type="text" name="description" value="{{ old('description', $task->description) }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label><br/>
        <button type="submit">Update</button>
    </form>
</div>
