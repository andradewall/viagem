<?php

namespace App\Livewire\Tag;

use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Collection extends Component
{
    public ?array $tags = [];

    public function mount(): void
    {
        $this->tags = Tag::with('category')
            ->get()
            ->toArray();
    }

    #[On('tags::created')]
    #[On('tags::deleted')]
    public function refreshCollection(): void
    {
        $this->tags = Tag::with('category')
            ->get()
            ->toArray();
    }

    public function render(): View
    {
        return view('livewire.tag.collection');
    }
}
