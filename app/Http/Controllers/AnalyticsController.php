<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;
use Tracker;

class AnalyticsController extends Controller
{
    public function index(){
        //retrieve visitors and pageview data for the current day and the last seven days
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        //retrieve visitors and pageviews since the 6 months ago
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitor = Tracker::currentSession();
        $users = Tracker::onlineUsers(); // defaults to 3 minutes
        $sessions = Tracker::sessions(60 * 24); // get sessions (visits) from the past day
        foreach ($sessions as $session)
{
    var_dump( $session->user->email );

    var_dump( $session->device->kind . ' - ' . $session->device->platform );

    var_dump( $session->agent->browser . ' - ' . $session->agent->browser_version );

    var_dump( $session->geoIp->country_name );

    foreach ($session->session->log as $log)
    {
    	var_dump( $log->path );
    }
}
        die();
        return view('analytic');
    }
}
