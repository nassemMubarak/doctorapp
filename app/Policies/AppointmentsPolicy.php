<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Appointments;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AppointmentsPolicy
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
    public function view(Admin $admin, Appointments $appointments): bool
    {
        return $admin->id === $appointments->doctor_id;
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
    public function update(Admin $admin, Appointments $appointments): bool
    {
        return $admin->id === $appointments->doctor_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Appointments $appointments): bool
    {
        return $admin->id === $appointments->doctor_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Admin $admin, Appointments $appointments): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Admin $admin, Appointments $appointments): bool
    {
        return true;
    }
}
