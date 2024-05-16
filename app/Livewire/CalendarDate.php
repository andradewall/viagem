<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Livewire\Component;

class CalendarDate extends Component
{
    public ?string $date;

    public bool $selected = false;

    public function mount(array $data): void
    {
        $this->date = Carbon::parse($data['date'])->format('d/m/Y');

        $this->selected = $data['selected'];
    }

    public function render(): View
    {
        return view('livewire.calendar-date');
    }
}
