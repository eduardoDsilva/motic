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
                'name' => 'Eduardo da Silva',
                'nascimento' => '09-06-2000',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '45',
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
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-25 13:47:54',
                'updated_at' => '2018-06-28 08:30:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Amanda Lima da Silva',
                'nascimento' => '24-06-1983',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
                'turma' => '22',
                'camisa' => 'P',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 1,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-25 13:48:16',
                'updated_at' => '2018-06-28 08:30:57',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Laura Rodriguez',
                'nascimento' => '15-06-2001',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '22',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 1,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-25 13:48:30',
                'updated_at' => '2018-06-28 08:30:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Luiza Figueira',
                'nascimento' => '26-06-1992',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '1° ANO',
                'turma' => '88',
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
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-06-26 08:21:08',
                'updated_at' => '2018-06-26 08:21:08',
            ),
        ));
        
        
    }
}