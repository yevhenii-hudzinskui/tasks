<div>
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label>Name
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label><br/>
        <label>Description
            <input type="text" name="description" value="{{ old('description') }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label><br/>
        <button type="submit">Create</button>
    </form>
</div>
