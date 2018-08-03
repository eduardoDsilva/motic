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

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(EnderecosTableSeeder::class);
        $this->call(EscolasTableSeeder::class);
        $this->call(ProfessoresTableSeeder::class);
        $this->call(AlunosTableSeeder::class);
        $this->call(AvaliadoresTableSeeder::class);
        $this->call(DisciplinasTableSeeder::class);
        $this->call(ProjetosTableSeeder::class);
        $this->call(InscricoesTableSeeder::class);
        $this->call(AvaliacoesTableSeeder::class);
        $this->call(ConteudosTableSeeder::class);
        $this->call(AuditsTableSeeder::class);
        $this->call(AccessesTableSeeder::class);
        $this->call(EtapasTableSeeder::class);
    }

}







