<?php

namespace App\Http\Livewire\Hardware;

use App\Models\Hardware;
use Livewire\Component;

class NewHardware extends Component
{

    public $type;
    public $vendor;
    public $model;
    public $size;

    public $newModelModal=false;

    protected $listeners = [
        'openNewHardwareModal' => 'toggleModal',
    ];



    public function toggleModal()
    {
        $this->newModelModal=!$this->newModelModal;
    }


    public function createNewHardware(){
       // dd('sakdas');
        $data = $this->validate([
            'type'=>'required',
            'vendor'=>'required',
            'model'=>'required',
            'size'=>'required',
        ]);

        Hardware::create($data);

        $this->type='';
        $this->vendor='';
        $this->model='';
        $this->size='';
        $this->toggleModal();

        $this->emit('newHardwareCreated');
    }

    public function render()
    {
        return view('livewire.hardware.new-hardware');
    }
}
