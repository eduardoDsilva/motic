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
                'id' => 3,
                'rua' => 'do rio Branco',
                'numero' => '78',
                'complemento' => NULL,
                'bairro' => 'Barão',
                'cep' => '56484148',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 12,
                'created_at' => '2018-07-09 10:19:00',
                'updated_at' => '2018-07-09 10:19:00',
            ),
            1 => 
            array (
                'id' => 4,
                'rua' => 'Gonçalves',
                'numero' => '78',
                'complemento' => NULL,
                'bairro' => 'Bento',
                'cep' => '54646847',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 13,
                'created_at' => '2018-07-09 10:20:13',
                'updated_at' => '2018-07-09 10:20:13',
            ),
            2 => 
            array (
                'id' => 5,
                'rua' => 'Emília',
                'numero' => '78',
                'complemento' => NULL,
                'bairro' => 'Maria',
                'cep' => '48648648',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 14,
                'created_at' => '2018-07-09 10:20:49',
                'updated_at' => '2018-07-09 10:20:49',
            ),
            3 => 
            array (
                'id' => 6,
                'rua' => 'de medeiros',
                'numero' => '48',
                'complemento' => NULL,
                'bairro' => 'Bprges',
                'cep' => '48487848',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 15,
                'created_at' => '2018-07-09 10:29:32',
                'updated_at' => '2018-07-09 10:29:32',
            ),
            4 => 
            array (
                'id' => 7,
                'rua' => 'Alves',
                'numero' => '78',
                'complemento' => NULL,
                'bairro' => 'Castro',
                'cep' => '16848649',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 16,
                'created_at' => '2018-07-09 10:30:31',
                'updated_at' => '2018-07-09 10:30:31',
            ),
            5 => 
            array (
                'id' => 8,
                'rua' => 'Maximiliano',
                'numero' => '78',
                'complemento' => NULL,
                'bairro' => 'Henrique',
                'cep' => '48648487',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 17,
                'created_at' => '2018-07-09 10:31:19',
                'updated_at' => '2018-07-09 10:31:19',
            ),
            6 => 
            array (
                'id' => 9,
                'rua' => 'meyer',
                'numero' => '48',
                'complemento' => NULL,
                'bairro' => 'emilio',
                'cep' => '48847878',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 18,
                'created_at' => '2018-07-09 10:31:57',
                'updated_at' => '2018-07-09 10:31:57',
            ),
            7 => 
            array (
                'id' => 10,
                'rua' => 'louis',
                'numero' => '1',
                'complemento' => NULL,
                'bairro' => 'franz',
                'cep' => '48487488',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 19,
                'created_at' => '2018-07-09 10:33:26',
                'updated_at' => '2018-07-09 10:33:26',
            ),
            8 => 
            array (
                'id' => 11,
                'rua' => 'weibert',
                'numero' => '11',
                'complemento' => NULL,
                'bairro' => 'irmao',
                'cep' => '18484786',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 20,
                'created_at' => '2018-07-09 10:34:24',
                'updated_at' => '2018-07-09 10:34:24',
            ),
            9 => 
            array (
                'id' => 12,
                'rua' => 'dwadaw',
                'numero' => '78',
                'complemento' => NULL,
                'bairro' => 'dawdaw',
                'cep' => '15487848',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 21,
                'created_at' => '2018-07-09 10:35:25',
                'updated_at' => '2018-07-09 10:35:25',
            ),
            10 => 
            array (
                'id' => 13,
                'rua' => 'dwadw',
                'numero' => '45',
                'complemento' => NULL,
                'bairro' => 'dawda',
                'cep' => '48486714',
                'cidade' => 'São Leopoldo',
                'estado' => 'Rio Grande do Sul',
                'pais' => 'Brasil',
                'user_id' => 22,
                'created_at' => '2018-07-09 10:36:55',
                'updated_at' => '2018-07-09 10:36:55',
            ),
        ));
        
        
    }
}