<?php

namespace App\Policies;

use App\Avaliacao;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AvaliacaoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the avaliacao.
     *
     * @param  \App\User  $user
     * @param  \App\Avaliacao  $avaliacao
     * @return mixed
     */
    public function view(User $user, Avaliacao $avaliacao)
    {
        if ($user->tipoUser == 'admin') {
            return true;
        }

        $data = new \DateTime();
        $nova_data = date('Y-m-d', strtotime($data->format('Y-m-d')));
        $nova_hora = date('H:i:s', strtotime($data->format('H:i:s')));

        $de = date('Y-m-d', strtotime($avaliacao->data_inicio));
        $hora_inicial = date('H:i:s', strtotime($avaliacao->hora_inicio));
        $ate = date('Y-m-d', strtotime($avaliacao->data_fim));
        $hora_final = date('H:i:s', strtotime($avaliacao->hora_fim));

        if(($nova_data >= $de) && ($nova_hora >= $hora_inicial) && ($nova_data <= $ate) && ($nova_hora <= $hora_final)) {
            return true;
        }

        return false;

    }

    /**
     * Determine whether the user can create avaliacoes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the avaliacao.
     *
     * @param  \App\User  $user
     * @param  \App\Avaliacao  $avaliacao
     * @return mixed
     */
    public function update(User $user, Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Determine whether the user can delete the avaliacao.
     *
     * @param  \App\User  $user
     * @param  \App\Avaliacao  $avaliacao
     * @return mixed
     */
    public function delete(User $user, Avaliacao $avalaicao)
    {
        //
    }
}
