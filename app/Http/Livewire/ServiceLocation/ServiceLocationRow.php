<?php

namespace App\Http\Livewire\ServiceLocation;

use App\Models\ServiceLocation;
use Livewire\Component;

class ServiceLocationRow extends Component
{
    public ServiceLocation $serviceLocation;

    public $updateServiceModal=false;

    public $confirmDeleteServiceLocation=false;

    public $name;
    public $address;


    public function deleteServiceLocation(ServiceLocation $serviceLocation){
        $this->confirmDeleteServiceLocation=false;
        $serviceLocation->delete();
        return redirect()->route('service_locations.index');

    }


    public function editServiceLocation(ServiceLocation $serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;

        $this->name = $serviceLocation->name;
        $this->address = $serviceLocation->address;

        $this->toggleModal();

    }

    public function updateServiceLocation(){
        $this->serviceLocation->update([
            'name' => $this->name,
            'address' => $this->address,
        ]);
        $this->toggleModal();
        return redirect()->route('service_locations.index');

    }

    public function toggleDeleteModal(){
        $this->confirmDeleteServiceLocation = !$this->confirmDeleteServiceLocation;
    }

    public function toggleModal()
    {
        $this->updateServiceModal = !$this->updateServiceModal;
    }


    public function render()
    {
        return view('livewire.service-location.service-location-row');
    }
}
