<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class DeleteCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete 2 Months Tracker Sessions';

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
        $DeleteOld = DB::table('tracker_sessions')->whereDate('created_at', '<=', now()->subDays(60))->delete();
    }
}
