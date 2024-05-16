<x-ts-card header="NOVA CATEGORIA">
    <form wire:submit="add" class="space-y-8">
        <x-ts-input label="Nome *" wire:model="name"  />

        <x-ts-textarea label="Descrição" wire:model="description" resize />

        <x-ts-button text="Salvar" color="green" />
    </form>
</x-ts-card>
