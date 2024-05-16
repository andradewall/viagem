<div x-data="{ date: @js($date) }">
    <x-ts-button :outline="!$selected"
        @click="$dispatch('date::selected', { date })">
        {{ $date }}
    </x-ts-button>
</div>
