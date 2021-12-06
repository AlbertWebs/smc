<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Project Quiche',
                'orders' => 8,
                'sector' => 'Food processing',
                'ticket' => '$1mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Project Cinnamon',
                'orders' => 7,
                'sector' => 'F&B',
                'ticket' => '$4mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Project KUKU',
                'orders' => 5,
                'sector' => 'QSR',
                'ticket' => '$7mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Project Norwich',
                'orders' => 6,
                'sector' => 'F&B',
                'ticket' => '$4mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Project Marlin',
                'orders' => 3,
                'sector' => 'Hospitality',
                'ticket' => '$10mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Project UNO',
                'orders' => 2,
                'sector' => 'Hospitality',
                'ticket' => '$25mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Project Cruise',
                'orders' => 1,
                'sector' => 'Maritime',
                'ticket' => '$35mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Project RAM',
                'orders' => 4,
                'sector' => 'ICT',
                'ticket' => '$10mn',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Swahili',
                'orders' => NULL,
                'sector' => 'FMCG',
                'ticket' => '$220m',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Rempart',
                'orders' => NULL,
                'sector' => 'Commercial Real Estate ',
                'ticket' => '$70m',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Jogoo',
                'orders' => NULL,
                'sector' => 'QSR',
                'ticket' => '$50m 
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Tourelle',
                'orders' => NULL,
                'sector' => 'Commercial Real Estate',
                'ticket' => '$10m',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Matoke',
                'orders' => NULL,
                'sector' => 'Food Processor',
                'ticket' => '$5m',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Mignon',
                'orders' => NULL,
                'sector' => 'Food Processor',
                'ticket' => '$3m',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Marans',
                'orders' => NULL,
                'sector' => 'Agri - Business',
                'ticket' => '$1m',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}