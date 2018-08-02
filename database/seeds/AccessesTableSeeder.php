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
        ));
        
        
    }
}