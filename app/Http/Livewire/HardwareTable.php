<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Hardware;

class HardwareTable extends DataTableComponent
{
    protected $model = Hardware::class;

    protected $listeners = [
        'hardwareUpdated' => '$refresh',
    ];

    public function toggleDeleteModal($id = null)
    {
        $this->emit('toggleDeleteHardwareModal', $id);
    }
    public function toggleModal($id)
    {
        $this->emit('openNewHardwareModal', $id);
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
            Column::make("Type", "type"),
            Column::make("Vendor", "vendor"),
            Column::make("Model", "model"),
            Column::make("Size", "size"),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Actions', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        return view('livewire.hardware.actions', compact('row'));
                    }
                )
                ->html(),
        ];
    }
}
