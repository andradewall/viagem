<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class DateInfo extends Component
{
    public ?string $info;

    public function mount($info)
    {
        $this->info = $info;
    }

    #[On('date::selected')]
    public function handleDateSelection($date)
    {
        $dateFormatted = Carbon::parse($date)->format('Y-m-d');

        $this->info = $dateFormatted;
    }

    public function render()
    {
        return view('livewire.date-info');
    }
}
