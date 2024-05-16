<?php

namespace App\Livewire\Destination;

use App\Models\{Destination, Tag};
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Add extends Component
{
    use Interactions;

    #[Validate('required|max:32|unique:destinations,name')]
    public ?string $name;

    #[Validate('required|array')]
    public ?array $tags;

    public ?array $tagsList;

    public ?string $description = '';

    public function mount(): void
    {
        $this->tagsList = Tag::all()
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

        try {
            $destination = Destination::create([
                'name'        => $this->name,
                'description' => $this->description,
            ]);

            $destination->tags()->attach($this->tags);

            $this->dispatch('destinations::created');

            $this->toast()->success('Destino adicionado!')->send();

            $this->reset(
                'name',
                'tags',
                'description'
            );

        } catch (\Throwable $th) {
            $this->toast()
                ->error(
                    title: 'Erro!',
                    description: 'Não foi possível adicionar este destino'
                )->send();
        }
    }

    public function render(): View
    {
        return view('livewire.destination.add');
    }
}
