<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialization_id',
        'name',
        'description'
    ];

    public function specialists()
    {
        return $this->hasMany(Specialist::class);
    }

    public function services() 
    {
        return $this->hasMany(Service::class);
    }
}
