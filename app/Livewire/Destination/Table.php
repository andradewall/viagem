<?php

namespace App\Livewire\Destination;

use App\Models\Destination;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\{Component, WithPagination};

class Table extends Component
{
    use WithPagination;

    public ?int $quantity = 10;

    public ?string $search = null;

    public array $sort = [
        'column'    => 'name',
        'direction' => 'asc',
    ];

    /**
     * @return array<string,mixed>
     */
    #[On('destinations::created')]
    #[On('destinations::refresh')]
    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Nome'],
                ['index' => 'action', 'label' => 'Ação'],
            ],
            'rows' => Destination::query()
                ->with('tags')
                ->select('id', 'name', 'description')
                ->when($this->search, function (Builder $query) {
                    return $query->where('name', 'like', "%{$this->search}%");
                })
                ->orderBy(...array_values($this->sort))
                ->paginate($this->quantity)
                ->withQueryString(),
        ];
    }

    public function render(): View
    {
        return view('livewire.destination.table', $this->with());
    }
}
