<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Add extends Component
{
    use Interactions;

    #[Validate('required|max:16|unique:categories,name')]
    public ?string $name;

    public ?string $description = '';

    public function add(): void
    {
        $this->validate();

        Category::query()
            ->create([
                'name'        => $this->name,
                'description' => $this->description,
            ]);

        $this->dispatch('categories::created');

        $this->toast()->success('Categoria adicionada!')->send();

        $this->reset(
            'name',
            'description'
        );
    }

    public function render(): View
    {
        return view('livewire.category.add');
    }
}
