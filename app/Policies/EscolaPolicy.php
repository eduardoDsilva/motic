<?php

namespace App\Policies;

use App\User;
use App\Escola;
use Illuminate\Auth\Access\HandlesAuthorization;

class EscolaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the escola.
     *
     * @param  \App\User  $user
     * @param  \App\Escola  $escola
     * @return mixed
     */
    public function view(User $user, Escola $escola)
    {
        //
    }

    /**
     * Determine whether the user can create escolas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the escola.
     *
     * @param  \App\User  $user
     * @param  \App\Escola  $escola
     * @return mixed
     */
    public function update(User $user, Escola $escola)
    {
        //
    }

    /**
     * Determine whether the user can delete the escola.
     *
     * @param  \App\User  $user
     * @param  \App\Escola  $escola
     * @return mixed
     */
    public function delete(User $user, Escola $escola)
    {
        //
    }
}
