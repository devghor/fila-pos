<?php

namespace App\Models\Settings;

use App\Models\Tenancy\Team;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
