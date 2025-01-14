<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css?'.uniqid()) }}">
</head>
<body>

<main class="app-main-block">
    <div style="text-align: center">
        <div class="header">
            <h1>Tasks</h1>
            <a href="/livewire/tasks" class="btn" wire:navigate >Back to overview</a>
        </div>
    </div>

    <div>
        <div style="text-align: center">
            <livewire:task />
        </div>
    </div>
</main>

</body>
</html>





