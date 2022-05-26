<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public function hardware(){
        return $this->belongsTo(Hardware::class);
    }

    public function pc_specification(){
        return $this->hasOne(PcSpecification::class,'id','specification_id');
    }

    //trsn
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //created by
    public function creator(){
        return $this->belongsTo(User::class,'created_by');
    }

    //updated by
    public function updator(){
        return $this->belongsTo(User::class,'updated_by');
    }
}
