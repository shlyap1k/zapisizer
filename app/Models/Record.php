<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialist_id', 
        'user_id', 
        'service_id',
        'date', 
        'time'

    ];
}
