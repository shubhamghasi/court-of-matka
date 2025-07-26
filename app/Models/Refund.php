<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refund extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'market_name',   // simple string instead of market_id
        'bet_number',
        'status',        // optional: default status could be 'pending'
    ];

    // User relationship (optional — keep if you're still associating refunds with users)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
