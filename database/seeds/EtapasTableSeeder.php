<?php

use Illuminate\Database\Seeder;

class EtapasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('etapas')->delete();
        
        \DB::table('etapas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'etapa' => 'Educação Infantil',
                'categoria_id' => 1,
                'created_at' => '2018-08-03 11:34:52',
                'updated_at' => '2018-08-03 11:34:52',
            ),
            1 => 
            array (
                'id' => 2,
                'etapa' => '1°ANO',
                'categoria_id' => 2,
                'created_at' => '2018-08-03 11:34:59',
                'updated_at' => '2018-08-03 11:34:59',
            ),
            2 => 
            array (
                'id' => 3,
                'etapa' => '2° ANO',
                'categoria_id' => 2,
                'created_at' => '2018-08-03 11:35:05',
                'updated_at' => '2018-08-03 11:35:05',
            ),
            3 => 
            array (
                'id' => 4,
                'etapa' => '3° ANO',
                'categoria_id' => 2,
                'created_at' => '2018-08-03 11:35:11',
                'updated_at' => '2018-08-03 11:35:11',
            ),
            4 => 
            array (
                'id' => 5,
                'etapa' => '4° ANO',
                'categoria_id' => 3,
                'created_at' => '2018-08-03 11:35:31',
                'updated_at' => '2018-08-03 11:35:31',
            ),
            5 => 
            array (
                'id' => 6,
                'etapa' => '5° ANO',
                'categoria_id' => 3,
                'created_at' => '2018-08-03 11:35:39',
                'updated_at' => '2018-08-03 11:35:39',
            ),
            6 => 
            array (
                'id' => 7,
                'etapa' => '6° ANO',
                'categoria_id' => 3,
                'created_at' => '2018-08-03 11:35:44',
                'updated_at' => '2018-08-03 11:35:44',
            ),
            7 => 
            array (
                'id' => 8,
                'etapa' => '7° ANO',
                'categoria_id' => 4,
                'created_at' => '2018-08-03 11:35:50',
                'updated_at' => '2018-08-03 11:35:50',
            ),
            8 => 
            array (
                'id' => 9,
                'etapa' => '8° ANO',
                'categoria_id' => 4,
                'created_at' => '2018-08-03 11:35:59',
                'updated_at' => '2018-08-03 11:35:59',
            ),
            9 => 
            array (
                'id' => 10,
                'etapa' => '9° ANO',
                'categoria_id' => 4,
                'created_at' => '2018-08-03 11:36:05',
                'updated_at' => '2018-08-03 11:36:05',
            ),
            10 => 
            array (
                'id' => 11,
                'etapa' => 'EJA',
                'categoria_id' => 5,
                'created_at' => '2018-08-03 11:36:09',
                'updated_at' => '2018-08-03 11:36:09',
            ),
        ));
        
        
    }
}