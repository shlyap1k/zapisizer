<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'user_id', 
        'specialization_id',
        'start_date',
        'end_date',
    ];

    public function services() 
    {
        return $this->belongsToMany(Service::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
