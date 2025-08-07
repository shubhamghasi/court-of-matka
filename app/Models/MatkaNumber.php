<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkaNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_type_id',
        'panel_number',
        'number',
    ];

    public function type()
    {
        return $this->belongsTo(NumberType::class, 'number_type_id');
    }
}
