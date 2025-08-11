<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'user_id',
        'upi_id',
        'promo_code', 
        'transaction_id',
        'upi_address',
        'amount',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
