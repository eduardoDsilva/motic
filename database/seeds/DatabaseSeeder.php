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
        $this->call(UsersTableSeeder::class);
        $this->call(EscolasTableSeeder::class);
        $this->call(EnderecosTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(ProfessoresTableSeeder::class);
        $this->call(AvaliadoresTableSeeder::class);
        $this->call(AlunosTableSeeder::class);
        $this->call(DisciplinasTableSeeder::class);
    }

}







