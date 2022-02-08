<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BotCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $DeleteOld = DB::table('tracker_sessions')->where('is_robot','1')->whereDate('created_at', '<=', now()->subDays(10))->delete();
    }
}
