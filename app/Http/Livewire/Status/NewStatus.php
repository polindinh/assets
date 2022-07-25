<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;

class NewStatus extends Component
{
    public $newStatusModal = false;

    public $name;

    public $selected;

    protected $listeners = [
        'openNewStatusModal' => 'toggleModal',
    ];

    public function toggleModal($id)
    {
        if ($id) {
            $this->selected = $id;
            $this->name = Status::find($id)->name;
        }
        $this->newStatusModal = !$this->newStatusModal;
    }

    public function createNew()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
        ]);

        if ($this->selected) {
            $status = Status::find($this->selected);
            $status->name = $this->name;
            $status->save();
        } else {

            Status::create([
                'name' => $this->name,
            ]);
        }

        $this->newStatusModal = false;

        $this->name = "";

        $this->emit('statusUpdated');
    }



    public function render()
    {
        return view('livewire.status.new-status');
    }
}
