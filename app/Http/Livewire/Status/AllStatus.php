<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;

class AllStatus extends Component
{
    public $selected;
    public $deleteModal = false;


    protected $listeners = [
        'toggleDeleteModal' => 'toggleDeleteModal',
    ];


    public function deleteStatus()
    {
        $this->deleteModal = false;
        if ($this->selected) {
            $status = Status::find($this->selected);
            $status->delete();
            $this->emit('statusUpdated');
        }
    }
    public function toggleDeleteModal($id = null)
    {
        $this->selected = $id;
        $this->deleteModal = !$this->deleteModal;
    }
    public function toggleModal($id = null)
    {
        $this->emit('openNewStatusModal', $id);
    }
    public function render()
    {
        return view('livewire.status.all-status');
    }
}
