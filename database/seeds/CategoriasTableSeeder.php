<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorias')->delete();
        
        \DB::table('categorias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'categoria' => 'Educação Infantil',
                'descricao' => 'Contempla as Emeis e Emefs que têm a classe de Educação Infantil em seu panorama',
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            1 => 
            array (
                'id' => 2,
                'categoria' => 'EMEF 1',
                'descricao' => 'Contempla do 1° ano ao 3° ano',
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            2 => 
            array (
                'id' => 3,
                'categoria' => 'EMEF 2',
                'descricao' => 'Contempla do 4° ao 6°ano',
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            3 => 
            array (
                'id' => 4,
                'categoria' => 'EMEF 3',
                'descricao' => 'Contempla do 7° ano ao 9° ano',
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            4 => 
            array (
                'id' => 5,
                'categoria' => 'EJA',
                'descricao' => 'Contempla a Educação de Jovens e Adultos',
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
        ));
        
        
    }
}