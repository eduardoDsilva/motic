<?php

namespace App\Policies;

use App\User;
use App\Aluno;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlunoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the aluno.
     *
     * @param  \App\User  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function view(User $user, Aluno $aluno)
    {
        return $aluno->escola_id === $user->escola->id;
    }

    /**
     * Determine whether the user can show the aluno.
     *
     * @param  \App\User  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function show(User $user, Aluno $aluno)
    {
        return $aluno->escola_id == $user->escola->id;
    }

    /**
     * Determine whether the user can create alunos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can edit the aluno.
     *
     * @param  \App\User  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function edit(User $user, Aluno $aluno)
    {
        return $aluno->escola_id == $user->escola->id;
    }

    /**
     * Determine whether the user can update the aluno.
     *
     * @param  \App\User  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function update(User $user, Aluno $aluno)
    {
        //
    }

    /**
     * Determine whether the user can delete the aluno.
     *
     * @param  \App\User  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function delete(User $user, Aluno $aluno)
    {
        return $aluno->escola_id == $user->escola->id;
    }
}
