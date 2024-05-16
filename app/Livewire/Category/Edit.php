<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Edit extends Component
{
    use Interactions;

    public Category $model;

    public ?string $name;

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
                Rule::unique('categories')->ignore($this->model),
            ],
        ];
    }

    public function mount(string $category): void
    {
        $this->model = Category::find($category);

        $this->name = $this->model->name;

        $this->description = $this->model->description;
    }

    public function close(): void
    {
        $this->dispatch('categories::close-edit');
    }

    public function save(): void
    {
        $this->validate();

        $this->model->update([
            'name'        => $this->name,
            'description' => $this->description,
        ]);

        $this->toast()->success('Categoria atualizada!')->send();

        $this->close();

        $this->dispatch('categories::refresh');
    }

    public function render(): View
    {
        return view('livewire.category.edit');
    }
}
