<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{

    public function delete($id)
    {
        \App\Models\Task::findOrFail($id)->delete();

        $this->redirect('/livewire/tasks');
    }

    public function edit($id)
    {
        $task = \App\Models\Task::findOrFail($id);
        $task->status = !$task->status;
        $task->save();
    }

    public function render()
    {
        return view('livewire.tasks', ['tasks' => \App\Models\Task::all()]);
    }
}
