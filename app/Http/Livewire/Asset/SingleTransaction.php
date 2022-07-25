<?php

namespace App\Http\Livewire\Asset;

use App\Models\Transaction;
use Livewire\Component;

class SingleTransaction extends Component
{
    public bool $confirmDelete=false;

    public Transaction $transaction;


    public function deleteTransaction(){
        $this->transaction->delete();
        $this->emit('transactionDeleted');
    }

    public function render()
    {
        return view('livewire.asset.single-transaction', [
            'transaction' => $this->transaction,
        ]);
    }
}
