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
        $this->call('DisciplinaTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('CategoriaTableSeeder');
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

        User::create([
            'name' => 'Eduardo da Silva',
            'username' => 'admin',
            'email' => 'eduardo.2599@hotmail.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'admin',
        ]);
    }

}

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categorias')->delete();

        Categoria::create([
            'categoria' => "Educação Infantil",
            'descricao'  => 'Contempla as Emeis e Emefs que têm a classe de Educação Infantil em seu panorama',
        ]);
        Categoria::create([
            'categoria' => 'EMEF 1',
            'descricao'  => 'Contempla do 1° ano ao 3° ano',
        ]);
        Categoria::create([
            'categoria' => 'EMEF 2',
            'descricao'  => 'Contempla do 4° ao 6°ano',
        ]);
        Categoria::create([
            'categoria' => 'EMEF 3',
            'descricao'  => 'Contempla do 7° ano ao 9° ano',
        ]);
        Categoria::create([
            'categoria' => 'EJA',
            'descricao'  => 'Contempla a Educação de Jovens e Adultos',
        ]);
    }
}


