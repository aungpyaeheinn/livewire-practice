<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public int $firstNumber, $secondNumber, $result;

    public function plus()
    {
        $this->result = $this->firstNumber + $this->secondNumber;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
