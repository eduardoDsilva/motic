<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Eduardo da Silva',
                'username' => 'eduardo',
                'email' => 'eduardo.2599@hotmail.com',
                'password' => '$2y$10$Wya2R/xSTT4rllR7sMM8guXoL4DZJcdegDsRSNnr7CR8hVpKN5gHe',
                'tipoUser' => 'admin',
                'remember_token' => 'NPNMtmAmOwa73UpA9So3Xy1Ts0Zqs41DzQjUZ42lNKkVeoUXXIcc7oOtp3d5',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Lucas',
                'username' => 'lucas',
                'email' => 'lucas@hotmail.com',
                'password' => '$2y$10$JbxCLOFF97QCoNbWbQjUsOTEwFO0xnp6mh4/JwC5DcG5gX3NiUQrm',
                'tipoUser' => 'admin',
                'remember_token' => 'ql5mWHdlhqXZojGtUbXb7RAHcTpshPrjf3EUCqzir72QomjjkE1f17eT0Uoy',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Douglas',
                'username' => 'douglas',
                'email' => 'douglas@hotmail.com',
                'password' => '$2y$10$lo7WANx9LxitYDc0cHZ3kuPJ8ipXT//.UcOAPU2.sJJd2uuwHA/v6',
                'tipoUser' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lisiani',
                'username' => 'lisiani',
                'email' => 'lisiani@hotmail.com',
                'password' => '$2y$10$P9h/IJEEdxvNn.oMJlhG8u3ykJvFNOkXrBWsQ/OLNdQo2NAo4wgBq',
                'tipoUser' => 'admin',
                'remember_token' => '5v27J3PmMrMXiMPWQJ7iBClMttGqifNmuYYUbkC1gPOJailpWAU7uJKGcJi9',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'EMEF Rui Barbosa',
                'username' => 'ruibarbosa',
                'email' => 'ruibarbosa@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$kTy32sf2DiL2IpQw0s6z1ukLWUg/LVvp.JCGQ0aSQF2.WjpgusMx2',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-25 13:47:28',
                'updated_at' => '2018-06-27 11:52:47',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'EMEF Barão do Rio Branco',
                'username' => 'baraodoriobranco',
                'email' => 'baraodoriobranco@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$kFi/qWasJ83120gxwS9qYOVUSsCIyPOTA8bppCuwFEzZpferiDeRq',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 11:54:01',
                'updated_at' => '2018-06-28 11:36:52',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'EMEF Bento Gonçalves',
                'username' => 'bentogoncalves',
                'email' => 'bentogoncalves@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$sMTDXd37tUhwafPypET4q.oSvuhjEDB3JfYY2heAS2rz5Xj6IkNnG',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 11:55:05',
                'updated_at' => '2018-06-27 11:55:05',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'EMEF Maria Emília de Paula',
                'username' => 'mariaemiliadepaula',
                'email' => 'mariaemiliadepaula@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$hOWdyzF2qUf6Y5o0oQdWseAbYb0k3BP4FKiK08BIUtT/zOZO8i2kG',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 11:56:08',
                'updated_at' => '2018-06-27 11:56:08',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'EMEF Borges de Medeiros',
                'username' => 'borgesdemedeiros',
                'email' => 'borgesdemedeiros@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$avRWlZ7bjTZtDavDr6kmqOTcRCMA88t52cAQO9si.M/gC1gTrua3y',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 11:57:04',
                'updated_at' => '2018-06-27 11:57:04',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'EMEF Castro Alves',
                'username' => 'castroalves',
                'email' => 'castroalves@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$cBZnyFGJVKiFvQlgtUtrtOUhmGjosfYKeXB61Ax/YgC8c64F9dNBG',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 11:58:01',
                'updated_at' => '2018-06-27 11:58:01',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'EMEF Henrique Maximiliano Coelho Neto',
                'username' => 'henriquemaximilianocoelhoneto',
                'email' => 'henriquemaximilianocoelhoneto@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$T8CDtDo/NvSU/nqB9lEjQ.qaUUyswzcxRuikNTip0fUt9YALeGuou',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 11:59:02',
                'updated_at' => '2018-06-27 11:59:02',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'EMEF Emílio Meyer',
                'username' => 'emiliomeyer',
                'email' => 'emiliomeyer@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$bVa9Vx6u8p4E1jdqYJD0D.HBbKf3sprb7Df7FR/WqoTUW45eOVHzW',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:02:49',
                'updated_at' => '2018-06-27 12:02:49',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'EMEF Franz Louis Weinmann',
                'username' => 'franzlouisweinmann',
                'email' => 'franzlouisweinmann@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$eD8qCENHY8aD.736Q1eUe.SZvWagCftkYVx9i0TVK47iVjIItkwMC',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:03:43',
                'updated_at' => '2018-06-27 12:03:43',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'EMEF Professor José Grimberg',
                'username' => 'professorjosegrimberg',
                'email' => 'professorjosegrimberg@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$yWmk2ji2g83s2b.Y/kPGnO/WH5L0qOU6j2GespkIXgisctehLYg8e',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:05:29',
                'updated_at' => '2018-06-27 12:05:29',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'EMEF Osvaldo Aranha',
                'username' => 'osvaldoaranha',
                'email' => 'osvaldoaranha@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$uU6kOTYlVKnnamVJQEPgIutxvqTYQW3CNp52AEbdId6UiIygA0PPi',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:07:07',
                'updated_at' => '2018-06-27 12:07:07',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => 'EMEF Otíia Carvalho Rieth',
                'username' => 'otiliacarvalhorieth',
                'email' => 'otiliacarvalhorieth@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$1K88yK522P.RiG2TjjCUPe0mrl7VgJewDcXFeKOahFhycB1P3Iyy6',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:08:38',
                'updated_at' => '2018-06-27 12:08:38',
            ),
            16 => 
            array (
                'id' => 20,
                'name' => 'EMEF Paul Harris',
                'username' => 'paulharris',
                'email' => 'paulharris@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$hrqx7vb2QlVmNhwPLr9knObdiTmz1RywH0gp1lqB617EcvGPm6z8.',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:40:02',
                'updated_at' => '2018-06-27 12:40:02',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'Eduardo da Silva',
                'username' => 'eduardoprofessor',
                'email' => 'eduardo@hotmail.com',
                'password' => '$2y$10$fAyfPw.2FmVkyHU3P7e7e.hEimosYBhS.JUzTcPCOEpmTZ1J2WT2e',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-06-27 12:49:38',
                'updated_at' => '2018-06-27 12:49:38',
            ),
            18 => 
            array (
                'id' => 22,
                'name' => 'José dos Santos',
                'username' => 'joseprofessor',
                'email' => 'jose@hotmail.com',
                'password' => '$2y$10$H.PZzCQD0wiAFwRetBBQ4utYIg2Xg.iZHSOtOg/lJN9wlG/AzKeFy',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-06-28 08:26:36',
                'updated_at' => '2018-06-28 08:26:36',
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'Daniel Sampaio',
                'username' => 'danielprofessor',
                'email' => 'daniel@hotmail.com',
                'password' => '$2y$10$8cfT1N5euSzd6wU9w5otsO44TOFeVUkDZO0SHDThSAMiuvujswkoi',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-06-28 12:43:30',
                'updated_at' => '2018-06-28 12:43:30',
            ),
            20 => 
            array (
                'id' => 26,
                'name' => 'Fernando Elias Brandalise',
                'username' => 'fernandoprofessor',
                'email' => 'fernando@hotmail.com',
                'password' => '$2y$10$DmB9vJiwwST.ICrvd1OpTOmwG5c0XQd/SRM020aaIjnfR7kNjf69q',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-06-28 12:45:17',
                'updated_at' => '2018-06-28 12:45:17',
            ),
            21 => 
            array (
                'id' => 27,
                'name' => 'Douglas Farias',
                'username' => 'douglasfariasprofessor',
                'email' => 'douglass@hotmail.com',
                'password' => '$2y$10$WJxGdmSGZH1iy85hdV7eIeyN2/WgVujWpO57h0KaGdfx5HEIVrbsy',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-06-28 12:48:05',
                'updated_at' => '2018-06-28 12:48:05',
            ),
        ));
        
        
    }
}