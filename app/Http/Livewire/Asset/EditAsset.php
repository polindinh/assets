<?php

namespace App\Http\Livewire\Asset;

use App\Models\Asset;
use Livewire\Component;

class EditAsset extends Component
{
    public Asset $asset;

    public function render()
    {

        return view('livewire.asset.edit-asset',[
            'asset'=>$this->asset,
        ]);
    }
}
