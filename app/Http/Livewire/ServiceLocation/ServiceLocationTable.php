<?php

namespace App\Http\Livewire\ServiceLocation;

use App\Models\ServiceLocation;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceLocationTable extends Component
{
    use WithPagination;




    public function render()
    {
        return view('livewire.service-location.service-location-table', [
            'serviceLocations' => ServiceLocation::orderBy('id','desc')->paginate(5),
        ]);
    }
}
