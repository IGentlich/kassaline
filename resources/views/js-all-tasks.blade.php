<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css?'.uniqid()) }}">
</head>
<body>

<main class="app-main-block">
    <div>
        <div class="header">
            <h1>Tasks</h1>
            <a href="/new-task" class="btn">Create new task</a>
        </div>
    </div>

    <ul>
        @foreach($tasks as $task)
            <li class="task-element {{ $task['status'] == '1' ? 'is-complete' : '' }}">
                <div class="task-block">
                    <div class="task-block-left">
                        <div class="task-title">{{ $task['title'] }}</div>
                        <div class="task-actions">
                            <button class="btn red-btn delete-button" data-id="{{ $task['id'] }}">Delete task</button>
                        </div>
                    </div>
                    <div class="task-block-right">
                        <label for="{{ $task['id'] }}-task-status"> Complete</label>
                        <input id="{{ $task['id'] }}-task-status" class="complete-checkbox" type="checkbox" data-id="{{ $task['id'] }}"
                                        value="{{ $task['status'] }}" {{ $task['status'] == '1' ? 'checked' : '' }} />
                    </div>

                </div>
            </li>
        @endforeach
    </ul>

</main>

<script src="{{ URL::asset('js/script.js?'.uniqid()) }}"></script>
</body>
</html>
