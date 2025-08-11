<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatkaBet extends Model
{
    //
    protected $fillable = [
        'user_id',
        'market_id',
        'number_type_id',
        'amount',
        'number_id',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function number_type()
    {
        return $this->belongsTo(NumberType::class);
    }

    public function number(){
        return $this->belongsTo(MatkaNumber::class, 'number_id');
    }

    public function bet_number(){
        return $this->belongsTo(MatkaNumber::class, 'number_id');
    }
}
