<?php

namespace App\Http\Livewire\Asset;

use App\Models\Asset;
use Livewire\Component;

class NewAsset extends Component
{

    public Asset $asset;

    public $assetId;
    public $hardware;
    public $specification;
    public $operating_system;
    public $notes;
    public $purchase_date;
    public $status;


    protected $listeners = [
        'specificationSelected' => 'setSpecification',
        'hardwareSelected' => 'setHardware',
        'selecStatus'=>'setStatus',
    ];

    public function setStatus($status){
        $this->status=$status;
    }

    public function setHardware($hardware){
        $this->hardware = $hardware;
    }
    public function setSpecification($spec){
        $this->specification = $spec;
    }


    public function createNewAsset(){
        $data = $this->validate([
            'assetId'=>'required|unique:assets,asset_id',
            'hardware'=>'required',
            'specification'=>'required',
            'operating_system'=>'required',
            'notes'=>'required',
            'purchase_date'=>'required',
            'status'=>'required',
        ]);

        if(isset($this->asset) && $this->asset->id){
            $this->asset->update([
                'hardware_id'=>$data['hardware'],
                'specification_id'=>$data['specification'],
                'operating_system'=>$data['operating_system'],
                'notes'=>$data['notes'],
                'purchase_date'=>$data['purchase_date'],
                'status_id'=>$data['status'],
                'updated_by' => auth()->user()->id
            ]);
        }else{

            Asset::create([
                'asset_id'=>$this->assetId,
                'hardware_id'=>$data['hardware'],
                'specification_id'=>$data['specification'],
                'operating_system'=>$data['operating_system'],
                'notes'=>$data['notes'],
                'purchase_date'=>$data['purchase_date'],
                'status_id'=>$data['status'],
                'created_by'=>auth()->user()->id,

            ]);
        }
        session()->flash('message', 'Asset successfully updated.');


        redirect()->to('/asstes');

    }

    public function mount()
    {
        //set all data from Asset
        if(isset($this->asset)){
            $this->hardware = $this->asset->hardware_id;
            $this->specification = $this->asset->specification_id;
            $this->operating_system = $this->asset->operating_system;
            $this->notes = $this->asset->notes;
            $this->purchase_date = $this->asset->purchase_date;
            $this->status = $this->asset->status_id;
        }
    }

    public function render()
    {
        return view('livewire.asset.new-asset');
    }
}
