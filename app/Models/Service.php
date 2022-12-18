<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'service_type_id',
        'duration',
        'price',
        'forSeveralPeople',
        'cooldown',
        'description',
        'name'
    ];

    public function specialist()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
