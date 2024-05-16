<?php

namespace App\Livewire\Tag;

use App\Models\Tag;
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

    public ?string $category = '';

    public bool $showEdit = false;

    /**
    * @param array<mixed> $tag
    */
    public function mount(array $tag): void
    {
        $this->id          = $tag['id'];
        $this->category    = $tag['category']['name'];
        $this->name        = $tag['name'];
        $this->description = $tag['description'];
    }

    public function edit(): void
    {
        $this->showEdit = true;
    }

    #[On('tags::close-edit')]
    public function closeEdit(): void
    {
        $this->showEdit = false;
    }

    #[On('tags::refresh')]
    public function refreshTag(): void
    {
        $model = Tag::with('category')->find($this->id);

        $this->name = $model->name;

        $this->category = $model->category->name;

        $this->description = $model->description;
    }

    public function delete(): void
    {
        $this->dialog()
                ->question('Excluir Tag', 'Tem certeza?')
                ->confirm('Excluir', 'destroy')
                ->cancel('Cancel', 'cancelDelete')
                ->send();
    }

    public function destroy(): void
    {
        try {
            $tag = Tag::find($this->id);

            $tag->category()->dissociate();

            $tag->delete();

            $this->toast()->success('Tag excluída!')->send();

            $this->dispatch('tags::deleted');
        } catch (\Throwable $th) {
            $this->toast()
                ->error(
                    title: 'Erro!',
                    description: 'Não foi possível excluir esta tag'
                )->send();
        }
    }

    public function cancelDelete(): void
    {
        $this->toast()->info('Exclusão cancelada')->send();
    }

    public function render(): View
    {
        return view('livewire.tag.details');
    }
}
