<?php

use Illuminate\Database\Seeder;

class AccessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accesses')->delete();
        
        \DB::table('accesses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'datetime' => '2018-08-02 09:00:14',
                'created_at' => '2018-08-02 09:00:14',
                'updated_at' => '2018-08-02 09:00:14',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'datetime' => '2018-08-02 09:04:52',
                'created_at' => '2018-08-02 09:04:52',
                'updated_at' => '2018-08-02 09:04:52',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'datetime' => '2018-08-02 09:33:49',
                'created_at' => '2018-08-02 09:33:49',
                'updated_at' => '2018-08-02 09:33:49',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'datetime' => '2018-08-02 09:34:12',
                'created_at' => '2018-08-02 09:34:12',
                'updated_at' => '2018-08-02 09:34:12',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'datetime' => '2018-08-02 10:07:12',
                'created_at' => '2018-08-02 10:07:12',
                'updated_at' => '2018-08-02 10:07:12',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'datetime' => '2018-08-02 10:20:24',
                'created_at' => '2018-08-02 10:20:24',
                'updated_at' => '2018-08-02 10:20:24',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'datetime' => '2018-08-02 11:04:16',
                'created_at' => '2018-08-02 11:04:16',
                'updated_at' => '2018-08-02 11:04:16',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 49,
                'datetime' => '2018-08-02 11:16:03',
                'created_at' => '2018-08-02 11:16:03',
                'updated_at' => '2018-08-02 11:16:03',
            ),
            8 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'datetime' => '2018-08-02 12:47:09',
                'created_at' => '2018-08-02 12:47:09',
                'updated_at' => '2018-08-02 12:47:09',
            ),
            9 => 
            array (
                'id' => 12,
                'user_id' => 49,
                'datetime' => '2018-08-02 14:14:23',
                'created_at' => '2018-08-02 14:14:23',
                'updated_at' => '2018-08-02 14:14:23',
            ),
            10 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'datetime' => '2018-08-02 17:15:05',
                'created_at' => '2018-08-02 17:15:05',
                'updated_at' => '2018-08-02 17:15:05',
            ),
            11 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'datetime' => '2018-08-03 08:09:11',
                'created_at' => '2018-08-03 08:09:11',
                'updated_at' => '2018-08-03 08:09:11',
            ),
            12 => 
            array (
                'id' => 15,
                'user_id' => 3,
                'datetime' => '2018-08-03 08:33:15',
                'created_at' => '2018-08-03 08:33:15',
                'updated_at' => '2018-08-03 08:33:15',
            ),
            13 => 
            array (
                'id' => 16,
                'user_id' => 36,
                'datetime' => '2018-08-03 08:35:44',
                'created_at' => '2018-08-03 08:35:44',
                'updated_at' => '2018-08-03 08:35:44',
            ),
            14 => 
            array (
                'id' => 17,
                'user_id' => 3,
                'datetime' => '2018-08-03 08:36:37',
                'created_at' => '2018-08-03 08:36:37',
                'updated_at' => '2018-08-03 08:36:37',
            ),
            15 => 
            array (
                'id' => 18,
                'user_id' => 36,
                'datetime' => '2018-08-03 08:39:10',
                'created_at' => '2018-08-03 08:39:10',
                'updated_at' => '2018-08-03 08:39:10',
            ),
            16 => 
            array (
                'id' => 19,
                'user_id' => 3,
                'datetime' => '2018-08-03 08:43:01',
                'created_at' => '2018-08-03 08:43:01',
                'updated_at' => '2018-08-03 08:43:01',
            ),
            17 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'datetime' => '2018-08-03 10:08:42',
                'created_at' => '2018-08-03 10:08:42',
                'updated_at' => '2018-08-03 10:08:42',
            ),
            18 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'datetime' => '2018-08-03 10:12:01',
                'created_at' => '2018-08-03 10:12:01',
                'updated_at' => '2018-08-03 10:12:01',
            ),
        ));
        
        
    }
}