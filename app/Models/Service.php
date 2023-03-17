<?php

namespace App\Models;

use App\Models\Pivot\CompanyAppointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function appointments(): HasManyThrough
    {
        return $this->hasManyThrough(Appointment::class, CompanyAppointment::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
