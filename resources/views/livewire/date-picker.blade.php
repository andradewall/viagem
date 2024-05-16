<div>
    Escolha uma data que deseja visualizar

    <div class="flex space-x-4 w-full">
        @foreach ($dates as $data)
            <livewire:calendar-date :$data />
        @endforeach
    </div>
</div>
