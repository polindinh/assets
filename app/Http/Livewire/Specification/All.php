<?php

namespace App\Http\Livewire\Specification;

use App\Models\PcSpecification;
use Livewire\Component;

class All extends Component
{
    protected $listeners = [
        'SpecificationUpdated' => '$refresh',
        'toggleDeleteSpecificationModal' => 'toggleDeleteModal'
    ];

    public $selected;

    public $deleteModal = false;

    public function toggleDeleteModal($id = null)
    {
        $this->selected = $id;
        $this->deleteModal = !$this->deleteModal;
    }

    public function toggleNewModal()
    {
        $this->emit('openNewSpecificationModal');
    }

    public function deleteSpecification()
    {
        $this->deleteModal = false;
        if ($this->selected) {
            $spec = PcSpecification::find($this->selected);
            $spec->delete();
            $this->emit('SpecificationUpdated');
        }
    }

    public function render()
    {
        return view('livewire.specification.all');
    }
}
