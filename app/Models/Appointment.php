<?php

namespace App\Models;

use App\Models\Pivot\CompanyAppointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Appointment extends Model
{
    protected $fillable = [
        'from',
        'to',
        'rating',
        'price',
    ];

    public function company(): HasOneThrough
    {
        return $this->hasOneThrough(Company::class, CompanyAppointment::class);
    }
}
