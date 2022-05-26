<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;

class NewStatus extends Component
{
    public $newStatusModal=false;

    public $name;

    protected $listeners = [
        'openNewStatusModal' => 'toggleModal',
    ];

    public function toggleModal()
    {
        $this->newStatusModal = !$this->newStatusModal;
    }

    public function createNew()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
        ]);

        Status::create([
            'name' => $this->name,
        ]);

        $this->newStatusModal = false;

        $this->name = "";

        $this->emit('newStatusCreated');
    }



    public function render()
    {
        return view('livewire.status.new-status');
    }
}
