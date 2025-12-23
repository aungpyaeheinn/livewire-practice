<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo;

    public $todos = [];

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->todo = null;
    }

    public function remove($todos)
    {
        $this->remove($todos);
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
