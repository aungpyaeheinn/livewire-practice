<div>
    {{-- The whole world belongs to you. --}}

    <form wire:submit="add">
        <input type="text" wire:model="todo">

        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo }}
                <button wire:click='remove({{ $todo }})' wire:confirm='Are you sure you want to remove this?'>Undo</button>
            </li>
        @endforeach
    </ul>
</div>
