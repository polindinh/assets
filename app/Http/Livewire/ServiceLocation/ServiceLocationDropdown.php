<?php

namespace App\Http\Livewire\ServiceLocation;

use Livewire\Component;

class ServiceLocationDropdown extends Component
{

    public $serviceLocation;

    public function setLocation()
    {
        $this->emit('serviceLocationSelected', $this->serviceLocation);
    }

    public function render()
    {
        $locations = \App\Models\ServiceLocation::all();
        return view('livewire.service-location.service-location-dropdown', [
            'locations' => $locations,
        ]);
    }
}
