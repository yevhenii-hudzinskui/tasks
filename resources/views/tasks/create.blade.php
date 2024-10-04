<div>
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label>Name
            <input type="text" name="name" value="">
        </label><br/>
        <label>Description
            <input type="text" name="description">
        </label><br/>
        <button type="submit">Create</button>
    </form>
</div>
