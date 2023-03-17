<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyAppointment extends Pivot
{
    protected $fillable = [
        'service_id',
        'contractor_id',
        'appointment_id',
    ];
}
