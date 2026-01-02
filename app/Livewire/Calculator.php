<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public int $firstNumber = 0;
    public int $secondNumber = 0;
    public string $operator = '+';
    public $result = null;

    // Called when any property updates (reactive)
    public function updated($propertyName)
    {
        $this->calculate();
    }

    // Main calculation method (can also be called by submit button)
    public function calculate()
    {
        switch ($this->operator) {
            case '+':
                $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $this->result = $this->secondNumber != 0
                    ? $this->firstNumber / $this->secondNumber
                    : 'Cannot divide by zero';
                break;
        }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
