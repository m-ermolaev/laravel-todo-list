<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $name;

    public function handleNameChange()
    {
        $this->resetValidation('name');
    }

    public function handleCreateClick()
    {
        $nameExist = Task::where('name', $this->name)->count() > 0;
        if (!$nameExist) {
            Task::create(['name' => $this->name]);

            $this->name = '';
            $this->emit('refreshList');
        } else {
            $this->addError('name', 'Task with this name already exists in the list.');
        }
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
