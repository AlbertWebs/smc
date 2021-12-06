<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CopyrightTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('copyright')->delete();
        
        \DB::table('copyright')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => 'You may print or download to a local hard disk extracts for your personal and non-commercial use only
<br>

You may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material
<br>

You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}