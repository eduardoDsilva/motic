<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alunos')->delete();
        
        \DB::table('alunos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Miguel José dos Santos',
                'nascimento' => '08-03-1998',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '6° ANO',
                'turma' => '65',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 1,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-06-29 10:19:40',
                'updated_at' => '2018-06-29 10:19:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Guilherme Ferreira',
                'nascimento' => '22-09-1998',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '47',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 6,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-29 10:20:15',
                'updated_at' => '2018-06-29 10:20:15',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Matheus dos Santos',
                'nascimento' => '01-04-1999',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '47',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 6,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-29 10:20:15',
                'updated_at' => '2018-06-29 10:20:15',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Amanda Lima da Silva',
                'nascimento' => '28-07-1998',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
                'turma' => '47',
                'camisa' => 'P',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 6,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-29 10:20:15',
                'updated_at' => '2018-06-29 10:20:15',
            ),
        ));
        
        
    }
}