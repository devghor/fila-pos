<?php

namespace App\Policies\IdCard;

use App\Models\Uam\User;
use App\Models\IdCard\IdCardRequisition;
use Illuminate\Auth\Access\HandlesAuthorization;

class IdCardRequisitionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, IdCardRequisition $idCardRequisition): bool
    {
        return $user->can('view_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, IdCardRequisition $idCardRequisition): bool
    {
        return $user->can('update_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, IdCardRequisition $idCardRequisition): bool
    {
        return $user->can('delete_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, IdCardRequisition $idCardRequisition): bool
    {
        return $user->can('force_delete_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, IdCardRequisition $idCardRequisition): bool
    {
        return $user->can('restore_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, IdCardRequisition $idCardRequisition): bool
    {
        return $user->can('replicate_id::card::requisitions::id::card::requisition');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_id::card::requisitions::id::card::requisition');
    }
}
