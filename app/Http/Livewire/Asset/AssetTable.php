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
            $q->where(function($query){
                $query->where('asset_id','like','%'.$this->search.'%')
                    ->orWhere('notes','like','%'.$this->search.'%');
            })->with(['transactions' => function($query) {
                $query->where('employee_id', 'like', '%'.$this->search.'%');
            }])->get();
        }

        $assets = $q->paginate(10);
        return view('livewire.asset.asset-table',['assets'=>$assets]);
    }
}
