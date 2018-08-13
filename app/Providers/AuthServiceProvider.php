<?php

namespace App\Providers;

use App\Aluno;
use App\Inscricao;
use App\Professor;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Aluno' => 'App\Policies\AlunoPolicy',
        'App\Avaliador' => 'App\Policies\AvaliadorPolicy',
        'App\Escola' => 'App\Policies\EscolaPolicy',
        'App\Professor' => 'App\Policies\ProfessorPolicy',
        'App\Projeto' => 'App\Policies\ProjetoPolicy',
        'App\Inscricao' => 'App\Policies\InscricaoPolicy',
        'App\Avaliacao' => 'App\Policies\AvaliacaoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    }
}
