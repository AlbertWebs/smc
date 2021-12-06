<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_site_settings')->delete();
        
        \DB::table('_site_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sitename' => 'Sasema Management Company',
                'logo' => 'SASEMA-LOGO-04.png',
                'logo_footer' => 'SASEMA-LOGOO-04.png',
                'logo_two' => 'logo.png',
                'favicon' => 'android-icon-192x192.png',
                'email' => 'info@sasemagroup.com',
                'email_one' => 'info@sasemagroup.com',
                'mobile_one' => '+254746512186',
                'mobile_two' => NULL,
                'mpesa' => NULL,
                'paypal' => NULL,
                'tagline' => NULL,
                'url' => 'http://sasemagroup.com/',
                'location' => 'Karen Road, Cara House, 1st Floor suite 9',
                'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
                'address' => NULL,
                'facebook' => 'https://web.facebook.com/sasemaMC',
                'whatsapp' => NULL,
                'telegram' => NULL,
                'twitter' => 'https://twitter.com/SasemaM',
                'linkedin' => 'https://ke.linkedin.com/company/sasema-management-company',
                'instagram' => 'https://www.instagram.com/sasemamanagement/',
                'youtube' => NULL,
                'google' => NULL,
                'risks' => NULL,
                'welcome' => NULL,
                'tawkTo' => NULL,
                'tawkToStatus' => 1,
                'whatsAppStatus' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}