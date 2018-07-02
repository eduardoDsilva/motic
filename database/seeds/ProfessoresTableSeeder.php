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
                'name' => 'Eduardo da Silva',
                'nascimento' => '09-06-1998',
                'sexo' => 'masculino',
                'telefone' => '45848648',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '48648648487',
                'matricula' => 4654864,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 9,
                'user_id' => 21,
                'projeto_id' => NULL,
                'created_at' => '2018-06-27 12:49:38',
                'updated_at' => '2018-06-27 12:49:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'José dos Santos',
                'nascimento' => '08-06-1989',
                'sexo' => 'masculino',
                'telefone' => '1564864867',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '48648788475',
                'matricula' => 55555,
                'tipo' => 'orientador',
                'camisa' => 'M',
                'escola_id' => 1,
                'user_id' => 22,
                'projeto_id' => NULL,
                'created_at' => '2018-06-28 08:26:36',
                'updated_at' => '2018-06-28 08:30:57',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Daniel Sampaio',
                'nascimento' => '23-06-1972',
                'sexo' => 'masculino',
                'telefone' => '145615648',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '48654156151',
                'matricula' => 4567897,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 4,
                'user_id' => 25,
                'projeto_id' => NULL,
                'created_at' => '2018-06-28 12:43:30',
                'updated_at' => '2018-06-28 12:43:30',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Fernando Elias Brandalise',
                'nascimento' => '23-09-1974',
                'sexo' => 'masculino',
                'telefone' => '456879546',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '45624157844',
                'matricula' => 7777,
                'tipo' => 'nenhum',
                'camisa' => 'M',
                'escola_id' => 6,
                'user_id' => 26,
                'projeto_id' => NULL,
                'created_at' => '2018-06-28 12:45:17',
                'updated_at' => '2018-06-28 12:45:17',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Douglas Farias',
                'nascimento' => '12-06-1944',
                'sexo' => 'masculino',
                'telefone' => '454567878',
                'grauDeInstrucao' => 'Ensino Superior',
                'cpf' => '77878444444',
                'matricula' => 4564545,
                'tipo' => 'nenhum',
                'camisa' => 'P',
                'escola_id' => 8,
                'user_id' => 27,
                'projeto_id' => NULL,
                'created_at' => '2018-06-28 12:48:05',
                'updated_at' => '2018-06-28 12:48:05',
            ),
        ));
        
        
    }
}