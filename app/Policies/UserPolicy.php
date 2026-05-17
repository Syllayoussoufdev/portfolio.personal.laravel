<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->role === 'admin') {
            return true; // Les administrateurs peuvent voir tous les utilisateurs
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        if ($user->role === 'admin' || $user->id === $model->id) {
            return true; // Les administrateurs peuvent voir tous les utilisateurs et les utilisateurs peuvent voir leur propre profil

        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->role === 'admin') {
            return true; // Seuls les administrateurs peuvent créer des utilisateurs
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        if ($user->role === 'admin' || $user->id === $model->id) {
            return true; // Les administrateurs peuvent mettre à jour tous les utilisateurs
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
            if ($user->role === 'admin' && $user->id !== $model->id) {
                return true; // Les administrateurs peuvent supprimer tous les utilisateurs sauf eux-mêmes
            }
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        if ($user->role === 'admin') {
            return true; // Seuls les administrateurs peuvent restaurer des utilisateurs
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        if ($user->role === 'admin') {
            return true; // Seuls les administrateurs peuvent supprimer définitivement des utilisateurs
        }
        return false;
    }
}
