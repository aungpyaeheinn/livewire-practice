<div>
    {{-- The whole world belongs to you. --}}

    <form wire:submit.prevent="add">
        <input type="text" wire:model="todo">

        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $index => $todo)
            <li>
                {{ $todo }}
                <button wire:click='remove({{ $index }})'><i class="fas fa-trash"></i></button>
            </li>
        @endforeach
    </ul>
</div>
