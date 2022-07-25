<?php

namespace App\Http\Livewire\Hardware;

use App\Models\Hardware;
use Livewire\Component;

class Models extends Component
{
    public $model;

    protected $listeners = [
        'harwareUpdated' => '$refresh',
        'toggleDeleteHardwareModal' => 'toggleDeleteModal'
    ];

    public $deleteModal = false;

    public $hid;

    public function deleteHardware()
    {
        $hardware = Hardware::find($this->hid);
        $hardware->delete();
        $this->emit('hardwareUpdated');
        $this->toggleDeleteModal();
    }
    public function toggleDeleteModal($hid = null)
    {
        $this->hid = $hid;
        $this->deleteModal = !$this->deleteModal;
    }

    public function toggleModal()
    {
        $this->emit('openNewHardwareModal');
    }

    public function render()
    {
        return view('livewire.hardware.models');
    }
}
