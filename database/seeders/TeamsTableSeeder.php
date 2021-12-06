<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Phil N. Gutsche',
                'email' => 'pngutsche@gmail.com',
                'slung' => 'phil-n-gutsche',
                'position' => 'Managing Director',
                'description' => 'Phil has spent 25+ years living and working in Africa and Asia, working primarily in the FMCG sector, as well being a co-founder shareholder/director of the KFC & the News Café franchises in EA. His executive focus is Sasema Management Company, which he established in 2008. Sasema provides Investment Management, Family Business and M&A/Transaction advisory services to clients. Phil and his family live in Nairobi and are all active in sports and enjoy exploring Kenya.',
                'image' => 'gutsche.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/phil-n-gutsche-14261b30',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Odeke Ekirapa',
                'email' => 'odeke@sasemagroup.com',
                'slung' => 'odeke-ekirapa',
                'position' => 'Head of Advisory Services',
                'description' => 'Odeke has over 10 years of experience in leading multidisciplinary, multinational projects in high performing teams in addition to developing sales and finance strategies to drive business growth. He is an experienced business analyst who holds a BS/BA in Business Management from Bucknell University, USA. Prior to joining Sasema, Odeke worked for Ralph Lauren Corporation and, most recently, Ekco Investments Limited as the Finance Director managing all financial aspects of the company’s investments portfolio. At Sasema, Odeke oversees the M&A advisory, Equity & Debt capital raising and Private Equity advisory processes.  
',
                'image' => 'odeke.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/odeke-ekirapa-93912040',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Reuben Kagichu ',
                'email' => 'reuben@sasemagroup.com',
                'slung' => 'reuben-kagichu',
                'position' => 'Head of Finance & Operations',
                'description' => 'Reuben contributes financial and operational expertise in the development and implementation of organizational strategies, policies, practices, funding requirements and applications. Reuben has vast experience in finance, accounting, credit control & logistics management gained from working across various industries from retail to insurance, construction and hospitality prior to joining Sasema and has. 
He is a graduate from Egerton University and a CPA Finalist.
',
                'image' => 'reuben.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/reuben-kagichu-8566a920/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Aurore Imena ',
                'email' => 'aurore@sasemagroup.com',
                'slung' => 'aurore-imena',
                'position' => 'Associate',
                'description' => 'Aurore is an experienced Investment analyst, she holds a Master of Science in Finance & Investment management from Salford University, Manchester and a Bachelor of Finance from the Catholic University of Eastern Africa. At Sasema, Aurore is a member of the M&A and transaction advisory team at Sasema overseeing the capital raising process. Aurore is a native of Rwanda, fluent in English, French.
',
                'image' => 'aurore.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/aurore-imena-43894b124',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Naftaly Ndungú ',
                'email' => 'naftaly@sasemagroup.com',
                'slung' => 'naftaly-ndungu',
                'position' => 'Associate',
                'description' => 'Naftaly is actively involved in the entire deal cycle of the capital raising process; from client engagement, industry & market research, financial analysis & valuation, due diligence support, and final closing procedures and facilitation. Naftaly holds a Bachelor’s degree in Real Estate from the University of Nairobi. He’s a certified Financial Modeling & Valuation Analyst, Commercial Banking and Credit Analyst and currently pursuing the CFA Charter. 
',
                'image' => 'ndungu.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/naftaly-ndung-u-m-4a2433107',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Moreen Kaguru',
                'email' => 'info@sasemagroup.com',
                'slung' => 'moreen-kaguru',
                'position' => 'Analyst',
                'description' => 'Moreen holds a Bachelor’s Degree in Economics from the University of Nairobi. She is also a CPA Finalist. At Sasema, Moreen is a member of the M&A and transaction advisory overseeing and managing the analytical data and investor documentation that supports client transactions. Moreen is a native of Kenya, fluent in English and Kiswahili, with a basic comprehension of French.',
                'image' => 'moreen.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'William Wamalwa ',
                'email' => 'info@sasemagroup.com',
                'slung' => 'william-wamalwa',
                'position' => 'Analyst',
            'description' => 'William is currently undertaking an undergraduate degree at USIU, studying International Business Administration (IBA), concentration in Finance. At Sasema, William supports the Advisory team managing the financial compilation and analysis of the client’s portfolio leading up to a market launch. William is a native of Kenya, fluent in English and Kiswahili. 
',
                'image' => 'william.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Lorraine Makanga',
                'email' => 'info@sasemagroup.com',
                'slung' => 'lorraine-makanga',
                'position' => 'HR & Admin',
                'description' => 'Lorraine is an experienced HR professional. She is currently taking her Master’s in Business Administration from Kenya Methodist University and holds a Bachelor’s Degree in Human Resource Management also from the Kenya Methodist University. She has worked in the financial services as an HR & Admin for over 5 years. At Sasema, Lorraine participates in the development, coordination, implementation and administration of hr policies, procedures and programs; as well as oversee administrative functions. She is always working towards sustainable performance and enjoys the challenge of working in a complex and ever changing environment.',
                'image' => 'lorraine.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/lorraine-m-921b1272',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Marie Akanga ',
                'email' => 'info@sasemagroup.com',
                'slung' => 'marie-akanga',
                'position' => 'Accountant',
                'description' => 'Marie Akanga is an accountant with a Bachelor’s degree in Commerce from The University of Nairobi where she did a major in Finance and a minor in Human Resource Management. She is also a CPA and a Master’s of Commerce holder from Strathmore University. At Sasema Marie is a part of the Finance team working as the company’s accountant. ',
                'image' => 'marie.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Catherine Waringa ',
                'email' => 'info@sasemagroup.com',
                'slung' => 'catherine-waringa',
                'position' => 'Personal Assistant',
                'description' => 'Catherine has Eight years of experience working as a personal assistant to various directors in different sectors. As the personal assistant she handles all professional and personal matters for the Managing Director. She is proficient in maintaining a professional and confidential working environment for all our esteemed clients.',
                'image' => 'catherine.jpg',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}