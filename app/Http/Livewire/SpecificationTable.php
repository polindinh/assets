<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PcSpecification;

class SpecificationTable extends DataTableComponent
{
    protected $model = PcSpecification::class;

    protected $listeners = [
        'SpecificationUpdated' => '$refresh',
    ];

    public function toggleDeleteModal($id = null)
    {
        $this->emit('toggleDeleteSpecificationModal', $id);
    }
    public function toggleModal($id)
    {
        $this->emit('openNewSpecificationModal', $id);
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("CPU", "cpu")
                ->sortable(),
            Column::make("GPU", "gpu"),
            Column::make("Memory", "memory")
                ->sortable(),
            Column::make("Storage", "storage"),
            Column::make("SSD", "is_ssd"),
            Column::make("Wifi", "wifi_enabled"),
            Column::make("WWAN", "wwan_enabled"),
            Column::make('Actions', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        return view('livewire.specification.actions', compact('row'));
                    }
                )
                ->html(),

        ];
    }
}
