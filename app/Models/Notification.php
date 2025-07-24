<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['name', 'message_part_1', 'message_part_2', 'location', 'active'];
}
