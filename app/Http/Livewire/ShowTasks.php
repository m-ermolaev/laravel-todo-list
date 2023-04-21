<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class ShowTasks extends Component
{
    protected $listeners = ['refreshList' => '$refresh'];

    public function handleDeleteClick($id)
    {
        Task::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.show-tasks', [
            'tasks' => Task::all()
        ]);
    }
}
