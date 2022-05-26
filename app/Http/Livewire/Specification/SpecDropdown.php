<?php

namespace App\Http\Livewire\Specification;

use App\Models\PcSpecification;
use Livewire\Component;

class SpecDropdown extends Component
{
    protected $listeners = [
        'newSpecCreated' => '$refresh',
    ];

    public $specification;

    public function setSpecification(){
        $this->emit('specificationSelected', $this->specification);
    }

    public function toggleModal()
    {
        $this->emit('openNewSpecModal');
    }

    public function render()
    {
        $models = PcSpecification::all();
        return view('livewire.specification.spec-dropdown', compact('models'));
    }
}
