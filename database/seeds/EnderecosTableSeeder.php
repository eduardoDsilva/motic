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
                'rua' => 'Rio Branco',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'Barão',
                'cep' => '41848483',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 5,
                'created_at' => '2018-06-29 10:06:49',
                'updated_at' => '2018-06-29 10:06:49',
            ),
            1 => 
            array (
                'id' => 2,
                'rua' => 'Gonçalves',
                'numero' => '654',
                'complemento' => NULL,
                'bairro' => 'Bento',
                'cep' => '45631514',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 6,
                'created_at' => '2018-06-29 10:07:33',
                'updated_at' => '2018-06-29 10:07:33',
            ),
            2 => 
            array (
                'id' => 3,
                'rua' => 'Emília de Paula',
                'numero' => '558',
                'complemento' => NULL,
                'bairro' => 'Maria',
                'cep' => '54345817',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 7,
                'created_at' => '2018-06-29 10:08:36',
                'updated_at' => '2018-06-29 10:08:36',
            ),
            3 => 
            array (
                'id' => 4,
                'rua' => 'De Medeiros',
                'numero' => '74',
                'complemento' => NULL,
                'bairro' => 'Borges',
                'cep' => '45158128',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 8,
                'created_at' => '2018-06-29 10:09:20',
                'updated_at' => '2018-06-29 10:09:20',
            ),
            4 => 
            array (
                'id' => 5,
                'rua' => 'Alves',
                'numero' => '69',
                'complemento' => NULL,
                'bairro' => 'Castro',
                'cep' => '45135398',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 9,
                'created_at' => '2018-06-29 10:09:52',
                'updated_at' => '2018-06-29 10:09:52',
            ),
            5 => 
            array (
                'id' => 6,
                'rua' => 'Maximiliano Coelho',
                'numero' => '65',
                'complemento' => NULL,
                'bairro' => 'Henrique',
                'cep' => '21354875',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 10,
                'created_at' => '2018-06-29 10:10:58',
                'updated_at' => '2018-06-29 10:10:58',
            ),
            6 => 
            array (
                'id' => 7,
                'rua' => 'Meyer',
                'numero' => '67',
                'complemento' => NULL,
                'bairro' => 'Emilio',
                'cep' => '41351538',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 11,
                'created_at' => '2018-06-29 10:11:40',
                'updated_at' => '2018-06-29 10:11:40',
            ),
            7 => 
            array (
                'id' => 8,
                'rua' => 'Louis',
                'numero' => '55',
                'complemento' => NULL,
                'bairro' => 'Franz',
                'cep' => '45415315',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 12,
                'created_at' => '2018-06-29 10:12:27',
                'updated_at' => '2018-06-29 10:12:27',
            ),
            8 => 
            array (
                'id' => 9,
                'rua' => 'Weibert',
                'numero' => '554',
                'complemento' => NULL,
                'bairro' => 'Irmão',
                'cep' => '43242342',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 13,
                'created_at' => '2018-06-29 10:13:16',
                'updated_at' => '2018-06-29 10:13:16',
            ),
            9 => 
            array (
                'id' => 10,
                'rua' => 'Jose',
                'numero' => '698',
                'complemento' => NULL,
                'bairro' => 'Professor',
                'cep' => '41351325',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 14,
                'created_at' => '2018-06-29 10:14:07',
                'updated_at' => '2018-06-29 10:14:07',
            ),
            10 => 
            array (
                'id' => 11,
                'rua' => 'Maria Gusmão',
                'numero' => '748',
                'complemento' => NULL,
                'bairro' => 'Professora',
                'cep' => '48654564',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 15,
                'created_at' => '2018-06-29 10:15:23',
                'updated_at' => '2018-06-29 10:15:23',
            ),
            11 => 
            array (
                'id' => 12,
                'rua' => 'Aranha',
                'numero' => '5578',
                'complemento' => NULL,
                'bairro' => 'Osvaldo',
                'cep' => '48654564',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 16,
                'created_at' => '2018-06-29 10:16:14',
                'updated_at' => '2018-06-29 10:16:14',
            ),
            12 => 
            array (
                'id' => 13,
                'rua' => 'Carvalho',
                'numero' => '5547',
                'complemento' => NULL,
                'bairro' => 'Otilia',
                'cep' => '45189857',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 17,
                'created_at' => '2018-06-29 10:17:11',
                'updated_at' => '2018-06-29 10:17:11',
            ),
            13 => 
            array (
                'id' => 14,
                'rua' => 'dwadawd',
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => '48684111',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 19,
                'created_at' => '2018-06-29 10:22:24',
                'updated_at' => '2018-06-29 10:22:24',
            ),
            14 => 
            array (
                'id' => 15,
                'rua' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cep' => NULL,
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 20,
                'created_at' => '2018-06-29 10:34:34',
                'updated_at' => '2018-06-29 10:34:34',
            ),
        ));
        
        
    }
}