<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class DatePicker extends Component
{
    public array $dates = [
        ['date' => '2024-06-08', 'selected' => true],
        ['date' => '2024-06-09', 'selected' => false],
        ['date' => '2024-06-10', 'selected' => false],
        ['date' => '2024-06-11', 'selected' => false],
        ['date' => '2024-06-12', 'selected' => false],
        ['date' => '2024-06-13', 'selected' => false],
    ];

    #[On('date::selected')]
    public function handleDateSelection($date)
    {
        $format = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');

        // Find date on $dates and change its selected
        $this->dates = array_map(function ($item) use ($format) {
            $newSelected = ($item['date'] === $format) ? true : false;

            return [
                'date' => $item['date'],
                'seleted' => $newSelected,
            ];
        }, $this->dates);
    }

    public function boot()
    {
        $this->dates = $this->dates;
    }

    public function render(): View
    {
        return view('livewire.date-picker', $this->dates);
    }
}
