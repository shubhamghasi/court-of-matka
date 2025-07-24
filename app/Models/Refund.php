<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refund extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'market_id',
        'bet_number',
        'trends_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function predicted()
    {
        return $this->belongsTo(Trend::class, 'trends_id');
    }
}
