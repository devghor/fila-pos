<?php

namespace App\Policies\Vms;

use App\Models\Uam\User;
use App\Models\Vms\Driver;
use Illuminate\Auth\Access\HandlesAuthorization;

class DriverPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_vms::drivers::driver');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Driver $driver): bool
    {
        return $user->can('view_vms::drivers::driver');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_vms::drivers::driver');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Driver $driver): bool
    {
        return $user->can('update_vms::drivers::driver');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Driver $driver): bool
    {
        return $user->can('delete_vms::drivers::driver');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_vms::drivers::driver');
    }
}
