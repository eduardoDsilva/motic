<?php

use Illuminate\Database\Seeder;

class ConteudosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('conteudos')->delete();
        
        \DB::table('conteudos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sobre' => 'sobre',
                'contato' => '<p>contatoo</p>',
                'created_at' => '2018-08-01 12:45:52',
                'updated_at' => '2018-08-01 09:44:37',
            ),
        ));
        
        
    }
}