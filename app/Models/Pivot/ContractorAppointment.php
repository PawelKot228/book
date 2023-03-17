<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ContractorAppointment extends Pivot
{
    protected $fillable = [
        'service_id',
        'contractor_id',
        'appointment_id',
    ];
}
