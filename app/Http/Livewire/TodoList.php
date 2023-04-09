<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                TodoList 
                {{-- Close your eyes. Count to one. That is how long forever feels. --}}
            </div>
        blade;
    }
}
