<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Status;

class StatusTable extends DataTableComponent
{
    protected $model = Status::class;

    protected $listeners = [
        'statusUpdated' => '$refresh',
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function toggleModal($id = null)
    {
        $this->emit('openNewStatusModal', $id);
    }
    public function toggleDeleteModal($id = null)
    {
        $this->emit('toggleDeleteModal', $id);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Actions", "id")
                ->format(
                    function ($value, $row, Column $column) {
                        return view('livewire.status.actions', compact('row'));
                    }
                )
                ->html(),
        ];
    }
}
