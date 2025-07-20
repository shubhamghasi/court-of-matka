<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatkaBet extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'market_id',
        'bet_amount',
        'transaction_id',
        'bet_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class);
    }
}
