<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractorPromotion extends Model
{
    protected $fillable = [
        'name',
        'description',
        'from',
        'to',
    ];
}
