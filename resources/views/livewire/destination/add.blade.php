<x-ts-card header="NOVO DESTINO">
    <form wire:submit="add" class="space-y-8">
        <x-ts-input label="Nome *" wire:model="name" />

        <x-ts-select.styled label="Tags *"
            wire:model="tags"
            :options="$tagsList"
            select="label:label|value:value"
            searchable
            multiple />

        <x-ts-textarea label="Descrição *"
            wire:model="description" />

        <x-ts-button text="Salvar" color="green" />
    </form>
</x-ts-card>
