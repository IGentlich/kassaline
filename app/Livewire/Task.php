<?php

namespace App\Livewire;

use Livewire\Component;

class Task extends Component
{
    public string $title;
    public int $status;

    /**
     * Create a new task.
     */
    public function create()
    {
        // Validate input with appropriate rules
        $validated = $this->validate([
            'title' => 'required|string|min:3|max:255',
        ]);

        // Create the task using the validated data
        \App\Models\Task::create($validated);

        // Redirect after successful creation
        return redirect('/livewire/tasks');
    }

    /**
     * Delete an existing task by ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id)
    {
        // Find task by ID or fail; delete the task
        $task = \App\Models\Task::findOrFail($id);

        $task->delete();
    }

    /**
     * Render the Livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.task');
    }
}
