<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professores')->delete();
        
        \DB::table('professores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Chrstian Silveira',
                'nascimento' => '24-12-1985',
                'sexo' => 'masculino',
                'telefone' => '589484868',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '45612158487',
                'matricula' => 546415,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 4,
                'user_id' => 19,
                'projeto_id' => NULL,
                'created_at' => '2018-06-29 10:22:24',
                'updated_at' => '2018-06-29 10:22:24',
            ),
        ));
        
        
    }
}