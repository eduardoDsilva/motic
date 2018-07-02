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
                'escola_id' => 4,
                'categoria_id' => 1,
            ),
            3 => 
            array (
                'escola_id' => 4,
                'categoria_id' => 2,
            ),
            4 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 1,
            ),
            5 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 2,
            ),
            6 => 
            array (
                'escola_id' => 5,
                'categoria_id' => 3,
            ),
            7 => 
            array (
                'escola_id' => 6,
                'categoria_id' => 1,
            ),
            8 => 
            array (
                'escola_id' => 6,
                'categoria_id' => 2,
            ),
            9 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 2,
            ),
            10 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 3,
            ),
            11 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 4,
            ),
            12 => 
            array (
                'escola_id' => 7,
                'categoria_id' => 5,
            ),
            13 => 
            array (
                'escola_id' => 8,
                'categoria_id' => 1,
            ),
            14 => 
            array (
                'escola_id' => 8,
                'categoria_id' => 2,
            ),
            15 => 
            array (
                'escola_id' => 9,
                'categoria_id' => 1,
            ),
            16 => 
            array (
                'escola_id' => 9,
                'categoria_id' => 2,
            ),
            17 => 
            array (
                'escola_id' => 9,
                'categoria_id' => 3,
            ),
            18 => 
            array (
                'escola_id' => 9,
                'categoria_id' => 4,
            ),
            19 => 
            array (
                'escola_id' => 10,
                'categoria_id' => 1,
            ),
            20 => 
            array (
                'escola_id' => 10,
                'categoria_id' => 2,
            ),
            21 => 
            array (
                'escola_id' => 12,
                'categoria_id' => 2,
            ),
            22 => 
            array (
                'escola_id' => 12,
                'categoria_id' => 3,
            ),
            23 => 
            array (
                'escola_id' => 12,
                'categoria_id' => 4,
            ),
            24 => 
            array (
                'escola_id' => 14,
                'categoria_id' => 1,
            ),
            25 => 
            array (
                'escola_id' => 14,
                'categoria_id' => 2,
            ),
            26 => 
            array (
                'escola_id' => 15,
                'categoria_id' => 1,
            ),
            27 => 
            array (
                'escola_id' => 15,
                'categoria_id' => 2,
            ),
            28 => 
            array (
                'escola_id' => 15,
                'categoria_id' => 3,
            ),
            29 => 
            array (
                'escola_id' => 15,
                'categoria_id' => 4,
            ),
            30 => 
            array (
                'escola_id' => 16,
                'categoria_id' => 2,
            ),
            31 => 
            array (
                'escola_id' => 16,
                'categoria_id' => 3,
            ),
            32 => 
            array (
                'escola_id' => 16,
                'categoria_id' => 4,
            ),
            33 => 
            array (
                'escola_id' => 16,
                'categoria_id' => 5,
            ),
            34 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 1,
            ),
            35 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 2,
            ),
            36 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 3,
            ),
            37 => 
            array (
                'escola_id' => 3,
                'categoria_id' => 4,
            ),
        ));
        
        
    }
}