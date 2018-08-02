<?php

use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('disciplinas')->delete();
        
        \DB::table('disciplinas')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'História',
                'descricao' => 'Disciplina de história',
                'created_at' => '2018-07-31 11:53:10',
                'updated_at' => '2018-07-31 11:53:10',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Matemática',
                'descricao' => 'Disciplina de matemática',
                'created_at' => '2018-07-31 11:53:21',
                'updated_at' => '2018-07-31 11:53:21',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Geografia',
                'descricao' => 'Disciplina de geografia',
                'created_at' => '2018-07-31 11:53:30',
                'updated_at' => '2018-07-31 11:53:30',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Ciências',
                'descricao' => 'Disciplina de Ciências',
                'created_at' => '2018-08-01 10:23:51',
                'updated_at' => '2018-08-01 10:23:51',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Filosofia',
                'descricao' => 'Disciplina de Filosofia',
                'created_at' => '2018-08-01 10:24:07',
                'updated_at' => '2018-08-01 10:24:07',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Língua Inglesa',
                'descricao' => 'Disciplina de Língua Inglesa',
                'created_at' => '2018-08-01 10:24:39',
                'updated_at' => '2018-08-01 10:24:39',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Sociologia',
                'descricao' => 'Disciplina de Sociologia',
                'created_at' => '2018-08-01 10:24:56',
                'updated_at' => '2018-08-01 10:24:56',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Religião',
                'descricao' => 'Disciplina de Religião',
                'created_at' => '2018-08-01 10:25:16',
                'updated_at' => '2018-08-01 10:25:16',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Artes',
                'descricao' => 'Disciplina de Artes',
                'created_at' => '2018-08-01 10:25:40',
                'updated_at' => '2018-08-01 10:25:40',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Educação Física',
                'descricao' => 'Disciplina de Educação Física',
                'created_at' => '2018-08-01 10:26:25',
                'updated_at' => '2018-08-01 10:26:25',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Português',
                'descricao' => 'Disciplina de Português',
                'created_at' => '2018-08-01 10:27:01',
                'updated_at' => '2018-08-01 10:27:01',
            ),
        ));
        
        
    }
}