<?php

namespace App\Http\Livewire\Specification;

use App\Models\PcSpecification;
use Livewire\Component;

class NewSpc extends Component
{
    public $cpu;
    public $memory;
    public $storage;
    public $gpu;
    public $is_ssd=false;
    public $wifi_enabled=false;
    public $wwan_enabled=false;


    public $newSpecModal=false;


    protected $listeners = [
        'openNewSpecModal' => 'toggleModal',
    ];

    public function createNewSpec(){
        $data = $this->validate([
            'cpu'=>'required',
            'memory'=>'required',
            'storage'=>'required',
            'gpu'=>'required',
            'is_ssd'=>'required',
            'wifi_enabled'=>'required',
            'wwan_enabled'=>'required',
        ]);

        PcSpecification::create($data);

        $this->cpu='';
        $this->memory='';
        $this->storage='';
        $this->gpu='';
        $this->is_ssd='';
        $this->wifi_enabled='';
        $this->wwan_enabled='';
        $this->toggleModal();

        $this->emit('newSpecCreated');

    }
    public function toggleModal(){
        $this->newSpecModal=!$this->newSpecModal;
    }

    public function render()
    {
        return view('livewire.specification.new-spc');
    }
}
