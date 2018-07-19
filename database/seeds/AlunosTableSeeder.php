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
                'id' => 5,
                'name' => 'Eduardo da Silva',
                'nascimento' => '25-01-1999',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '5° ANO',
                'turma' => '487',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 3,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:22:22',
                'updated_at' => '2018-07-09 11:22:22',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Matheus dos Santos',
                'nascimento' => '25-04-2003',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '4° ANO',
                'turma' => '4897',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 5,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:37:14',
                'updated_at' => '2018-07-09 11:37:14',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Tainara Araújo',
                'nascimento' => '21-07-1999',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '78',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 8,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:37:43',
                'updated_at' => '2018-07-09 11:37:43',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Lucas Teles',
                'nascimento' => '01-07-1999',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '7° ANO',
                'turma' => '78',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 9,
                'categoria_id' => 4,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:38:12',
                'updated_at' => '2018-07-09 11:38:12',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Marlon Klain',
                'nascimento' => '18-11-1997',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '6° ANO',
                'turma' => '87',
                'camisa' => 'P',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 11,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:38:37',
                'updated_at' => '2018-07-09 11:38:37',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Christian Ribeiro',
                'nascimento' => '06-07-1997',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '4° ANO',
                'turma' => '87',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 5,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:39:10',
                'updated_at' => '2018-07-09 11:39:10',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Patrick Viana',
                'nascimento' => '11-07-1991',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '1° ANO',
                'turma' => '32',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 10,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:40:09',
                'updated_at' => '2018-07-09 11:40:09',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Thayná Souza',
                'nascimento' => '17-07-1997',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => 'EJA',
                'turma' => '32',
                'camisa' => 'P',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 13,
                'categoria_id' => 5,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:40:36',
                'updated_at' => '2018-07-09 11:40:36',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Júlia Ponticeli',
                'nascimento' => '22-07-1999',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '33',
                'camisa' => 'P',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 10,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:41:11',
                'updated_at' => '2018-07-09 11:41:11',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Rodolfo Ziles',
                'nascimento' => '13-07-1997',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '9° ANO',
                'turma' => '33',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 7,
                'categoria_id' => 4,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:41:31',
                'updated_at' => '2018-07-09 11:41:31',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Gabriel Konrath',
                'nascimento' => '17-07-1994',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
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
                'escola_id' => 4,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:41:58',
                'updated_at' => '2018-07-09 11:41:58',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'Gabriel Donada',
                'nascimento' => '19-12-2000',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
                'turma' => '87',
                'camisa' => 'M',
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
                'created_at' => '2018-07-09 11:42:14',
                'updated_at' => '2018-07-09 11:42:14',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'Douglas da Silva',
                'nascimento' => '12-07-1998',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '1° ANO',
                'turma' => '33',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 8,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:42:40',
                'updated_at' => '2018-07-09 11:42:40',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'Carolaine Garcia',
                'nascimento' => '03-03-1997',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '9° ANO',
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
                'escola_id' => 12,
                'categoria_id' => 4,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:43:38',
                'updated_at' => '2018-07-09 11:43:38',
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'Vinícius Brezolim',
                'nascimento' => '11-10-1999',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '5° ANO',
                'turma' => '98',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 5,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:44:15',
                'updated_at' => '2018-07-09 11:44:15',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'Luana Ferreira',
                'nascimento' => '31-07-1992',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '8° ANO',
                'turma' => '89',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 7,
                'categoria_id' => 4,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:44:56',
                'updated_at' => '2018-07-09 11:44:56',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Taís de Barros',
                'nascimento' => '14-07-1999',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '1° ANO',
                'turma' => '232',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 8,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:26:09',
                'updated_at' => '2018-07-09 13:26:09',
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'Gabriela Quadrado',
                'nascimento' => '17-03-1995',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '6° ANO',
                'turma' => '987',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 5,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:26:30',
                'updated_at' => '2018-07-09 13:26:30',
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'bruna Renata Coferi',
                'nascimento' => '30-09-1996',
                'cpf' => NULL,
                'sexo' => 'feminino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
                'turma' => '23',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 3,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:26:52',
                'updated_at' => '2018-07-09 13:26:52',
            ),
            19 => 
            array (
                'id' => 24,
                'name' => 'Henrique Garcia',
                'nascimento' => '04-07-1999',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '5° ANO',
                'turma' => '21',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 5,
                'categoria_id' => 3,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:27:25',
                'updated_at' => '2018-07-09 13:27:25',
            ),
            20 => 
            array (
                'id' => 25,
                'name' => 'Jonathan Santos Paz',
                'nascimento' => '31-07-1997',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
                'turma' => '21',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 4,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:27:49',
                'updated_at' => '2018-07-09 13:27:49',
            ),
            21 => 
            array (
                'id' => 26,
                'name' => 'Andrey Zarpelon',
                'nascimento' => '28-11-1999',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '2° ANO',
                'turma' => '32',
                'camisa' => 'G',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 9,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:28:11',
                'updated_at' => '2018-07-09 13:28:11',
            ),
            22 => 
            array (
                'id' => 27,
                'name' => 'Evandro Souza',
                'nascimento' => '21-12-1993',
                'cpf' => NULL,
                'sexo' => 'masculino',
                'email' => NULL,
                'telefone' => NULL,
                'etapa' => '3° ANO',
                'turma' => '32',
                'camisa' => 'M',
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'escola_id' => 11,
                'categoria_id' => 2,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 13:28:33',
                'updated_at' => '2018-07-09 13:28:33',
            ),
        ));
        
        
    }
}