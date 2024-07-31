<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
</head>
<body>
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <button type="submit">Create Category</button>
    </form>
    <a href="{{ route('categories.index') }}">Back to Category List</a>
</body>
</html>
