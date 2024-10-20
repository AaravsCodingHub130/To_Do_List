<!-- resources/views/tasks/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .completed {
            text-decoration: line-through;
            color: #888;
        }
        .toggle-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .toggle-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Task List</h1>

    <a href="{{ route('tasks.create') }}">Add New Task</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($tasks as $task)
            <li>
                <div>
                    <strong class="{{ $task->completed ? 'completed' : '' }}">{{ $task->title }}</strong>
                    <p>{{ $task->description }}</p>
                </div>
                <div class="actions">
                    <!-- Toggle task completion -->
                    <form action="{{ route('tasks.toggleComplete', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="toggle-button">
                            {{ $task->completed ? 'Mark as Incomplete' : 'Mark as Complete' }}
                        </button>
                    </form>

                    <!-- Edit task -->
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                    <!-- Delete task -->
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
