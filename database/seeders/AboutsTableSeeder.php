<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => '<div class="col-md-6">
<div class="overflow-hidden mb-2">
<h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">Who <strong class="font-weight-extra-bold">and Where We Are</strong></h2>
</div>
<p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400" style="animation-delay: 1400ms;">Sasema Management Company is a transaction advisory, mergers and acquisitions and family business consulting firm.<br><br>Sasema was established in 2008 in Mauritius and has been built on the founders over 20 years Pan African work experience. While in Mauritius Sasema completed projects valued at $100 million and has since expanded to East Africa with a total value of $360m.


</p>

<div class="overflow-hidden mb-2">
<h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">What <strong class="font-weight-extra-bold">We Do</strong></h2>
</div>
<p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400" style="animation-delay: 1400ms;">Sasema provides consultancy services in transaction advisory, M&amp;A  and family business and has worked in the following sectors; FMCG (retail), agribusiness, banking, real estate, and private equity among others.</p>

</div>',
                'company' => 'Sasema was established in 2008 in Mauritius and has been built on the founders over 20 years Pan African work experience. While in Mauritius Sasema completed projects valued at $100 million and has since expanded to East Africa with a total value of $360m.
',
                'mission' => 'To deliver sustainable value to all stakeholders.',
                'vision' => 'To be a trusted and reliable advisory and investment services partner in Africa.',
                'values' => 'To create big African businesses, in AFRICA, for AFRICA, by AFRICANS.',
                'image_one' => 'carlos-muza-hpjSkU2UYSU-unsplash.jpg',
                'image_two' => 'generic-corporate-3-3-full.jpg',
                'image_three' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}