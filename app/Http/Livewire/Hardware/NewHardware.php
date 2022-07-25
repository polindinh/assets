<?php

namespace App\Http\Livewire\Hardware;

use App\Models\Hardware;
use Livewire\Component;

class NewHardware extends Component
{

    public $hid;
    public $type;
    public $vendor;
    public $model;
    public $size;

    public $newModelModal = false;

    protected $listeners = [
        'openNewHardwareModal' => 'toggleModal',
    ];



    public function toggleModal($hardwareId = null)
    {
        if (!$hardwareId == null) {
            $hardware = Hardware::find($hardwareId);

            $this->hid = $hardware->id;
            $this->type = $hardware->type;
            $this->vendor = $hardware->vendor;
            $this->model = $hardware->model;
            $this->size = $hardware->size;
        }
        $this->newModelModal = !$this->newModelModal;
    }


    public function createNewHardware()
    {
        // dd('sakdas');
        $data = $this->validate([
            'type' => 'required',
            'vendor' => 'required',
            'model' => 'required',
            'size' => 'required',
        ]);

        if ($this->hid !== null) {
            $hardware = Hardware::find($this->hid);
            $hardware->update($data);
            $this->emit('harwareUpdated');
        } else {
            Hardware::create($data);
            $this->emit('newHardwareCreated');
            $this->emit('hardwareUpdated');
        }

        $this->type = '';
        $this->vendor = '';
        $this->model = '';
        $this->size = '';
        $this->toggleModal();
    }

    public function render()
    {
        return view('livewire.hardware.new-hardware');
    }
}
