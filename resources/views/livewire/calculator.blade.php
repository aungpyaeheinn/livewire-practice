<div>
    <form wire:submit="plus()">
        <div class="mt-2">
            <span value=""></span>
            <input type="number" wire:model='firstNumber'>
            <select class="p-4 border rounded-md text-white">
                <option value="+">+</option>
            </select>
            <input type="number" wire:model='secondNumber'>
        </div>
        <button type="submit">Calculate</button>
    </form>
        @if($result !== null)
        <div>Result: {{ $result }}</div>
    @endif
</div>
