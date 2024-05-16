<div>
    <x-ts-icon name="edit"
        wire:click="$toggle('modal')"
        color="blue" />

    <x-ts-modal title="EDITAR DESTINO"
        wire="modal"
        persistent>
        <form wire:submit="edit" class="space-y-8">
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
    </x-ts-modal>
</div>
