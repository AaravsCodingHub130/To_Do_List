<!-- resources/views/tasks/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            margin: 10px 0;
            font-size: 1.1rem;
        }
        .status {
            font-weight: bold;
            color: {{ $task->completed ? '#28a745' : '#dc3545' }};
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: <span class="status">{{ $task->completed ? 'Completed' : 'Not Completed' }}</span></p>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
