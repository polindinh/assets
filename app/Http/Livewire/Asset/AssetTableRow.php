<?php

namespace App\Http\Livewire\Asset;

use App\Models\Asset;
use Livewire\Component;

class AssetTableRow extends Component
{
    public Asset $asset;

    public $confirmDeleteAsset=false;

    public function deleteAsset(){
        $this->asset->delete();
        redirect()->route('asstes.index');
    }

    public function render()
    {
        return view('livewire.asset.asset-table-row');
    }
}
