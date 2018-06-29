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
                'password' => '$2y$10$SkcFddtstSRaaXowj4QTWegExb.bEOnx.ZBkpVRSMMhqfa5jPSqfe',
                'tipoUser' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Lucas',
                'username' => 'lucas',
                'email' => 'lucas@hotmail.com',
                'password' => '$2y$10$L5QGPesWsoOJsUF.6gAWK.fcO9wtcZFb9U5OFew.wWOy1133D/GlC',
                'tipoUser' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Douglas',
                'username' => 'douglas',
                'email' => 'douglas@hotmail.com',
                'password' => '$2y$10$09z7ZP/fBHTIj5eduAmFfO16NRABT2uov2IYr4utaVGhvciWzinwm',
                'tipoUser' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lisiani',
                'username' => 'lisiani',
                'email' => 'lisiani@hotmail.com',
                'password' => '$2y$10$bONtOMxIZMQqwZ2s5polLOjmpFuM5y9ydBcgR3WrYKBTcZA89DF/a',
                'tipoUser' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 09:41:38',
                'updated_at' => '2018-06-29 09:41:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'EMEF Barão do Rio Branco',
                'username' => 'baraodoriobranco',
                'email' => 'baraodoriobranco@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$/zbjayNQRQqKvi6urGii2.kWkU62bTUppu/sxBeJBnw5dtA49eB7G',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:06:49',
                'updated_at' => '2018-06-29 10:06:49',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'EMEF Bento Gonçalves',
                'username' => 'bentogoncalves',
                'email' => 'bentogoncalves@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$jeHBVy2d/vwoMknzo7YxCurMAAHsCCf/Aa86HpCMn3lwqjCphRcOy',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:07:33',
                'updated_at' => '2018-06-29 10:07:33',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'EMEF Maria Emilia de Paula',
                'username' => 'mariaemiliadepaula',
                'email' => 'mariaemiliadepaula@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$niESNdrcAEmcAfEk8hEgf.iWcuMW0cQWthum5xDipmEnOxXQDm07q',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:08:36',
                'updated_at' => '2018-06-29 10:08:36',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'EMEF Borges de Medeiros',
                'username' => 'borgesdemedeiros',
                'email' => 'borgesdemedeiros@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$MpHJZV.W7.YD5mKQVG2ZkuVYVWdV/45d4WdSP3p//zoIONjnqXu/6',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:09:20',
                'updated_at' => '2018-06-29 10:09:20',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'EMEF Castro Alves',
                'username' => 'castroalves',
                'email' => 'castroalves@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$wEgCI49j6qB.hy6W7t8p6esITF9wUUVOZPqDy6oP.uHrTcaR9h/TK',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:09:52',
                'updated_at' => '2018-06-29 10:09:52',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'EMEF Henrique Maximiliano Coelho Neto',
                'username' => 'henriquemaximilianocoelho',
                'email' => 'henriquemaximilianocoelhoneto@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$Guk/q.8U80YwgPvXfXadHuXu/8U4LrkkToaWiIcfd8Oha3LrbTu5a',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:10:58',
                'updated_at' => '2018-06-29 10:10:58',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'EMEF Emílio Meyer',
                'username' => 'emiliomeyer',
                'email' => 'emiliomeyer@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$uo03jBiOfPhePnDbmCd2BOvNnjOUswcog89EYJcgoRsk2sru7dAQu',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:11:40',
                'updated_at' => '2018-06-29 10:11:40',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'EMEF Franz Louis Weinmann',
                'username' => 'franzlouisweinmann',
                'email' => 'franzlouisweinmann@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$O16MlorXW6vX6sURGVP66.BDq7rFd6HwCXJVBnMjCugut0qerdH5W',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:12:27',
                'updated_at' => '2018-06-29 10:12:27',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'EMEF Irmão Weibert',
                'username' => 'irmaoweibert',
                'email' => 'irmaoweibert@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$FTU7uW9jWA1Hb83tftbS2uT9URRta0AZfXTQFhVl/XbhR.HYBojjy',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:13:16',
                'updated_at' => '2018-06-29 10:13:16',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'EMEF Professor José Grimberg',
                'username' => 'professorjosegrimberg',
                'email' => 'professorjosegrimberg@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$1Q1FObGytpdwUeYzSkJ2AO5NPe709DpxcP0vBa2vHUVVbRAwlOI9.',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:14:07',
                'updated_at' => '2018-06-29 10:14:07',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'EMEF Professora Maria Gusmão Britto',
                'username' => 'professoramariagusmaobritto',
                'email' => 'professoramariagusmaobritto@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$WtKW3UQOqig11.nsKNXrAeLAU4GRYxzrTMhmDy5/xuASw2ecIzYHO',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:15:23',
                'updated_at' => '2018-06-29 10:15:23',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'EMEF Osvaldo Aranha',
                'username' => 'osvaldoaranha',
                'email' => 'osvaldoaranha@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$3VfukK5.2xHYzjupl4mtDe8Eu8hsLCN/cWgp1.KiFbDHfdt5cIsI6',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:16:14',
                'updated_at' => '2018-06-29 10:16:14',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'EMEF Otíia Carvalho Rieth',
                'username' => 'otiliacarvalhorieth',
                'email' => 'otiliacarvalhorieth@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$eQOPQQ2ouu3L/1x7pZGXPuNf92EwmRLiTJne8xVpOpbvfEAxsCwZC',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:17:11',
                'updated_at' => '2018-06-29 10:17:11',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Chrstian Silveira',
                'username' => 'christiansilveira',
                'email' => 'christian@hotmail.com',
                'password' => '$2y$10$d2zt52ULCvRouIvdATijtOziQaunQ2nf9ljZk7YBnAP6rVdOER2Oa',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:22:24',
                'updated_at' => '2018-06-29 10:22:24',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Patrick Fernando Vianna',
                'username' => 'patrickavaliador',
                'email' => 'patrickfernandovianna@hotmail.com',
                'password' => '$2y$10$lVUlTFWvTr0IumS19NzPqOQM1Db0xjckuDAk8Zcji5m1hqHPdlnEa',
                'tipoUser' => 'avaliador',
                'remember_token' => NULL,
                'created_at' => '2018-06-29 10:34:34',
                'updated_at' => '2018-06-29 10:34:34',
            ),
        ));
        
        
    }
}