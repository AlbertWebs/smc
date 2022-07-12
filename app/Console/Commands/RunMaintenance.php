<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunMaintenance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:maintenance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs Maintenace, If Fails Switch to maintenance Mode';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Artisan::call('down');
    }
}
