<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

// main part
Route::get('/', function () {
    return view('welcome');
});

//livewire part
Route::get('/livewire/tasks', function () {
    return view('all-tasks');
});
Route::get('/livewire/new-task', function () {
    return view('new-task');
});

//vanilla part with routes
Route::get('/tasks', function () {
    return view('js-all-tasks', ['tasks' => Task::all()]);
});
Route::get('/new-task', function () {
    return view('js-new-task');
});
Route::post('/tasks',        [TaskController::class, 'create']);
Route::patch('/tasks/{id}',    [TaskController::class, 'edit']);
Route::delete('/tasks/{id}', [TaskController::class, 'delete']);

