<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount_amount',
        'discount_percent',
        'max_uses',
        'uses',
        'expires_at',
        'is_active',
        'is_valid_on_trends',
        'is_valid_on_doubt',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'is_active' => 'boolean',
        'is_valid_on_trends' => 'boolean',
        'is_valid_on_doubt' => 'boolean',
    ];
}