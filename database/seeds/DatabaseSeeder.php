<?php

use Illuminate\Database\Seeder;
use \App\Disciplina;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DisciplinaTableSeeder');
        $this->call('UserTableSeeder');
    }
}

class DisciplinaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('disciplinas')->delete();

        Disciplina::create([
            'name' => 'História',
            'descricao'  => 'Descrição da disciplina de história',
        ]);
        Disciplina::create([
            'name' => 'Matemática',
            'descricao'  => 'Descrição da disciplina de Matemáticas',
        ]);
        Disciplina::create([
            'name' => 'Geografia',
            'descricao'  => 'Descrição da disciplina de Geografia',
        ]);
        Disciplina::create([
            'name' => 'Filosofia',
            'descricao'  => 'Descrição da disciplina de Filosofia',
        ]);
        Disciplina::create([
            'name' => 'Química',
            'descricao'  => 'Descrição da disciplina de Química',
        ]);
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        \App\User::create([
            'name' => 'Eduardo da Silva',
            'username' => 'admin',
            'email' => 'eduardo.2599@hotmail.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'admin',
        ]);
    }

}


