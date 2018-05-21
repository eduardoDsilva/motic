<?php

use Illuminate\Database\Seeder;
use \App\Disciplina;
use \App\Categoria;
use \App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->call('DisciplinaTableSeeder');
        $this->call('CategoriaTableSeeder');
    }

}







