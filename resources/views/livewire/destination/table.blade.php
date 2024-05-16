<div>
    <x-ts-table :$headers :$rows :$sort paginate filter loading>
        @interact('column_action', $row)
            <div class="flex space-x-4">
                <livewire:destination.edit :destination="$row" :key="uniqid()" />
                <livewire:destination.delete :destination="$row" :key="uniqid()" />
            </div>
        @endinteract
    </x-ts-table>
</div>
