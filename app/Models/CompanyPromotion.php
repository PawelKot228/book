<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPromotion extends Model
{
    protected $fillable = [
        'name',
        'description',
        'from',
        'to',
    ];
}
