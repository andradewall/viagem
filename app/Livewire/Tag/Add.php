<?php

namespace App\Livewire\Tag;

use App\Models\{Category, Tag};
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Add extends Component
{
    use Interactions;

    #[Validate('required|max:16|unique:tags,name')]
    public ?string $name;

    #[Validate('required|exists:categories,id')]
    public ?string $category;

    public ?array $categories;

    public ?string $description = '';

    public function mount(): void
    {
        $this->categories = Category::all()
            ->map(fn ($item) => [
                'label'       => $item->name,
                'value'       => $item->id,
                'description' => $item->description,
            ])
            ->toArray();
    }

    public function add(): void
    {
        $this->validate();

        Tag::query()
            ->create([
                'name'        => $this->name,
                'description' => $this->description,
                'category_id' => $this->category,
            ]);

        $this->dispatch('tags::created');

        $this->toast()->success('Tag adicionada!')->send();

        $this->reset(
            'name',
            'category',
            'description'
        );
    }

    public function render(): View
    {
        return view('livewire.tag.add');
    }
}
