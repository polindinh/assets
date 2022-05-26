<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;

class StatusDropdown extends Component
{
    public $selectedStatus;

    protected $listeners = [
        'newStatusCreated' => '$refresh',
    ];


    public function setStatus(){
        $this->emit('selecStatus', $this->selectedStatus);
    }

    public function toggleModal()
    {
        $this->emit('openNewStatusModal');
    }

    public function render()
    {
        $models = Status::all();
        return view('livewire.status.status-dropdown', compact('models'));
    }
}
