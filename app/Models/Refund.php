<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refund extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'market_id',   // simple string instead of market_id
        'number_type',
        'bet_number',
        'upi_address',
        'status',        // optional: default status could be 'pending'
    ];

    // User relationship (optional — keep if you're still associating refunds with users)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function market(){
        return $this->belongsTo(Market::class);
    }

    public function numberType(){
        return $this->belongsTo(NumberType::class, 'number_type');
    }
}
