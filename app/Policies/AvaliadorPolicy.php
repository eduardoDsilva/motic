<?php

namespace App\Policies;

use App\User;
use App\Avaliador;
use Illuminate\Auth\Access\HandlesAuthorization;

class AvaliadorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the avaliador.
     *
     * @param  \App\User  $user
     * @param  \App\Avaliador  $avaliador
     * @return mixed
     */
    public function view(User $user, Avaliador $avaliador)
    {
        //
    }

    /**
     * Determine whether the user can create avaliadors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the avaliador.
     *
     * @param  \App\User  $user
     * @param  \App\Avaliador  $avaliador
     * @return mixed
     */
    public function update(User $user, Avaliador $avaliador)
    {
        //
    }

    /**
     * Determine whether the user can delete the avaliador.
     *
     * @param  \App\User  $user
     * @param  \App\Avaliador  $avaliador
     * @return mixed
     */
    public function delete(User $user, Avaliador $avaliador)
    {
        //
    }
}
