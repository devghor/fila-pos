<?php

namespace App\Models\Pos;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use HasUlid;

    protected $fillable = [
        'name_en',
        'name_bn',
        'icon',
        'description',
    ];
}
