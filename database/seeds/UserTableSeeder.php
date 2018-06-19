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
            'username' => 'eduardodasilva',
            'email' => 'eduardo.2599@hotmail.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'admin',
        ]);
        User::create([
            'name' => 'Lucas',
            'username' => 'lucas',
            'email' => 'lucas@hotmail.com',
            'password' => bcrypt('123456'),
            'tipoUser' => 'admin',
        ]);
    }
}
