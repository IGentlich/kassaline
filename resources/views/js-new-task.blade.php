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
            <a href="/tasks" class="btn" wire:navigate>Back to overview</a>
        </div>
    </div>

    <div>
        <div class="form">
            <div class="error-block"></div>
            <div>
                <label for="new-task-title"> Title</label><br>
                <input id="new-task-title" wire:model="title">
            </div>
            <div>
                <label for="new-task-status"> Status</label><br>
                <input id="new-task-status" type="checkbox" value="0" wire:model="status">
            </div>
            <button class="btn" id="save-button">Save</button>
        </div>
    </div>
</main>

<script src="{{ URL::asset('js/script.js?'.uniqid()) }}"></script>
</body>
</html>





