<?php

namespace App\Http\Livewire\ServiceLocation;

use App\Models\ServiceLocation;
use Livewire\Component;

class NewServiceLocation extends Component
{
    public $newServiceLocationModal=false;


    public $name;

    public $address;

    public function toggleModal()
    {
        $this->newServiceLocationModal=!$this->newServiceLocationModal;
    }

    public function createServiceLocation()
    {
        $data = $this->validate([
            'name'=>'required',
            'address'=>'required',
        ]);

        ServiceLocation::create($data);

        $this->name='';
        $this->address='';
        $this->toggleModal();


        return redirect()->route('service_locations.index');



    }

    public function render()
    {
        return view('livewire.service-location.new-service-location');
    }
}
