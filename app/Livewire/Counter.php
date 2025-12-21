<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter;

    public $pluss;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }
    public function plus($by)
    {
        $this->pluss = $this->pluss + $by;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
