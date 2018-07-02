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
                'descricao' => 'Descrição da disciplina de história',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Matemática',
                'descricao' => 'Descrição da disciplina de Matemáticas',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Geografia',
                'descricao' => 'Descrição da disciplina de Geografia',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Filosofia',
                'descricao' => 'Descrição da disciplina de Filosofia',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
        ));
        
        
    }
}