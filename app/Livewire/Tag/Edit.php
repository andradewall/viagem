<?php

namespace App\Livewire\Tag;

use App\Models\{Category, Tag};
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Edit extends Component
{
    use Interactions;

    public Tag $model;

    public ?string $name;

    public ?string $category;

    public ?array $categories;

    public ?string $description;

    /**
     * @return array<string,array<int,mixed>>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:16',
                Rule::unique('tags')->ignore($this->model),
            ],
            'category' => [
                'required',
                'exists:categories,id',
            ],
        ];
    }

    public function mount(string $tag): void
    {
        $this->model = Tag::with('category')->find($tag);

        $this->name = $this->model->name;

        $this->description = $this->model->description;

        $this->category = $this->model->category->id;

        $this->categories = Category::all()
            ->map(fn ($item) => [
                'label'       => $item->name,
                'value'       => $item->id,
                'description' => $item->description,
            ])
            ->toArray();
    }

    public function close(): void
    {
        $this->dispatch('tags::close-edit');
    }

    public function save(): void
    {
        $this->validate();

        $this->model->update([
            'name'          => $this->name,
            'description'   => $this->description,
            'categories_id' => $this->category,
        ]);

        $this->toast()->success('Tag atualizada!')->send();

        $this->close();

        $this->dispatch('tags::refresh');
    }

    public function render(): View
    {
        return view('livewire.tag.edit');
    }
}
