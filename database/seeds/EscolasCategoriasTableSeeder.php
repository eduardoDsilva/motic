<?php

use Illuminate\Database\Seeder;

class EscolasCategoriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('escolas_categorias')->delete();
        
        \DB::table('escolas_categorias')->insert(array (
            0 => 
            array (
                'escola_id' => 1,
                'categoria_id' => 1,
            ),
            1 => 
            array (
                'escola_id' => 1,
                'categoria_id' => 2,
            ),
            2 => 
            array (
                'escola_id' => 1,
                'categoria_id' => 3,
            ),
            3 => 
            array (
                'escola_id' => 1,
                'categoria_id' => 4,
            ),
            4 => 
            array (
                'escola_id' => 2,
                'categoria_id' => 1,
            ),
            5 => 
            array (
                'escola_id' => 2,
                'categoria_id' => 2,
            ),
            6 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 1,
            ),
            7 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 2,
            ),
            8 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 3,
            ),
            9 => 
            array (
                'escola_id' => 4,
                'categoria_id' => 1,
            ),
            10 => 
            array (
                'escola_id' => 4,
                'categoria_id' => 2,
            ),
            11 => 
            array (
                'escola_id' => 4,
                'categoria_id' => 3,
            ),
            12 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 2,
            ),
            13 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 3,
            ),
            14 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 4,
            ),
            15 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 5,
            ),
            16 => 
            array (
                'escola_id' => 6,
                'categoria_id' => 1,
            ),
            17 => 
            array (
                'escola_id' => 6,
                'categoria_id' => 2,
            ),
            18 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 1,
            ),
            19 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 2,
            ),
            20 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 3,
            ),
            21 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 4,
            ),
            22 => 
            array (
                'escola_id' => 8,
                'categoria_id' => 1,
            ),
            23 => 
            array (
                'escola_id' => 8,
                'categoria_id' => 2,
            ),
            24 => 
            array (
                'escola_id' => 9,
                'categoria_id' => 2,
            ),
            25 => 
            array (
                'escola_id' => 9,
                'categoria_id' => 3,
            ),
            26 => 
            array (
                'escola_id' => 10,
                'categoria_id' => 2,
            ),
            27 => 
            array (
                'escola_id' => 10,
                'categoria_id' => 3,
            ),
            28 => 
            array (
                'escola_id' => 10,
                'categoria_id' => 4,
            ),
            29 => 
            array (
                'escola_id' => 11,
                'categoria_id' => 2,
            ),
            30 => 
            array (
                'escola_id' => 11,
                'categoria_id' => 3,
            ),
            31 => 
            array (
                'escola_id' => 11,
                'categoria_id' => 4,
            ),
            32 => 
            array (
                'escola_id' => 12,
                'categoria_id' => 1,
            ),
            33 => 
            array (
                'escola_id' => 12,
                'categoria_id' => 2,
            ),
            34 => 
            array (
                'escola_id' => 13,
                'categoria_id' => 1,
            ),
            35 => 
            array (
                'escola_id' => 13,
                'categoria_id' => 2,
            ),
            36 => 
            array (
                'escola_id' => 13,
                'categoria_id' => 3,
            ),
            37 => 
            array (
                'escola_id' => 13,
                'categoria_id' => 4,
            ),
        ));
        
        
    }
}