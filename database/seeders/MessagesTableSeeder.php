<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject' => 'Test Contact Form',
                'name' => 'Albert  Muhatia',
                'email' => 'nektatech@gmail.com',
                'content' => 'this is a tesr',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 05:25:23',
                'updated_at' => '2021-11-27 05:25:23',
            ),
            1 => 
            array (
                'id' => 2,
                'subject' => 'Test Contact Form',
                'name' => 'Albert  Muhatia',
                'email' => 'nektatech@gmail.com',
                'content' => 'this is a tesr',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 05:26:46',
                'updated_at' => '2021-11-27 05:26:46',
            ),
            2 => 
            array (
                'id' => 3,
                'subject' => 'Test Contact Form',
                'name' => 'Albert  Muhatia',
                'email' => 'nektatech@gmail.com',
                'content' => 'this is a tesr',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 05:27:04',
                'updated_at' => '2021-11-27 05:27:04',
            ),
            3 => 
            array (
                'id' => 4,
                'subject' => 'Test Contact Form',
                'name' => 'Albert  Muhatia',
                'email' => 'nektatech@gmail.com',
                'content' => 'this is a tesr',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 05:34:27',
                'updated_at' => '2021-11-27 05:34:27',
            ),
            4 => 
            array (
                'id' => 5,
                'subject' => 'Test Contact Form',
                'name' => 'Albert  Muhatia',
                'email' => 'albertmuhatia@gmail.com',
                'content' => 'This is a test form',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 05:48:10',
                'updated_at' => '2021-11-27 05:48:10',
            ),
            5 => 
            array (
                'id' => 6,
                'subject' => NULL,
                'name' => 'Albert  Muhatia',
                'email' => NULL,
                'content' => NULL,
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 06:02:52',
                'updated_at' => '2021-11-27 06:02:52',
            ),
            6 => 
            array (
                'id' => 7,
                'subject' => 'Call Me Back',
                'name' => 'Albert  Muhatia',
                'email' => 'mailer@sasemagroup.com',
                'content' => 'Hello, My name is Albert  Muhatia, Call me on 0723014032, We Talk about Family Business Advisory',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 06:58:13',
                'updated_at' => '2021-11-27 06:58:13',
            ),
            7 => 
            array (
                'id' => 8,
                'subject' => 'Call Me Back',
                'name' => 'Albert  Muhatia',
                'email' => 'mailer@sasemagroup.com',
                'content' => 'Hello, My name is Albert  Muhatia, Call me on 0723014032, We Talk about Mergers & Acquisitions Advisory',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 06:59:36',
                'updated_at' => '2021-11-27 06:59:36',
            ),
            8 => 
            array (
                'id' => 9,
                'subject' => 'Call Me Back',
                'name' => 'Albert  Muhatia',
                'email' => 'mailer@sasemagroup.com',
                'content' => 'Hello, My name is Albert  Muhatia, Call me on <a href=\'tel:0723014032\'>0723014032</a>, We Talk about Mergers & Acquisitions Advisory',
                'mobile' => NULL,
                'status' => 0,
                'created_at' => '2021-11-27 07:03:08',
                'updated_at' => '2021-11-27 07:03:08',
            ),
        ));
        
        
    }
}