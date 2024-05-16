<x-ts-card>
    <x-slot:header>
        {{ mb_strtoupper($name) }}
    </x-slot:header>

    <ul>
        <li>Categoria: {{ $category }}</li>
        <li>Descrição: {{ $description ?: '-' }}</li>
    </ul>

    @if ($showEdit)
        <livewire:tag.edit tag="{{ $id }}" />
    @endif

    <x-slot:footer>
        <x-ts-icon name="edit"
            color="blue"
            wire:click="edit" />

        <x-ts-icon name="trash"
            color="red"
            wire:click="delete" />
    </x-slot:footer>

</x-ts-card>
