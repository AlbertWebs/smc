<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Stevebauman\Location\Facades\Location;
use DB;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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
        $Sessions = DB::table('tracker_sessions')->where('is_robot','0')->get();
        foreach ($Sessions as $sessions){
            if($sessions->location == null){
                $currentUserInfo = Location::get($sessions->client_ip);
                $countryName = $currentUserInfo->countryName;
                $updateDetails = array(
                    'location' => $countryName,
                );
                DB::table('tracker_sessions')->where('id',$sessions->id)->update($updateDetails);
                \Log::info("Location Updated Successfully");
            }
        }
        // Delete za kitambo


    }
}
