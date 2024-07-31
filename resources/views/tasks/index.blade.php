<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>

    <form method="GET" action="{{ route('tasks.index') }}">
        <select name="category_id">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <select name="status">
            <option value="">Select Status</option>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
        </select>

        <button type="submit">Filter</button>
    </form>

    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->status }} - <a href="{{ route('tasks.edit', $task) }}">Edit</a> - 
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
