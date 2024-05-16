<x-ts-card header="NOVA TAG">
    <form wire:submit="add" class="space-y-8">
        <x-ts-input label="Nome *" wire:model="name" />

        <x-ts-select.styled label="Categoria *"
            wire:model="category"
            :options="$categories"
            select="label:label|value:value"
            searchable />

        <x-ts-textarea label="Descrição" wire:model="description" resize />

        <x-ts-button text="Salvar" color="green" />
    </form>
</x-ts-card>
