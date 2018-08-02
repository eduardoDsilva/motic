<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alunos')->delete();
        
        
        
    }
}