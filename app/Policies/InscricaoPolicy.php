<?php

namespace App\Policies;

use App\User;
use App\Inscricao;
use Illuminate\Auth\Access\HandlesAuthorization;

class InscricaoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the inscricao.
     *
     * @param  \App\User  $user
     * @param  \App\Inscricao  $inscricao
     * @return mixed
     */
    public function view(User $user, Inscricao $inscricao)
    {
        if ($user->tipoUser == 'admin') {
            return true;
        }

        $data = new \DateTime();
        $nova_data = date('Y-m-d', strtotime($data->format('Y-m-d')));

        $de = date('Y-m-d', strtotime($inscricao->data_inicio));
        $ate = date('Y-m-d', strtotime($inscricao->data_fim));

        if(($nova_data >= $de) && ($nova_data <= $ate)) {
            return true;
        }

        return false;

    }

    /**
     * Determine whether the user can create inscricaos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the inscricao.
     *
     * @param  \App\User  $user
     * @param  \App\Inscricao  $inscricao
     * @return mixed
     */
    public function update(User $user, Inscricao $inscricao)
    {
        //
    }

    /**
     * Determine whether the user can delete the inscricao.
     *
     * @param  \App\User  $user
     * @param  \App\Inscricao  $inscricao
     * @return mixed
     */
    public function delete(User $user, Inscricao $inscricao)
    {
        //
    }
}
