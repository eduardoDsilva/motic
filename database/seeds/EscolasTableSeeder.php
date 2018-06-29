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
                'name' => 'EMEF Barão do Rio Branco',
                'telefone' => '1234562158',
                'projetos' => 4,
                'user_id' => 5,
                'created_at' => '2018-06-29 10:06:49',
                'updated_at' => '2018-06-29 10:06:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'EMEF Bento Gonçalves',
                'telefone' => '411534854',
                'projetos' => 2,
                'user_id' => 6,
                'created_at' => '2018-06-29 10:07:33',
                'updated_at' => '2018-06-29 10:07:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'EMEF Maria Emilia de Paula',
                'telefone' => '45123215898',
                'projetos' => 3,
                'user_id' => 7,
                'created_at' => '2018-06-29 10:08:36',
                'updated_at' => '2018-06-29 10:08:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'EMEF Borges de Medeiros',
                'telefone' => '1531532154',
                'projetos' => 3,
                'user_id' => 8,
                'created_at' => '2018-06-29 10:09:20',
                'updated_at' => '2018-06-29 10:09:20',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'EMEF Castro Alves',
                'telefone' => '123151354',
                'projetos' => 4,
                'user_id' => 9,
                'created_at' => '2018-06-29 10:09:52',
                'updated_at' => '2018-06-29 10:09:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'EMEF Henrique Maximiliano Coelho Neto',
                'telefone' => '4154151358',
                'projetos' => 2,
                'user_id' => 10,
                'created_at' => '2018-06-29 10:10:58',
                'updated_at' => '2018-06-29 10:10:58',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'EMEF Emílio Meyer',
                'telefone' => '135143548',
                'projetos' => 4,
                'user_id' => 11,
                'created_at' => '2018-06-29 10:11:40',
                'updated_at' => '2018-06-29 10:11:40',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'EMEF Franz Louis Weinmann',
                'telefone' => '1531548858',
                'projetos' => 2,
                'user_id' => 12,
                'created_at' => '2018-06-29 10:12:27',
                'updated_at' => '2018-06-29 10:12:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'EMEF Irmão Weibert',
                'telefone' => '432423423423',
                'projetos' => 2,
                'user_id' => 13,
                'created_at' => '2018-06-29 10:13:16',
                'updated_at' => '2018-06-29 10:13:16',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'EMEF Professor José Grimberg',
                'telefone' => '1516548685',
                'projetos' => 3,
                'user_id' => 14,
                'created_at' => '2018-06-29 10:14:07',
                'updated_at' => '2018-06-29 10:14:07',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'EMEF Professora Maria Gusmão Britto',
                'telefone' => '54154898651',
                'projetos' => 3,
                'user_id' => 15,
                'created_at' => '2018-06-29 10:15:23',
                'updated_at' => '2018-06-29 10:15:23',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'EMEF Osvaldo Aranha',
                'telefone' => '151519984',
                'projetos' => 2,
                'user_id' => 16,
                'created_at' => '2018-06-29 10:16:14',
                'updated_at' => '2018-06-29 10:16:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'EMEF Otíia Carvalho Rieth',
                'telefone' => '546857851',
                'projetos' => 4,
                'user_id' => 17,
                'created_at' => '2018-06-29 10:17:11',
                'updated_at' => '2018-06-29 10:17:11',
            ),
        ));
        
        
    }
}