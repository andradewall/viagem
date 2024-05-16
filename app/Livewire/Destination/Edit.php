<?php

namespace App\Livewire\Destination;

use App\Models\{Destination, Tag};
use Illuminate\Contracts\View\View;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Edit extends Component
{
    use Interactions;

    public $modal;

    public ?string $id;

    public ?string $name;

    public ?array $tags;

    public ?array $tagsList;

    public ?string $description = '';

    /**
     * @return array<string,array<int,string>>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:32',
                'unique:destinations,name',
            ],
            'tags' => [
                'required',
                'array',
            ],
        ];
    }

    public function mount($destination): void
    {
        $this->id = $destination->id;

        $this->name = $destination->name;

        $this->description = $destination->description;

        $this->tags = $destination->tags->map(function ($item) {
            return $item->id;
        })->toArray();

        $this->tagsList = Tag::all()
            ->map(fn ($item) => [
                'label'       => $item->name,
                'value'       => $item->id,
                'description' => $item->description,
            ])
            ->toArray();
    }

    public function edit(): void
    {
        try {
            $model = Destination::find($this->id);

            $model->update([
                'name'        => $this->name,
                'description' => $this->description,
            ]);

            $model->tags()->sync($this->tags);

            $this->toast()->success('Destino atualizado!')->send();

            $this->dispatch('destinations::refresh');

        } catch (\Throwable $th) {
            $this->toast()
                ->expandable(true)
                ->error(
                    'Erro!',
                    "Não foi possível editar este destino. Motivo: " . $th->getMessage()
                )->send();
        }
    }

    public function render(): View
    {
        return view('livewire.destination.edit');
    }
}
