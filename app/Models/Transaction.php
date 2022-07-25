<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function peripherals()
    {
        return $this->hasOne(Peripheral::class, 'last_transaction_id', 'id');
    }

    public function asset(){
        return $this->belongsTo(Asset::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function service_location(){
        return $this->belongsTo(ServiceLocation::class);
    }
}
