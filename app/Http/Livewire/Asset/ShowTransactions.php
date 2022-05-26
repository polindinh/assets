<?php

namespace App\Http\Livewire\Asset;

use App\Models\Employee;
use App\Models\Peripheral;
use App\Models\Transaction;
use Livewire\Component;

class ShowTransactions extends Component
{

    protected $listeners = [
        'employeeSelected' => 'setEmployee',
        'transactionCreated' => '$refresh',
        'serviceLocationSelected' => 'setLocation',
    ];

    public function setEmployee($empId){
        $this->employee = $empId;
    }
    public function setLocation($empId){
        $this->location = $empId;
    }

    public $asset;

    public $showHistoryModal = false;

    public $location;
    public $employee;
    //all peripherals
    public $mouse=0;
    public $keyboard=0;
    public $bag=0;
    public $power_supply=0;
    public $dock=0;
    public $dock_power_supply=0;
    public $monitor=0;

    public $notes;
    public $ticket;
    public $type;


    public function createNewTransaction(){
        $this->validate([
            'employee' => 'required',
            'mouse' => 'required',
            'keyboard' => 'required',
            'bag' => 'required',
            'power_supply' => 'required',
            'dock' => 'required',
            'dock_power_supply' => 'required',
            'monitor' => 'required',
            'notes' => 'required',
            'ticket' => 'required',
            'type' => 'required',
            'location' => 'required',
        ]);

        $employeeGet  = Employee::find($this->employee);

        $transaction = Transaction::create([
            'asset_id' => $this->asset->id,
            'employee_id' => $this->employee,
            'type'=>$this->type,
            'notes'=>$this->notes,
            'ticket'=>$this->ticket,
        ]);

        Peripheral::create([
            'employee_id' => $this->employee,
            'mouse'=>$this->mouse,
            'keyboard'=>$this->keyboard,
            'bag'=>$this->bag,
            'power_supply'=>$this->power_supply,
            'dock'=>$this->dock,
            'dock_power_supply'=>$this->dock_power_supply,
            'monitor'=>$this->monitor,
            'last_transaction_id'=>$transaction->id,
        ]);

        $this->asset->update([
            'employee_id' => $this->employee,
        ]);

        $this->resetInput();

        session()->flash('message', 'Transaction created successfully!');
        $this->emit('transactionCreated',$transaction->id);

        $this->showHistoryModal = false;

        redirect()->route('asstes.show',$this->asset);

    }

    public function resetInput(){
        $this->employee = null;
        $this->mouse = 0;
        $this->keyboard = 0;
        $this->bag = 0;
        $this->power_supply = 0;
        $this->dock = 0;
        $this->dock_power_supply = 0;
        $this->monitor = 0;
        $this->notes = null;
        $this->ticket = null;
        $this->type = null;
    }

    public function render()
    {
        return view('livewire.asset.show-transactions', [
            'asset' => $this->asset,
        ]);
    }
}
