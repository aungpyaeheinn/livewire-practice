<div class="flex flex-col items-center mt-10 min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300 p-4">
    <h1 class="text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">Livewire Reactive Calculator</h1>

    <form wire:submit.prevent="calculate"
          class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-full max-w-md space-y-4">
        <!-- Inputs -->
        <div class="grid grid-cols-3 gap-3 items-center">
            <input type="number" wire:model="firstNumber"
                   class="border-2 border-indigo-600 rounded-md p-2 w-full text-center text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700"
                   placeholder="0">

            <select wire:model="operator"
                    class="border-2 border-indigo-600 rounded-md p-2 text-center bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <input type="number" wire:model="secondNumber"
                   class="border-2 border-indigo-600 rounded-md p-2 w-full text-center text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700"
                   placeholder="0">
        </div>

        <!-- Optional manual submit button -->
        <button type="submit"
                class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-md hover:bg-indigo-700 transition">
            Calculate
        </button>

        <!-- Result -->
        <div class="mt-4 text-xl font-bold text-center text-gray-900 dark:text-gray-100">
            Result: {{ $result }}
        </div>
    </form>
</div>
