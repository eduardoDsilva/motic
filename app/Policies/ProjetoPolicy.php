<?php

namespace App\Policies;

use App\User;
use App\Projeto;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjetoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the projeto.
     *
     * @param  \App\User  $user
     * @param  \App\Projeto  $projeto
     * @return mixed
     */
    public function view(User $user, Projeto $projeto)
    {
        return $projeto->escola_id == $user->escola->id;
    }

    /**
     * Determine whether the user can to evaluete the projeto.
     *
     * @param  \App\User  $user
     * @param  \App\Projeto  $projeto
     * @return mixed
     */
    public function avaliar(User $user, Projeto $projeto)
    {
        $array = [];
        foreach($projeto->avaliador as $avaliador){
            $array[] = $avaliador->id;
        }
        if(in_array($user->avaliador->id, $array)){
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can show the projeto.
     *
     * @param  \App\User  $user
     * @param  \App\Projeto  $projeto
     * @return mixed
     */
    public function show(User $user, Projeto $projeto)
    {
        return $projeto->escola_id == $user->escola->id;
    }

    /**
     * Determine whether the user can create projetos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can edit the projeto.
     *
     * @param  \App\User  $user
     * @param  \App\Projeto  $projeto
     * @return mixed
     */
    public function edit(User $user, Projeto $projeto)
    {
        return $projeto->escola_id == $user->escola->id;
    }

    /**
     * Determine whether the user can update the projeto.
     *
     * @param  \App\User  $user
     * @param  \App\Projeto  $projeto
     * @return mixed
     */

    public function update(User $user, Projeto $projeto)
    {
        //
    }

    /**
     * Determine whether the user can delete the projeto.
     *
     * @param  \App\User  $user
     * @param  \App\Projeto  $projeto
     * @return mixed
     */
    public function delete(User $user, Projeto $projeto)
    {
        return $projeto->escola_id == $user->escola->id;
    }
}