<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Exception;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Details extends Component
{
    use Interactions;

    public ?string $id = '';

    public ?string $name = '';

    public ?string $description = '';

    public bool $showEdit = false;

    /**
    * @param array<mixed> $category
    */
    public function mount(array $category): void
    {
        $this->id          = $category['id'];
        $this->name        = $category['name'];
        $this->description = $category['description'];
    }

    public function edit(): void
    {
        $this->showEdit = true;
    }

    #[On('categories::close-edit')]
    public function closeEdit(): void
    {
        $this->showEdit = false;
    }

    #[On('categories::refresh')]
    public function refreshCategory(): void
    {
        $model = Category::find($this->id);

        $this->name = $model->name;

        $this->description = $model->description;
    }

    public function delete(): void
    {
        $this->dialog()
                ->question('Excluir Categoria', 'Tem certeza?')
                ->confirm('Excluir', 'destroy')
                ->cancel('Cancel', 'cancelDelete')
                ->send();
    }

    public function destroy(): void
    {
        try {
            $category = Category::with('tags')->find($this->id);

            if ($category->tags()->count() > 0) {
                throw new Exception('Esta categoria possuí tags, delete-as antes de remover');
            }

            $category->delete();

            $this->toast()->success('Categoria excluída!')->send();

            $this->dispatch('categories::deleted');
        } catch (\Throwable $th) {
            $this->toast()
                ->expandable(true)
                ->error(
                    'Erro!',
                    "Não foi possível excluir esta categoria. Motivo: " . $th->getMessage()
                )->send();
        }
    }

    public function cancelDelete(): void
    {
        $this->toast()->info('Exclusão cancelada')->send();
    }

    public function render(): View
    {
        return view('livewire.category.details');
    }
}
