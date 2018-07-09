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
                'remember_token' => 'chIxPCLMqMKIkxtVUT9eN2bznZSVQ5CLN46mPFOyol8nxeypMq50LhDbgM5j',
                'created_at' => '2018-06-25 13:33:30',
                'updated_at' => '2018-06-25 13:33:30',
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
                'id' => 12,
                'name' => 'EMEF Barão do Rio Branco',
                'username' => 'baraodoriobranco',
                'email' => 'baraodoriobranco@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$4Wl2sTdLpDJ1BqIcRIXtTe8t9qgTEVa2LyS/IcsychFqS55UNLlIa',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:19:00',
                'updated_at' => '2018-07-09 10:19:00',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'EMEF Bento Gonçalves',
                'username' => 'bentogoncalves',
                'email' => 'bentogoncalves@saoleopoldo.gov.br',
                'password' => '$2y$10$li9p/X16.OCArdjq4hqExO/MwSZpYVXXBVITfhtg4c7.o5Q7huH3C',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:20:13',
                'updated_at' => '2018-07-09 10:20:13',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'EMEF Maria Emília de Paula',
                'username' => 'mariaemilia',
                'email' => 'mariaemiliadepaula@saoleopoldo.gov.br',
                'password' => '$2y$10$1qDP.l97gWXTOQ0kuACEVe/zWW2r4QFWiylR8TRfDkR3MNFmioYeu',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:20:49',
                'updated_at' => '2018-07-09 13:17:31',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'EMEF Borges de Medeiros',
                'username' => 'borgesdemedeiros',
                'email' => 'borgesdemedeiros@saoleopoldo.gov.br',
                'password' => '$2y$10$WDE4G0QankXJXe6BvBxrz..WAdDqW9gUp6DnILfkjBR.m23Ub.Fx.',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:29:32',
                'updated_at' => '2018-07-09 10:29:32',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'EMEF Castro Alves',
                'username' => 'castroalves',
                'email' => 'castroalves@saoleopoldo.gov.br',
                'password' => '$2y$10$gC3HgQBDF10oq7aHTNL/Ie9wjLyfsYKq18XV6Fkmnw4LRtlsun84C',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:30:31',
                'updated_at' => '2018-07-09 13:17:15',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'EMEF Henrique Maximiliano Coelho Neto',
                'username' => 'henriquemaximilianocoelhoneto',
                'email' => 'henriquemaximilianocoelhoneto@saoleopoldo.gov.br',
                'password' => '$2y$10$sGpfqhCC/b/TirL8ZcpKxu/vQCBLzHPcjLYUIkgra1WGd1QQZSgkW',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:31:19',
                'updated_at' => '2018-07-09 10:31:19',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'EMEF Emílio Meyer',
                'username' => 'emiliomeyer',
                'email' => 'emiliomeyer@saoleopoldo.gov.br',
                'password' => '$2y$10$PVy8T3ywk32W.HgWELKLEe4Gd6oqAG4wOtWOYI1yp1vsDRPAgO/z.',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:31:57',
                'updated_at' => '2018-07-09 10:31:57',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => 'EMEF Franz Louis Weinmann',
                'username' => 'franzlouisweinmann',
                'email' => 'franzlouismeyer@saoleopoldo.gov.br',
                'password' => '$2y$10$armbXDJUQx4e/G92ETdBJuSoRud2QeWezcG1ym7OBtfsPKaia76US',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:33:26',
                'updated_at' => '2018-07-09 10:33:26',
            ),
            16 => 
            array (
                'id' => 20,
                'name' => 'EMEF Irmão Weibert',
                'username' => 'irmaoweibert',
                'email' => 'irmaoweibert@saoleopoldo.gov.br',
                'password' => '$2y$10$viz/t4YWxH2E0UfNAi.haOqJFAPLhLDe0/jZa7XH487ywFSG/GWj.',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:34:24',
                'updated_at' => '2018-07-09 10:34:24',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'EMEF Professor José Grimberg',
                'username' => 'professorjosegrimberg',
                'email' => 'professorjosegrimberg@saoleopoldo.gov.br',
                'password' => '$2y$10$nqwC0epcVyg3uH2T1w1wHuR5qX2TVHYTZ1BCFz2DRUQF.eHIr/ilq',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:35:25',
                'updated_at' => '2018-07-09 10:35:25',
            ),
            18 => 
            array (
                'id' => 22,
                'name' => 'EMEF Doutor Olimpio Vianna Albrecht',
                'username' => 'doutorolimpio',
                'email' => 'doutorolimpioviannaalbretch@saoleopoldo.gov.br',
                'password' => '$2y$10$4BjDGAdmxqOc8GI61iWVm.p9gE5.mtFTv3kM9UFvHmnbo43P4ekiy',
                'tipoUser' => 'escola',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 10:36:55',
                'updated_at' => '2018-07-09 10:36:55',
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'Flávio Fernando de Souza',
                'username' => 'flaviofernando',
                'email' => 'flaviofernando@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$1dKwHIOqCPY0tKzAs3CDHe/3/jIwAv4pOOhz0mIKYuF.k8hsHsne.',
                'tipoUser' => 'avaliador',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 11:28:11',
                'updated_at' => '2018-07-09 11:28:11',
            ),
            20 => 
            array (
                'id' => 26,
                'name' => 'José Soares',
                'username' => 'josesoares',
                'email' => 'josesoares@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$jk9mF/CYhAur85hVNDHQ4..VBTx8zXR3K6B5Z6tE3XbZKxKuSwlyy',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 11:29:45',
                'updated_at' => '2018-07-09 11:29:45',
            ),
            21 => 
            array (
                'id' => 27,
                'name' => 'Doglas da Silva',
                'username' => 'doglas',
                'email' => 'doglas@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$P3zn/tyig88fMoPE.1QG8enXOcfZ4rbR9cZhn6HNz8rTMyHLHEUGu',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 11:45:58',
                'updated_at' => '2018-07-09 11:45:58',
            ),
            22 => 
            array (
                'id' => 28,
                'name' => 'Maurício dos Santos',
                'username' => 'mauricio',
                'email' => 'mauricio@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$ScHCUxI4kaIEh5mlWcLtaejPCAtAeNfabBjKGhaMfql3rzVinIqjy',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 11:47:23',
                'updated_at' => '2018-07-09 11:47:23',
            ),
            23 => 
            array (
                'id' => 29,
                'name' => 'Gabriela Trevisan',
                'username' => 'trevisan',
                'email' => 'borgesdemedeiros@saoleopoldo.rs.gov.br',
                'password' => '$2y$10$8tiKlC0ekkkKTkrXna3OP.wC5/hHLG1k3sSAGagk7lIO0HXWVClrm',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 11:48:25',
                'updated_at' => '2018-07-09 11:48:25',
            ),
            24 => 
            array (
                'id' => 30,
                'name' => 'Cláudia Pereira',
                'username' => 'claudia',
                'email' => 'claudia@hotmail.com',
                'password' => '$2y$10$agN2sYh.SfFvcSyLbl.iauyOPNYqC6nyxWFKY5CLlHDaPs/qUuPAq',
                'tipoUser' => 'professor',
                'remember_token' => NULL,
                'created_at' => '2018-07-09 11:49:31',
                'updated_at' => '2018-07-09 11:49:31',
            ),
        ));
        
        
    }
}