<?php

namespace App\Http\Livewire\Hardware;

use App\Models\Hardware;
use Livewire\Component;

class HardwareDropdown extends Component
{
    public $model;

    protected $listeners = [
        'newHardwareCreated' => '$refresh',
    ];

    public function setHardware(){
        $this->emit('hardwareSelected', $this->model);
    }

    public function toggleModal()
    {
        $this->emit('openNewHardwareModal');
    }

    public function render()
    {
        $models = Hardware::all();
        return view('livewire.hardware.hardware-dropdown', compact('models'));
    }
}
