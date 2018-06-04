<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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

        User::create([
            'name' => 'EMEF Barão do Rio Branco',
            'username' => 'barao',
            'email' => 'barao@barao.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Bento Gonçalves',
            'username' => 'bentogoncalves',
            'email' => 'bentogoncalves@bentogoncalves.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Maria Emília de Paula',
            'username' => 'mariaemilia',
            'email' => 'mariaemilia@mariaemilia.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Borges de Medeiros',
            'username' => 'borges',
            'email' => 'borges@borges.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Castro Alves',
            'username' => 'castroalves',
            'email' => 'castroalves@castroalves.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Henrique Maximiliano Coelho Neto',
            'username' => 'maximiliano',
            'email' => 'maximiliano@maximiliano.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Emílio Meyer',
            'username' => 'emiliomeyer',
            'email' => 'emiliomeyer@emiliomeyer.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
        User::create([
            'name' => 'EMEF Franz Louis Weinmann',
            'username' => 'franzlouis',
            'email' => 'franzlouis@franzlouis.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'escola',
        ]);
    }
}
