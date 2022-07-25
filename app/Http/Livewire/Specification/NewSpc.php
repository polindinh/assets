<?php

namespace App\Http\Livewire\Specification;

use App\Models\PcSpecification;
use Livewire\Component;

class NewSpc extends Component
{
    public $sid;

    public $cpu;
    public $memory;
    public $storage;
    public $gpu;
    public $is_ssd = false;
    public $wifi_enabled = false;
    public $wwan_enabled = false;


    public $newSpecModal = false;


    protected $listeners = [
        'openNewSpecificationModal' => 'toggleModal',
    ];

    public function createNewSpec()
    {
        $data = $this->validate([
            'cpu' => 'required',
            'memory' => 'required',
            'storage' => 'required',
            'gpu' => 'required',
            'is_ssd' => 'required',
            'wifi_enabled' => 'required',
            'wwan_enabled' => 'required',
        ]);

        if($this->sid) {
            $spec = PcSpecification::find($this->sid);
            $spec->update($data);
        } else {
            PcSpecification::create($data);
        }

        $this->emit('SpecificationUpdated');

        $this->cpu = '';
        $this->memory = '';
        $this->storage = '';
        $this->gpu = '';
        $this->is_ssd = '';
        $this->wifi_enabled = '';
        $this->wwan_enabled = '';
        $this->toggleModal();

        $this->emit('newSpecCreated');
    }
    public function toggleModal($id = null)
    {
        if ($id !== null) {
            $this->sid = $id;
            $spec = PcSpecification::find($id);
            $this->cpu = $spec->cpu;
            $this->memory = $spec->memory;
            $this->storage = $spec->storage;
            $this->gpu = $spec->gpu;
            $this->is_ssd = $spec->is_ssd;
            $this->wifi_enabled = $spec->wifi_enabled;
            $this->wwan_enabled = $spec->wwan_enabled;
        }
        $this->newSpecModal = !$this->newSpecModal;
    }

    public function render()
    {
        return view('livewire.specification.new-spc');
    }
}
