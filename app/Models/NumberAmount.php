<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NumberAmount extends Model
{
    //
    protected $fillable = [
        'market_id',
        'number_type_id',
        'number',
        'amount'
    ];

    public function market(){
        return $this->belongsTo(Market::class);
    }
    public function number_type(){
        return $this->belongsTo(NumberType::class);
    }
}
