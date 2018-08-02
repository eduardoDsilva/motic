<?php

use Illuminate\Database\Seeder;

class InscricoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inscricoes')->delete();
        
        \DB::table('inscricoes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_inicio' => '30-07-2018',
                'data_fim' => '31-07-2018',
                'created_at' => '2018-07-30 11:21:42',
                'updated_at' => '2018-07-30 11:21:42',
            ),
            1 => 
            array (
                'id' => 2,
                'data_inicio' => '01-08-2018',
                'data_fim' => '21-08-2018',
                'created_at' => '2018-07-30 15:01:00',
                'updated_at' => '2018-07-30 15:01:00',
            ),
            2 => 
            array (
                'id' => 3,
                'data_inicio' => '31-07-2018',
                'data_fim' => '21-08-2018',
                'created_at' => '2018-07-31 09:40:45',
                'updated_at' => '2018-07-31 09:40:45',
            ),
            3 => 
            array (
                'id' => 4,
                'data_inicio' => '01-08-2018',
                'data_fim' => '21-08-2018',
                'created_at' => '2018-08-01 08:19:53',
                'updated_at' => '2018-08-01 08:19:53',
            ),
        ));
        
        
    }
}