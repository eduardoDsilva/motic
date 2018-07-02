<?php

use Illuminate\Database\Seeder;

class EnderecosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enderecos')->delete();
        
        \DB::table('enderecos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rua' => 'teste',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'teste',
                'cep' => '84684684',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 5,
                'created_at' => '2018-06-25 13:47:28',
                'updated_at' => '2018-06-25 13:47:28',
            ),
            1 => 
            array (
                'id' => 3,
                'rua' => 'Rio Branco',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'Barão',
                'cep' => '79546879',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 7,
                'created_at' => '2018-06-27 11:54:01',
                'updated_at' => '2018-06-27 11:54:01',
            ),
            2 => 
            array (
                'id' => 4,
                'rua' => 'Bento',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'Bento Gonçalves',
                'cep' => '46848487',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 8,
                'created_at' => '2018-06-27 11:55:05',
                'updated_at' => '2018-06-27 11:55:05',
            ),
            3 => 
            array (
                'id' => 5,
                'rua' => 'Maria Emilia',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'Maria Emília',
                'cep' => '92654867',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 9,
                'created_at' => '2018-06-27 11:56:08',
                'updated_at' => '2018-06-27 11:56:08',
            ),
            4 => 
            array (
                'id' => 6,
                'rua' => 'De medeiros',
                'numero' => '65',
                'complemento' => NULL,
                'bairro' => 'Borges',
                'cep' => '41251865',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 10,
                'created_at' => '2018-06-27 11:57:04',
                'updated_at' => '2018-06-27 11:57:04',
            ),
            5 => 
            array (
                'id' => 7,
                'rua' => 'Alves',
                'numero' => '54',
                'complemento' => NULL,
                'bairro' => 'Castro',
                'cep' => '51534584',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 11,
                'created_at' => '2018-06-27 11:58:01',
                'updated_at' => '2018-06-27 11:58:01',
            ),
            6 => 
            array (
                'id' => 8,
                'rua' => 'Maximiliano',
                'numero' => '54',
                'complemento' => NULL,
                'bairro' => 'Henrique',
                'cep' => '46816548',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 12,
                'created_at' => '2018-06-27 11:59:02',
                'updated_at' => '2018-06-27 11:59:02',
            ),
            7 => 
            array (
                'id' => 9,
                'rua' => 'Meyer',
                'numero' => '858',
                'complemento' => NULL,
                'bairro' => 'Emílio',
                'cep' => '58648641',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 13,
                'created_at' => '2018-06-27 12:02:49',
                'updated_at' => '2018-06-27 12:02:49',
            ),
            8 => 
            array (
                'id' => 10,
                'rua' => 'Louis',
                'numero' => '441',
                'complemento' => NULL,
                'bairro' => 'Franz',
                'cep' => '54354878',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 14,
                'created_at' => '2018-06-27 12:03:43',
                'updated_at' => '2018-06-27 12:03:43',
            ),
            9 => 
            array (
                'id' => 12,
                'rua' => 'Jose',
                'numero' => '442',
                'complemento' => NULL,
                'bairro' => 'Professor',
                'cep' => '15156487',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 16,
                'created_at' => '2018-06-27 12:05:29',
                'updated_at' => '2018-06-27 12:05:29',
            ),
            10 => 
            array (
                'id' => 14,
                'rua' => 'Aranha',
                'numero' => '556',
                'complemento' => NULL,
                'bairro' => 'Osvaldo',
                'cep' => '15345347',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 18,
                'created_at' => '2018-06-27 12:07:07',
                'updated_at' => '2018-06-27 12:07:07',
            ),
            11 => 
            array (
                'id' => 15,
                'rua' => 'carvalho',
                'numero' => '1111',
                'complemento' => NULL,
                'bairro' => 'otilia',
                'cep' => '45487895',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 19,
                'created_at' => '2018-06-27 12:08:38',
                'updated_at' => '2018-06-27 12:08:38',
            ),
            12 => 
            array (
                'id' => 16,
                'rua' => 'Harris',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'Paul',
                'cep' => '93115580',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 20,
                'created_at' => '2018-06-27 12:40:02',
                'updated_at' => '2018-06-27 12:40:02',
            ),
            13 => 
            array (
                'id' => 17,
                'rua' => 'dwadaw',
                'numero' => '48',
                'complemento' => NULL,
                'bairro' => 'dawdaw',
                'cep' => '92658944',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 21,
                'created_at' => '2018-06-27 12:49:38',
                'updated_at' => '2018-06-27 12:49:38',
            ),
            14 => 
            array (
                'id' => 18,
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 22,
                'created_at' => '2018-06-28 08:26:36',
                'updated_at' => '2018-06-28 08:26:36',
            ),
            15 => 
            array (
                'id' => 21,
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 25,
                'created_at' => '2018-06-28 12:43:30',
                'updated_at' => '2018-06-28 12:43:30',
            ),
            16 => 
            array (
                'id' => 22,
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 26,
                'created_at' => '2018-06-28 12:45:17',
                'updated_at' => '2018-06-28 12:45:17',
            ),
            17 => 
            array (
                'id' => 23,
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 27,
                'created_at' => '2018-06-28 12:48:05',
                'updated_at' => '2018-06-28 12:48:05',
            ),
        ));
        
        
    }
}