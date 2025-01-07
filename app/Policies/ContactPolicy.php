<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ContactPolicy
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
        return $user->hasAbility('contacts.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $user, Contact $contact): bool
    {
        return $user->hasAbility('contacts.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $user): bool
    {
        return $user->hasAbility('contacts.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $user, Contact $contact): bool
    {
        return $user->hasAbility('contacts.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $user, Contact $contact): bool
    {
        return $user->hasAbility('contacts.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Contact $contact): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Contact $contact): bool
    {
        //
    }
}
