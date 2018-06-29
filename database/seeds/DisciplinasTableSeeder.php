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
                'id' => 1,
                'name' => 'História',
                'descricao' => 'Descrição da disciplina de História.',
                'created_at' => '2018-06-29 10:25:43',
                'updated_at' => '2018-06-29 10:25:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Biologia',
                'descricao' => 'Descrição da disciplina de Biologia.',
                'created_at' => '2018-06-29 10:26:16',
                'updated_at' => '2018-06-29 10:26:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Matemática',
                'descricao' => 'Descrição da disciplina de Matemática.',
                'created_at' => '2018-06-29 10:26:27',
                'updated_at' => '2018-06-29 10:26:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Português',
                'descricao' => 'Descrição da disciplina de Português.',
                'created_at' => '2018-06-29 10:26:46',
                'updated_at' => '2018-06-29 10:26:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Filosofia',
                'descricao' => 'Descrição da disciplina de Filosofia.',
                'created_at' => '2018-06-29 10:27:00',
                'updated_at' => '2018-06-29 10:27:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Geografia',
                'descricao' => 'Descrição da disciplina de Geografia.',
                'created_at' => '2018-06-29 10:27:12',
                'updated_at' => '2018-06-29 10:27:12',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Sociologia',
                'descricao' => 'Descrição da disciplina de Sociologia.',
                'created_at' => '2018-06-29 10:27:32',
                'updated_at' => '2018-06-29 10:27:32',
            ),
        ));
        
        
    }
}