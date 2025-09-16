<?php

namespace App\Models\Vms;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'license_number',
        'vehicle_type',
    ];
}
