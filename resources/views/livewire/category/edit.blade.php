<div class="mt-8">
    <form wire:submit="save" class="space-y-8">
        <x-ts-input label="Nome *" wire:model="name"  />

        <x-ts-textarea label="Descrição" wire:model="description" resize />

        <x-ts-button text="Salvar"
            type="submit"
            color="green" />

        <x-ts-button text="Cancelar"
            type="button"
            wire:click="close"
            color="secondary"
            outline />
    </form>
</div>
