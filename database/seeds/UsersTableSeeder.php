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
        ));
        
        
    }
}