<div x-data="{ open: false }" class="max-w-md mx-auto p-4">
    {{-- Search input --}}
    <input type="text" wire:model.debounce.300ms="query" @focus="open = true" @click.away="open = false"
        placeholder="Search..." class="w-full border px-3 py-2 rounded" />

    {{-- Results --}}
    <div x-show="open && @js(count($results) > 0)" x-transition class="border rounded mt-2 bg-white shadow">
        <ul>
            @foreach ($results as $item)
                <li class="px-3 py-2 hover:bg-gray-100 cursor-pointer" @click="open = false">
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>
</div>