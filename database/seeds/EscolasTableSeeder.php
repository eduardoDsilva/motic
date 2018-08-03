<?php

use Illuminate\Database\Seeder;

class EscolasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('escolas')->delete();
        
        \DB::table('escolas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'EMEI Sonho Nosso',
                'telefone' => '5135662551',
                'projetos' => 1,
                'user_id' => 36,
                'created_at' => '2018-07-31 15:30:28',
                'updated_at' => '2018-07-31 15:30:28',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'EMEI Antônio Leite',
                'telefone' => '5135663414',
                'projetos' => 1,
                'user_id' => 37,
                'created_at' => '2018-07-31 15:36:30',
                'updated_at' => '2018-07-31 15:36:30',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'EMEI Brinco de Princesa',
                'telefone' => '5137833496',
                'projetos' => 1,
                'user_id' => 38,
                'created_at' => '2018-07-31 15:42:59',
                'updated_at' => '2018-07-31 15:42:59',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'EMEI Girassol',
                'telefone' => '5122000857',
                'projetos' => 1,
                'user_id' => 39,
                'created_at' => '2018-07-31 15:48:10',
                'updated_at' => '2018-07-31 15:48:10',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'EMEI Vitória Régia',
                'telefone' => '5135720588',
                'projetos' => 1,
                'user_id' => 40,
                'created_at' => '2018-07-31 15:53:03',
                'updated_at' => '2018-07-31 15:53:03',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'EMEI Jardim Verde',
                'telefone' => '5135542785',
                'projetos' => 1,
                'user_id' => 41,
                'created_at' => '2018-07-31 15:57:41',
                'updated_at' => '2018-07-31 15:57:41',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'EMEF Prof João Hohendor',
                'telefone' => '5135684764',
                'projetos' => 4,
                'user_id' => 42,
                'created_at' => '2018-08-01 09:35:13',
                'updated_at' => '2018-08-01 09:35:13',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'EMEF Prof Álvaro Luis Nunes',
                'telefone' => '5122000864',
                'projetos' => 5,
                'user_id' => 43,
                'created_at' => '2018-08-01 09:49:41',
                'updated_at' => '2018-08-01 09:49:41',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'EMEF Santa Marta',
                'telefone' => '5135889536',
                'projetos' => 4,
                'user_id' => 44,
                'created_at' => '2018-08-01 10:00:35',
                'updated_at' => '2018-08-01 10:00:35',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'EMEF Prof Dilza F Albrecht',
                'telefone' => '5135904495',
                'projetos' => 5,
                'user_id' => 45,
                'created_at' => '2018-08-01 10:12:41',
                'updated_at' => '2018-08-01 10:12:41',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'EMEF Castro Alves',
                'telefone' => '5135540991',
                'projetos' => 4,
                'user_id' => 46,
                'created_at' => '2018-08-01 10:20:31',
                'updated_at' => '2018-08-01 10:20:31',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'EMEF Bento Gonçalves',
                'telefone' => '51993337032',
                'projetos' => 3,
                'user_id' => 47,
                'created_at' => '2018-08-01 10:37:24',
                'updated_at' => '2018-08-01 10:37:24',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'EMA Pequeno Príncipe',
                'telefone' => '5135902611',
                'projetos' => 3,
                'user_id' => 48,
                'created_at' => '2018-08-01 10:43:13',
                'updated_at' => '2018-08-01 10:43:13',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'EMEF Maria Edila da S Schmidt',
                'telefone' => '5135921311',
                'projetos' => 5,
                'user_id' => 49,
                'created_at' => '2018-08-01 10:48:34',
                'updated_at' => '2018-08-01 10:48:34',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'EMEF Paulo Beck',
                'telefone' => '5135923850',
                'projetos' => 5,
                'user_id' => 50,
                'created_at' => '2018-08-01 11:06:35',
                'updated_at' => '2018-08-01 11:06:35',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'EMEF Arthur Ostermann',
                'telefone' => '5135887309',
                'projetos' => 3,
                'user_id' => 51,
                'created_at' => '2018-08-01 11:11:27',
                'updated_at' => '2018-08-01 11:11:27',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'EMEF Edgard Coelho',
                'telefone' => '5122000863',
                'projetos' => 3,
                'user_id' => 52,
                'created_at' => '2018-08-01 11:16:11',
                'updated_at' => '2018-08-01 11:16:11',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'EMEF Paul Harris',
                'telefone' => '5135897811',
                'projetos' => 4,
                'user_id' => 53,
                'created_at' => '2018-08-01 11:20:47',
                'updated_at' => '2018-08-01 11:20:47',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'EMEF Tancredo Neves',
                'telefone' => '5122000880',
                'projetos' => 3,
                'user_id' => 54,
                'created_at' => '2018-08-01 11:27:39',
                'updated_at' => '2018-08-01 11:27:39',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'EMEF Henrique Coelho Neto',
                'telefone' => '5135897833',
                'projetos' => 3,
                'user_id' => 55,
                'created_at' => '2018-08-01 11:36:07',
                'updated_at' => '2018-08-01 11:36:07',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'EMEF Zaira Hauschild',
                'telefone' => '5135886559',
                'projetos' => 4,
                'user_id' => 56,
                'created_at' => '2018-08-01 11:40:57',
                'updated_at' => '2018-08-01 11:40:57',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'EMEF Rui Barbosa',
                'telefone' => '5135906230',
                'projetos' => 3,
                'user_id' => 57,
                'created_at' => '2018-08-01 11:45:13',
                'updated_at' => '2018-08-01 11:45:13',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'EMEF Senador Salgado Filho',
                'telefone' => '5122000855',
                'projetos' => 4,
                'user_id' => 58,
                'created_at' => '2018-08-01 11:48:41',
                'updated_at' => '2018-08-01 11:48:41',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'EMEF Irmão Weibert',
                'telefone' => '5135923468',
                'projetos' => 2,
                'user_id' => 59,
                'created_at' => '2018-08-01 11:52:34',
                'updated_at' => '2018-08-01 11:52:34',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'EMEF Barão do Rio Branco',
                'telefone' => '5135542976',
                'projetos' => 4,
                'user_id' => 61,
                'created_at' => '2018-08-03 08:50:47',
                'updated_at' => '2018-08-03 08:50:47',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'EMEF Clodomir Vianna Moog',
                'telefone' => '5135661018',
                'projetos' => 4,
                'user_id' => 62,
                'created_at' => '2018-08-03 08:55:44',
                'updated_at' => '2018-08-03 08:55:44',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'EMEF Dr Borges de Medeiros',
                'telefone' => '5122000881',
                'projetos' => 3,
                'user_id' => 63,
                'created_at' => '2018-08-03 09:01:44',
                'updated_at' => '2018-08-03 09:01:44',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'EMEF Dr Jorge Germano Sperb',
                'telefone' => '51993620531',
                'projetos' => 4,
                'user_id' => 64,
                'created_at' => '2018-08-03 09:06:34',
                'updated_at' => '2018-08-03 09:06:34',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'EMEF Dr Osvaldo Aranha',
                'telefone' => '5135752417',
                'projetos' => 3,
                'user_id' => 65,
                'created_at' => '2018-08-03 09:12:51',
                'updated_at' => '2018-08-03 09:12:51',
            ),
            29 => 
            array (
                'id' => 32,
                'name' => 'EMEF Dr Paulo da Silva Couto',
                'telefone' => '5135684535',
                'projetos' => 4,
                'user_id' => 66,
                'created_at' => '2018-08-03 09:18:29',
                'updated_at' => '2018-08-03 09:18:29',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'EMEF Franz Louis Weinmann',
                'telefone' => '5135884412',
                'projetos' => 3,
                'user_id' => 67,
                'created_at' => '2018-08-03 09:25:30',
                'updated_at' => '2018-08-03 09:25:30',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => 'EMEF Francisco Cândido Xavier',
                'telefone' => '51993267456',
                'projetos' => 4,
                'user_id' => 68,
                'created_at' => '2018-08-03 09:37:42',
                'updated_at' => '2018-08-03 09:37:42',
            ),
            32 => 
            array (
                'id' => 35,
                'name' => 'EMEF General Mário Fonseca',
                'telefone' => '5135685105',
                'projetos' => 3,
                'user_id' => 69,
                'created_at' => '2018-08-03 10:28:13',
                'updated_at' => '2018-08-03 10:28:13',
            ),
            33 => 
            array (
                'id' => 36,
                'name' => 'EMEF João Belchior Marques Goulart',
                'telefone' => '5135684050',
                'projetos' => 5,
                'user_id' => 70,
                'created_at' => '2018-08-03 10:33:21',
                'updated_at' => '2018-08-03 10:33:21',
            ),
            34 => 
            array (
                'id' => 37,
                'name' => 'EMEF Maria Emília de Paula',
                'telefone' => '5135684954',
                'projetos' => 4,
                'user_id' => 71,
                'created_at' => '2018-08-03 10:37:33',
                'updated_at' => '2018-08-03 10:37:33',
            ),
            35 => 
            array (
                'id' => 38,
                'name' => 'EMEF Olímpio Vianna Albrecht',
                'telefone' => '5135754592',
                'projetos' => 5,
                'user_id' => 72,
                'created_at' => '2018-08-03 10:58:37',
                'updated_at' => '2018-08-03 10:58:37',
            ),
        ));
        
        
    }
}