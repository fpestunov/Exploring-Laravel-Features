<!DOCTYPE html>
<html>
<head>
    <title>Tasks index page</title>
</head>
<body>
<h1>My tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
        @endforeach
    </ul>
</body>
</html>
