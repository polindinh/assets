<?php

namespace App\Http\Livewire\Asset;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class AssetTable extends Component
{
    use WithPagination;


    public $search;


    public function render()
    {
        $q= Asset::query();

        if($this->search!=''){
            $q->where('asset_id','like','%'.$this->search.'%');
        }

        $assets = $q->paginate(10);
        return view('livewire.asset.asset-table',['assets'=>$assets]);
    }
}
