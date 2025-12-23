<div class="todo-app">
    <h2>📝 Todo List</h2>

    <form wire:submit.prevent="add" class="todo-form">
        <input
            type="text"
            wire:model="todo"
            placeholder="What needs to be done?"
        >
        <button type="submit">Add</button>
    </form>

    <ul class="todo-list">
        @foreach ($todos as $index => $todo)
            <li class="todo-item">
                <span class="todo-text">
                    <strong>{{ $index+1 }}.</strong>
                    {{ $todo }}
                </span>
                <button
                    wire:click="remove({{ $index }})"
                    class="delete-btn"
                    title="Delete"
                >
                    <i class="fas fa-trash"></i>
                </button>
            </li>
        @endforeach
    </ul>
</div>
