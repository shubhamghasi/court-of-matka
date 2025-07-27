<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoubtCheck extends Model
{
    protected $table = 'doubt_checks';

    protected $fillable = [
        'user_id',
        'market_id',
        'number_type_id',
        'number',
        'transaction_id',
        'status',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function numberType()
    {
        return $this->belongsTo(NumberType::class, 'number_type_id');
    }
}
