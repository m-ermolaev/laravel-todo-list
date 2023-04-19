<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $name;

    public function handleCreateClick()
    {
        Task::create(['name'=>$this->name]);

        $this->name = '';
        $this->emit('refreshList');
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
