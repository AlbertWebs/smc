<?php

namespace Database\Seeders;

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
                'name' => 'Admin',
                'country' => NULL,
                'status' => 1,
                'mobile' => NULL,
                'address' => NULL,
                'image' => NULL,
                'email' => 'admin@designekta.com',
                'email_verified_at' => NULL,
                'is_admin' => 1,
                'password' => '$2y$10$WVllbBqCTc/aAPcDg/tfyuf.84xxXmi63MPeJyLIcyBgR1u3vc716',
                'remember_token' => NULL,
                'created_at' => '2021-10-27 10:42:05',
                'updated_at' => '2021-10-27 10:42:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'country' => NULL,
                'status' => 0,
                'mobile' => NULL,
                'address' => NULL,
                'image' => NULL,
                'email' => 'user@designekta.com',
                'email_verified_at' => NULL,
                'is_admin' => 0,
                'password' => '$2y$10$/GQ.0hp7yQJMQ5ZnNehtnuNQLxJyZrpP81I6s8J22BEzoIzOYwILW',
                'remember_token' => NULL,
                'created_at' => '2021-10-27 10:42:05',
                'updated_at' => '2021-10-27 10:42:05',
            ),
        ));
        
        
    }
}