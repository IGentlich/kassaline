<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{

    /**
     * Create a new task.
     *
     * @param Request $request
     * @return array
     */
    public function create(Request $request): array
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|min:3|max:255',
            ]);

            Task::create($validatedData);

            return [
                'status' => true,
                'error' => null,
                'redirect' => '/tasks',
            ];
        } catch (ValidationException $exception) {
            return [
                'status' => false,
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     * Delete an existing task.
     *
     * @param Request $request
     * @return array
     */
    public function delete(Request $request): array
    {
        $task = Task::findOrFail($request->id);
        $status = $task->delete();

        return [
            'status' => $status,
        ];
    }

    /**
     * Toggle the status of a task.
     *
     * @param Request $request
     * @return array
     */
    public function edit(Request $request): array
    {
        $task = Task::findOrFail($request->id);

        $task->status = !$task->status;
        $status = $task->save();

        return [
            'status' => $status,
        ];
    }
}
