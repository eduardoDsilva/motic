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
                'id' => 1,
                'name' => 'EMEF Rui Barbosa',
                'telefone' => '564684684',
                'projetos' => 2,
                'user_id' => 5,
                'created_at' => '2018-06-25 13:47:28',
                'updated_at' => '2018-06-25 13:47:28',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'EMEF Barão do Rio Branco',
                'telefone' => '456213548',
                'projetos' => 4,
                'user_id' => 7,
                'created_at' => '2018-06-27 11:54:01',
                'updated_at' => '2018-06-28 11:36:52',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'EMEF Bento Gonçalves',
                'telefone' => '451684684',
                'projetos' => 2,
                'user_id' => 8,
                'created_at' => '2018-06-27 11:55:05',
                'updated_at' => '2018-06-27 11:55:05',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'EMEF Maria Emília de Paula',
                'telefone' => '456468486',
                'projetos' => 3,
                'user_id' => 9,
                'created_at' => '2018-06-27 11:56:08',
                'updated_at' => '2018-06-27 11:56:08',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'EMEF Borges de Medeiros',
                'telefone' => '1564531867',
                'projetos' => 2,
                'user_id' => 10,
                'created_at' => '2018-06-27 11:57:04',
                'updated_at' => '2018-06-27 11:57:04',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'EMEF Castro Alves',
                'telefone' => '1565318684',
                'projetos' => 4,
                'user_id' => 11,
                'created_at' => '2018-06-27 11:58:01',
                'updated_at' => '2018-06-27 11:58:01',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'EMEF Henrique Maximiliano Coelho Neto',
                'telefone' => '54312564684',
                'projetos' => 2,
                'user_id' => 12,
                'created_at' => '2018-06-27 11:59:02',
                'updated_at' => '2018-06-27 11:59:02',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'EMEF Emílio Meyer',
                'telefone' => '123156456',
                'projetos' => 4,
                'user_id' => 13,
                'created_at' => '2018-06-27 12:02:49',
                'updated_at' => '2018-06-27 12:02:49',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'EMEF Franz Louis Weinmann',
                'telefone' => '4561534887',
                'projetos' => 2,
                'user_id' => 14,
                'created_at' => '2018-06-27 12:03:43',
                'updated_at' => '2018-06-27 12:03:43',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'EMEF Professor José Grimberg',
                'telefone' => '1564145648',
                'projetos' => 3,
                'user_id' => 16,
                'created_at' => '2018-06-27 12:05:29',
                'updated_at' => '2018-06-27 12:05:29',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'EMEF Osvaldo Aranha',
                'telefone' => '156456486',
                'projetos' => 2,
                'user_id' => 18,
                'created_at' => '2018-06-27 12:07:07',
                'updated_at' => '2018-06-27 12:07:07',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'EMEF Otíia Carvalho Rieth',
                'telefone' => '4654548578',
                'projetos' => 4,
                'user_id' => 19,
                'created_at' => '2018-06-27 12:08:38',
                'updated_at' => '2018-06-27 12:08:38',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'EMEF Paul Harris',
                'telefone' => '468454548',
                'projetos' => 4,
                'user_id' => 20,
                'created_at' => '2018-06-27 12:40:02',
                'updated_at' => '2018-06-27 12:40:02',
            ),
        ));
        
        
    }
}