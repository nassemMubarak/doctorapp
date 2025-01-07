<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdminPolicy
{
    public function before(Admin $admin, $ability){
        if ($admin->type == 'admin'){
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $user): bool
    {
        return $user->hasAbility('doctors.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $user, Admin $admin): bool
    {
        return $user->hasAbility('doctors.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $user): bool
    {
        return $user->hasAbility('doctors.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $user, Admin $admin): bool
    {
        return $user->hasAbility('doctors.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $user, Admin $admin): bool
    {
        return $user->hasAbility('doctors.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Admin $admin): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Admin $admin): bool
    {
        //
    }
}
