<?php

use Illuminate\Database\Seeder;

class EscolasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('escolas')->delete();
        
        \DB::table('escolas')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'EMEF Barão do Rio Branco',
                'telefone' => '1561845849',
                'projetos' => 4,
                'user_id' => 12,
                'created_at' => '2018-07-09 10:19:00',
                'updated_at' => '2018-07-09 10:19:00',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'EMEF Bento Gonçalves',
                'telefone' => '56468486478',
                'projetos' => 2,
                'user_id' => 13,
                'created_at' => '2018-07-09 10:20:13',
                'updated_at' => '2018-07-09 10:20:13',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'EMEF Maria Emília de Paula',
                'telefone' => '468484867',
                'projetos' => 3,
                'user_id' => 14,
                'created_at' => '2018-07-09 10:20:49',
                'updated_at' => '2018-07-09 13:17:31',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'EMEF Borges de Medeiros',
                'telefone' => '4864878487',
                'projetos' => 2,
                'user_id' => 15,
                'created_at' => '2018-07-09 10:29:32',
                'updated_at' => '2018-07-09 10:29:32',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'EMEF Castro Alves',
                'telefone' => '78489484',
                'projetos' => 4,
                'user_id' => 16,
                'created_at' => '2018-07-09 10:30:31',
                'updated_at' => '2018-07-09 13:17:15',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'EMEF Henrique Maximiliano Coelho Neto',
                'telefone' => '484847897',
                'projetos' => 2,
                'user_id' => 17,
                'created_at' => '2018-07-09 10:31:19',
                'updated_at' => '2018-07-09 10:31:19',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'EMEF Emílio Meyer',
                'telefone' => '484787487',
                'projetos' => 4,
                'user_id' => 18,
                'created_at' => '2018-07-09 10:31:57',
                'updated_at' => '2018-07-09 10:31:57',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'EMEF Franz Louis Weinmann',
                'telefone' => '548487486',
                'projetos' => 2,
                'user_id' => 19,
                'created_at' => '2018-07-09 10:33:26',
                'updated_at' => '2018-07-09 10:33:26',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'EMEF Irmão Weibert',
                'telefone' => '118468784',
                'projetos' => 2,
                'user_id' => 20,
                'created_at' => '2018-07-09 10:34:24',
                'updated_at' => '2018-07-09 10:34:24',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'EMEF Professor José Grimberg',
                'telefone' => '184897897',
                'projetos' => 3,
                'user_id' => 21,
                'created_at' => '2018-07-09 10:35:25',
                'updated_at' => '2018-07-09 10:35:25',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'EMEF Doutor Olimpio Vianna Albrecht',
                'telefone' => '484787487',
                'projetos' => 5,
                'user_id' => 22,
                'created_at' => '2018-07-09 10:36:55',
                'updated_at' => '2018-07-09 10:36:55',
            ),
        ));
        
        
    }
}