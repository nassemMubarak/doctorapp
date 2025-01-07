<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Message;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MessagePolicy
{
    public function before(Admin $admin, $ability){
        if ($admin->type == 'admin'){
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, Message $message): bool
    {
        return $admin->id === $message->doctor_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, Message $message): bool
    {
        return $admin->id === $message->doctor_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Message $message): bool
    {
        return $admin->id === $message->doctor_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Admin $admin, Message $message): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Admin $admin, Message $message): bool
    {
        return true;
    }
}
