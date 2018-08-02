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
                'name' => 'Departamento de Desenvolvimento de Sistemas',
                'username' => 'administrador',
                'email' => 'programacao@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$AbbFS37xzVFofWA8nq3K5u0z/KYRRPLZheFm3vWcqn7KaLAmXPRl.',
                'tipoUser' => 'admin',
                'remember_token' => 'Soexw4uQ74a5LRq1SrB73ZPjXtoC8xwr9PQVGgC2w8fHkQzVm1sbj9Pq64xe',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-08-02 11:01:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rodrigo',
                'username' => 'rodrigo',
                'email' => 'rodrigo@hotmail.com',
                'password' => '$2y$10$JbxCLOFF97QCoNbWbQjUsOTEwFO0xnp6mh4/JwC5DcG5gX3NiUQrm',
                'tipoUser' => 'admin',
                'remember_token' => 'ql5mWHdlhqXZojGtUbXb7RAHcTpshPrjf3EUCqzir72QomjjkE1f17eT0Uoy',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Daiany',
                'username' => 'daiany',
                'email' => 'daiany@hotmail.com',
                'password' => '$2y$10$lo7WANx9LxitYDc0cHZ3kuPJ8ipXT//.UcOAPU2.sJJd2uuwHA/v6',
                'tipoUser' => 'admin',
                'remember_token' => '2jOMTPI4pO6dffFq3uj4onc79xBrErz1MpYwqSLeScWTSsHHdjrkMqomnrp4',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lisiani',
                'username' => 'lisiani',
                'email' => 'lisiani@hotmail.com',
                'password' => '$2y$10$iqHDL9COlwiGwrPHPSdC6OwZiFu1Y1FrhHCnPoYvnAmNzqrfcIQ8u',
                'tipoUser' => 'admin',
                'remember_token' => 'ZKcKubBZquLSTX2tLFpNVcTtssY4A9KNDXR3H2P2gQXzmREDck4AFC4RzkmY',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-08-01 10:00:22',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Carla',
                'username' => 'carla',
                'email' => 'carla@hotmail.com',
                'password' => '$2y$10$P9h/IJEEdxvNn.oMJlhG8u3ykJvFNOkXrBWsQ/OLNdQo2NAo4wgBq',
                'tipoUser' => 'admin',
                'remember_token' => '5v27J3PmMrMXiMPWQJ7iBClMttGqifNmuYYUbkC1gPOJailpWAU7uJKGcJi9',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Neca',
                'username' => 'neca',
                'email' => 'neca@hotmail.com',
                'password' => '$2y$10$P9h/IJEEdxvNn.oMJlhG8u3ykJvFNOkXrBWsQ/OLNdQo2NAo4wgBq',
                'tipoUser' => 'admin',
                'remember_token' => '5v27J3PmMrMXiMPWQJ7iBClMttGqifNmuYYUbkC1gPOJailpWAU7uJKGcJi9',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Lenita',
                'username' => 'lenita',
                'email' => 'lenita@hotmail.com',
                'password' => '$2y$10$P9h/IJEEdxvNn.oMJlhG8u3ykJvFNOkXrBWsQ/OLNdQo2NAo4wgBq',
                'tipoUser' => 'admin',
                'remember_token' => '5v27J3PmMrMXiMPWQJ7iBClMttGqifNmuYYUbkC1gPOJailpWAU7uJKGcJi9',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ederson',
                'username' => 'ederson',
                'email' => 'ederson@hotmail.com',
                'password' => '$2y$10$P9h/IJEEdxvNn.oMJlhG8u3ykJvFNOkXrBWsQ/OLNdQo2NAo4wgBq',
                'tipoUser' => 'admin',
                'remember_token' => '5v27J3PmMrMXiMPWQJ7iBClMttGqifNmuYYUbkC1gPOJailpWAU7uJKGcJi9',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
            ),
            8 => 
            array (
                'id' => 36,
                'name' => 'EMEI Sonho Nosso',
                'username' => 'sonhonosso',
                'email' => 'sonhonosso.emei@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$o9jfWTzQcSgk34d9/LclS.qdsEO0wfjazjdsUewyirfSJlH9cLMAm',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-31 15:30:28',
                'updated_at' => '2018-07-31 15:30:28',
            ),
            9 => 
            array (
                'id' => 37,
                'name' => 'EMEI Antônio Leite',
                'username' => 'antonioleite',
                'email' => 'antonioleite.emei@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$npUEIGGS3e96/E3833QOJ.haXKp/gyYXt./hEXFlUiSXtJjZl0NQe',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-31 15:36:30',
                'updated_at' => '2018-07-31 15:36:30',
            ),
            10 => 
            array (
                'id' => 38,
                'name' => 'EMEI Brinco de Princesa',
                'username' => 'brincodeprincesa',
                'email' => 'brincodeprincesa.emei@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$wkfpd5ggA6sUh2svZrCXbOJAu.hDKO.6HmAZbQBma3b8m6FYHaPEG',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-31 15:42:59',
                'updated_at' => '2018-07-31 15:42:59',
            ),
            11 => 
            array (
                'id' => 39,
                'name' => 'EMEI Girassol',
                'username' => 'girassol',
                'email' => 'girassol.emei@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$kVboywW6XVuD8wOmM13KQuRFkM4/Vi2aI7dE0LeXRBNrHcIqm22cG',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-31 15:48:10',
                'updated_at' => '2018-07-31 15:48:10',
            ),
            12 => 
            array (
                'id' => 40,
                'name' => 'EMEI Vitória Régia',
                'username' => 'vitoriaregia',
                'email' => 'vitoriaregia.emei@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$KS1M6M.HhpVyQhRdwg359uzthK4d7ESyXBWvoIeemeqkAzI8NMJ.a',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-31 15:53:03',
                'updated_at' => '2018-07-31 15:53:03',
            ),
            13 => 
            array (
                'id' => 41,
                'name' => 'EMEI Jardim Verde',
                'username' => 'jardimverde',
                'email' => 'jardimverde.emei@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$yybhd5ym1yGm.ziMYHZhk.gdGrh1402yUCHMsLlVnqI/7roWnMmDS',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-31 15:57:41',
                'updated_at' => '2018-07-31 15:57:41',
            ),
            14 => 
            array (
                'id' => 42,
                'name' => 'EMEF Prof João Hohendor',
                'username' => 'hohendorff',
                'email' => 'hohendorffj@yahoo.com.br',
                'password' => '$2y$10$MQMKrYp7Ow4BbTXpCEQhMeEnEKdjxPvLr3cbO9IaydIoxcrLSbeDa',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 09:35:12',
                'updated_at' => '2018-08-01 09:35:12',
            ),
            15 => 
            array (
                'id' => 43,
                'name' => 'EMEF Prof Álvaro Luis Nunes',
                'username' => 'alvaronunes',
                'email' => 'alvaronunes.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$mb8dMZPfcHVyWeIqS0MjLObPHwOwsvexP29ICdfj75rx1BcJm5PB.',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 09:49:41',
                'updated_at' => '2018-08-01 09:49:41',
            ),
            16 => 
            array (
                'id' => 44,
                'name' => 'EMEF Santa Marta',
                'username' => 'santamarta',
                'email' => 'santamarta.emef@saolepoldo.rs.gov.br',
                'password' => '$2y$10$0syvpPGzMJEkRIragips3OBVxj2JEpfwe6Pdg9jSFt0a7.zBhu/Hi',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 10:00:35',
                'updated_at' => '2018-08-01 10:00:35',
            ),
            17 => 
            array (
                'id' => 45,
                'name' => 'EMEF Prof Dilza F Albrecht',
                'username' => 'dilza',
                'email' => 'escoladilzaflores@gmail.com',
                'password' => '$2y$10$7J9iJZ2jTktzynFz2IhOf.rFSUJVANOYxrfoKTcT2HHjyNjjEM6gO',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 10:12:41',
                'updated_at' => '2018-08-01 10:12:41',
            ),
            18 => 
            array (
                'id' => 46,
                'name' => 'EMEF Castro Alves',
                'username' => 'castroalves',
                'email' => 'castroalves.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$DfRWJI/j8mneVnKYLInvh.soyfFcm0Zp2LmmVWJKgk.O7LTFBsGum',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 10:20:31',
                'updated_at' => '2018-08-01 10:20:31',
            ),
            19 => 
            array (
                'id' => 47,
                'name' => 'EMEF Bento Gonçalves',
                'username' => 'bentogoncalves',
                'email' => 'bentogoncalves.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$3NZ9OfLMrIosjFNgG4Uzve2kV0Ni89Oi1kNW6bU6ZseG97XaksbMi',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 10:37:24',
                'updated_at' => '2018-08-01 10:37:24',
            ),
            20 => 
            array (
                'id' => 48,
                'name' => 'EMA Pequeno Príncipe',
                'username' => 'pequenoprincipe',
                'email' => 'escoladeartespequenoprincipe@gmail.com',
                'password' => '$2y$10$U.udSrQmdL3ltw0coNpFY.n/jGJPHBp9O9yt82TgNuYDuDNS2Ps06',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 10:43:13',
                'updated_at' => '2018-08-01 10:43:13',
            ),
            21 => 
            array (
                'id' => 49,
                'name' => 'EMEF Maria Edila da S Schmidt',
                'username' => 'mariaedila',
                'email' => 'mariaedila.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$nKO.l1Hl9hCgAIqo3Q4mPuIHaMgRyNAKTZZXehB5dO8FmgTZgzAMG',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 10:48:34',
                'updated_at' => '2018-08-01 10:48:34',
            ),
            22 => 
            array (
                'id' => 50,
                'name' => 'EMEF Paulo Beck',
                'username' => 'paulobeck',
                'email' => 'escolapaulobeck@gmail.com',
                'password' => '$2y$10$wIo8cRCygskeTaWpHW0glubC.HVBw.eLQeYTeHQyVre5f8kjJ9j0O',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:06:35',
                'updated_at' => '2018-08-01 11:06:35',
            ),
            23 => 
            array (
                'id' => 51,
                'name' => 'EMEF Arthur Ostermann',
                'username' => 'arthur',
                'email' => 'arthurostermann.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$VxIWyACFzaQ0Lau2yI70E.yoMN4vXZC11DHG.dpsWi8fHBhdG1i3u',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:11:27',
                'updated_at' => '2018-08-01 11:11:27',
            ),
            24 => 
            array (
                'id' => 52,
                'name' => 'EMEF Edgard Coelho',
                'username' => 'edgardcoelho',
                'email' => 'edgardcoelho.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$G29Sm.jnSARlkr.DUYhL8.r8xpAXpz/qTkoT5AJcVm.vWJJHDlGdC',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:16:11',
                'updated_at' => '2018-08-01 11:29:14',
            ),
            25 => 
            array (
                'id' => 53,
                'name' => 'EMEF Paul Harris',
                'username' => 'paulharris',
                'email' => 'empaulharris@yahoo.com.br',
                'password' => '$2y$10$TWESqcUwB7RcACsJG3omN.79drZ69EGd0iT1JZ7F8U/2Yj2uvpfkC',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:20:47',
                'updated_at' => '2018-08-01 11:20:47',
            ),
            26 => 
            array (
                'id' => 54,
                'name' => 'EMEF Tancredo Neves',
                'username' => 'tancredoneves',
                'email' => 'em.tancredo.neves@gmail.com',
                'password' => '$2y$10$DVnmSWnbi59sP/BwplNt0OAvpioJg27B94QDksceatGrgdOTzqp3S',
                'tipoUser' => 'escola',
                'remember_token' => 'K8RZqwc9GxuXwMzgaXANyMqJPdL6qn9TZVSme3EzJx7FZHFhZlkiQ9yUYAu6',
                'created_at' => '2018-08-01 11:27:39',
                'updated_at' => '2018-08-01 11:27:39',
            ),
            27 => 
            array (
                'id' => 55,
                'name' => 'EMEF Henrique Coelho Neto',
                'username' => 'coelhoneto',
                'email' => 'coelhoneto.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$fHk1CxbLhH5Oio0T7HG2C.xTyXjgora7bMhJj8tNU8nQuQRY6uq12',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:36:07',
                'updated_at' => '2018-08-01 11:36:07',
            ),
            28 => 
            array (
                'id' => 56,
                'name' => 'EMEF Zaira Hauschild',
                'username' => 'zaira',
                'email' => 'zairahauschild@hotmail.com',
                'password' => '$2y$10$ch7YiVudWw5P6dk47wsgKOJHYItGIMNSzX7o/uvy9ydL7V.Sctb3m',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:40:57',
                'updated_at' => '2018-08-01 11:40:57',
            ),
            29 => 
            array (
                'id' => 57,
                'name' => 'EMEF Rui Barbosa',
                'username' => 'ruibarbosa',
                'email' => 'ruibarbosa.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$Y46Yv1KiQVyoPp2yoRX9ZOksOHiSfWYsW9TTB6ipYwFfKn1Lzvb4O',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:45:13',
                'updated_at' => '2018-08-01 11:45:13',
            ),
            30 => 
            array (
                'id' => 58,
                'name' => 'EMEF Senador Salgado Filho',
                'username' => 'salgadofilho',
                'email' => 'salgadofilho.emef@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$RAdCkGW6d4eRlltYbNG3p.g5U47up/6zZ72XXgp7mzeNJWQQra1zW',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:48:41',
                'updated_at' => '2018-08-01 11:48:41',
            ),
            31 => 
            array (
                'id' => 59,
                'name' => 'EMEF Irmão Weibert',
                'username' => 'irmaoweibert',
                'email' => 'irmaoweibert@gmail.com',
                'password' => '$2y$10$VcZnhMWFV/fy2CpKyLKfXeSmuAxA/HSdJlVEgv3S7sAAglQo9g59K',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-08-01 11:52:34',
                'updated_at' => '2018-08-01 11:52:34',
            ),
        ));
        
        
    }
}