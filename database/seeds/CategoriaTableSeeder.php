<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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

