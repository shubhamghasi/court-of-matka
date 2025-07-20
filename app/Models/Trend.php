<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trend extends Model
{
    use SoftDeletes;
    protected $fillabel = [
        'predicted_numbers',
        'transaction_id',
        'market_id',
        'user_id',
        'number_type'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function market(){
        return $this->belongsTo(Market::class);
    }
    public function type(){
        return $this->belongsTo(NumberType::class, 'number_type');
    }
}
