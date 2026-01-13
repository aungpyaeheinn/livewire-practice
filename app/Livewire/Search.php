<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public string $query = '';

    public array $items = [
        'Laravel',
        'Livewire',
        'Alpine.js',
        'React',
        'Vue',
        'Tailwind',
        'PHP',
    ];

    public function render()
    {
        $results = collect($this->items)
            ->filter(
                fn($item) =>
                str_contains(strtolower($item), strtolower($this->query))
            );

        return view('livewire.search', [
            'results' => $results,
        ]);
    }
}
