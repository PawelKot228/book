<?php

namespace App\Models;

use App\Models\Pivot\CompanyAppointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointments(): HasManyThrough
    {
        return $this->hasManyThrough(Appointment::class, CompanyAppointment::class);
    }

    public function promotions(): HasMany
    {
        return $this->hasMany(CompanyPromotion::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(CompanyCategory::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
