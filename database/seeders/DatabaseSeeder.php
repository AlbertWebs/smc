<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(CasesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CopyrightsTableSeeder::class);
        $this->call(CopyrightTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(PrivaciesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(SiteSettingsTableSeeder::class);
    }
}
