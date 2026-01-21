<?php

namespace App\Policies;

use App\Models\Habit;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class habitPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Habit $habit): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Habit $habit): bool
    {
        return $habit->user_id !== Auth::id();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Habit $habit): bool
    {
        return $habit->user_id === $user->id;
    }

    public function toogle(User $user, Habit $habit): bool
    {
        return $habit->user_id === $user->id;
    }

}
