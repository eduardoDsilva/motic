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
                'name' => 'Flávio Fernando de Souza',
                'nascimento' => '17-07-1986',
                'sexo' => 'masculino',
                'telefone' => '48789554588',
                'grauDeInstrucao' => 'Doutorado',
                'cpf' => '11111111111',
                'instituicao' => 'Unisinos',
                'projetos' => 0,
                'user_id' => 25,
                'created_at' => '2018-07-09 11:28:11',
                'updated_at' => '2018-07-09 11:28:11',
            ),
        ));
        
        
    }
}