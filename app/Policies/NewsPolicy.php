<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\News;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NewsPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $user, News $news): bool
    {
        return $user->id === $news->doctor_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $user, News $news): bool
    {
        return $user->id === $news->doctor_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $user, News $news): bool
    {
        return $user->id === $news->doctor_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Admin $user, News $news): bool
    {
        return $user->hasAbility('news.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Admin $user, News $news): bool
    {
        return $user->hasAbility('news.force-delete');
    }
}
