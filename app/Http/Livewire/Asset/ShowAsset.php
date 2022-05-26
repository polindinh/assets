<?php

namespace App\Http\Livewire\Asset;

use App\Models\Asset;
use Livewire\Component;

class ShowAsset extends Component
{
    public $asset;

    public function mount($asset)
    {
        $this->asset = Asset::with(['hardware','pc_specification'])->find($asset);
    }

    public function render()
    {
        return view('livewire.asset.show-asset', [
            'asset' => $this->asset,
        ]);
    }
}
