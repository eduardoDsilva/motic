<?php

use Illuminate\Database\Seeder;

class AvaliadoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('avaliadores')->delete();
        
        \DB::table('avaliadores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Patrick Fernando Vianna',
                'nascimento' => '08-10-1972',
                'sexo' => 'masculino',
                'telefone' => '4654515788',
                'grauDeInstrucao' => 'Doutorado',
                'cpf' => '05156487451',
                'instituicao' => 'Unisinos',
                'projetos' => 0,
                'user_id' => 20,
                'created_at' => '2018-06-29 10:34:34',
                'updated_at' => '2018-06-29 10:34:34',
            ),
        ));
        
        
    }
}