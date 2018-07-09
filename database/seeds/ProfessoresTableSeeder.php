<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professores')->delete();
        
        \DB::table('professores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'José Soares',
                'nascimento' => '22-07-1960',
                'sexo' => 'masculino',
                'telefone' => '2312312312',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '32131231231',
                'matricula' => 787878,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 6,
                'user_id' => 26,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:29:45',
                'updated_at' => '2018-07-09 11:29:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Doglas da Silva',
                'nascimento' => '14-07-1994',
                'sexo' => 'masculino',
                'telefone' => '48484874',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '48548488888',
                'matricula' => 887454774,
                'tipo' => 'nenhum',
                'camisa' => 'G',
                'escola_id' => 5,
                'user_id' => 27,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:45:58',
                'updated_at' => '2018-07-09 11:45:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Maurício dos Santos',
                'nascimento' => '17-07-1973',
                'sexo' => 'masculino',
                'telefone' => '489789787',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '88798797879',
                'matricula' => 48947878,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 6,
                'user_id' => 28,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:47:23',
                'updated_at' => '2018-07-09 11:47:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gabriela Trevisan',
                'nascimento' => '12-03-1989',
                'sexo' => 'feminino',
                'telefone' => '486486414878',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '84848687848',
                'matricula' => 999656887,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 6,
                'user_id' => 29,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:48:25',
                'updated_at' => '2018-07-09 11:48:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cláudia Pereira',
                'nascimento' => '03-01-1982',
                'sexo' => 'feminino',
                'telefone' => '4848784874',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '54894848789',
                'matricula' => 897897987,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 10,
                'user_id' => 30,
                'projeto_id' => NULL,
                'created_at' => '2018-07-09 11:49:31',
                'updated_at' => '2018-07-09 11:49:31',
            ),
        ));
        
        
    }
}