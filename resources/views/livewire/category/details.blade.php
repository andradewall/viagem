<x-ts-card>
    @if($description)
        <x-slot:header>
            {{ mb_strtoupper($name) }}
        </x-slot:header>

        <ul>
            <li>Descrição: {{ $description }}</li>
        </ul>
    @else
        {{ strtoupper($name) }}
    @endif

    @if ($showEdit)
        <livewire:category.edit category="{{ $id }}" />
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
