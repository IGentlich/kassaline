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
            <h1>Choosing the project</h1>
        </div>
    </div>

    <div class="projects">
        <div>
            <a class="btn" href="/livewire/tasks">Livewire Project</a>
            <p>This project is using Laravel Livewire only, without any routes.</p>
        </div>

        <div>
            <a class="btn" href="/tasks">Javascript Project</a>
            <p>This project is using Javascript only, with fetch requests to the routes.</p>
        </div>
    </div>

</main>

</body>
</html>
