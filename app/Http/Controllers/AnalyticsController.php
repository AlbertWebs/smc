<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;
use Tracker;
use DB;
use Stevebauman\Location\Facades\Location;
use Carbon\Carbon;
class AnalyticsController extends Controller
{
    public function index(){
        $Sessions = DB::table('tracker_sessions')->get();
        return view('analytic',compact('Sessions'));
    }


    public function track(){
        $Sessions = DB::table('tracker_sessions')->where('is_robot','0')->orderBy('id','ASC')->get();
        $CountVisitors = count($this->getToday());
        $CountRobotVisitors = count($this->getTodayBot());
        $CountVisitorsThisMonth = count($this->getThisMonthVisitors());
        $CountVisitorsThisMonthRobot = count($this->getThisMonthRobots());
        return view('front.analytics',compact('Sessions','CountVisitors','CountRobotVisitors','CountVisitorsThisMonth','CountVisitorsThisMonthRobot'));
    }


    public function getToday(){
        $Today = DB::table('tracker_sessions')->where('is_robot','0')->whereDate('created_at', Carbon::today())->get();
        return $Today;
    }

    public function getTodayBot(){
        $Today = DB::table('tracker_sessions')->where('is_robot','1')->whereDate('created_at', Carbon::today())->get();
        return $Today;
    }

    public function getThisMonthVisitors(){
        $ThisMonth = DB::table('tracker_sessions')->where('is_robot','0')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();
        return $ThisMonth;
    }

    public function getThisMonthRobots(){
        $ThisMonth = DB::table('tracker_sessions')->where('is_robot','1')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();
        return $ThisMonth;
    }

    public function allVisitors(){
        $Sessions = DB::table('tracker_sessions')->where('is_robot','0')->get();
        $SessionsBot = DB::table('tracker_sessions')->where('is_robot','1')->get();
        return view('front.analytics-all',compact('Sessions','SessionsBot'));
    }

    public function allVisitorsBots(){
        $Sessions = DB::table('tracker_sessions')->where('is_robot','0')->get();
        $SessionsBot = DB::table('tracker_sessions')->where('is_robot','1')->get();
        return view('front.analytics-all-bots',compact('Sessions','SessionsBot'));
    }

    public function getIp($ip){
        $currentUserInfo = Location::get($ip);
        $countryName = $currentUserInfo->countryName;
        return $countryName;
    }


    //CronJob Delete All Bots

    // Create Cron Job to convert IP to Location




}
