<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Collection extends Component
{
    public ?array $categories = [];

    public function mount(): void
    {
        $this->categories = Category::all()
            ->toArray();
    }

    #[On('categories::created')]
    #[On('categories::deleted')]
    public function refreshCollection(): void
    {
        $this->categories = Category::all()
            ->toArray();
    }

    public function render(): View
    {
        return view('livewire.category.collection');
    }
}
