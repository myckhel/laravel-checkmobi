<?php

namespace Myckhel\CheckMobi\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Myckhel\CheckMobi\Models\CheckMobiVerification;

class CheckMobiVerificationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny({{ user }} $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \CheckMobiVerification  ${{ modelVariable }}
     * @return mixed
     */
    public function view({{ user }} $user, CheckMobiVerification $checkMobiVerification)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create({{ user }} $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \CheckMobiVerification  ${{ modelVariable }}
     * @return mixed
     */
    public function update({{ user }} $user, CheckMobiVerification $checkMobiVerification)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \CheckMobiVerification  ${{ modelVariable }}
     * @return mixed
     */
    public function delete({{ user }} $user, CheckMobiVerification $checkMobiVerification)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \CheckMobiVerification  ${{ modelVariable }}
     * @return mixed
     */
    public function restore({{ user }} $user, CheckMobiVerification $checkMobiVerification)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \CheckMobiVerification  ${{ modelVariable }}
     * @return mixed
     */
    public function forceDelete({{ user }} $user, CheckMobiVerification $checkMobiVerification)
    {
        //
    }
}
