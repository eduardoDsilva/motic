<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     //   $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(DisciplinasTableSeeder::class);
      /*  $this->call(EscolasTableSeeder::class);
        $this->call(EscolasCategoriasTableSeeder::class);
        $this->call(AlunosTableSeeder::class);
        $this->call(ProfessoresTableSeeder::class);
        $this->call(AvaliadoresTableSeeder::class);
        $this->call(EnderecosTableSeeder::class);*/
    }

}







