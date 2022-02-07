<?php

    namespace App\Http\Controllers;

    use App\Services\AnalyticsService;

    class AnalyticsController extends Controller
    {
        public function index(AnalyticsService $analyticsService)
        {
            $analytics = $analyticsService->getAnalytics();
            return view('analytics', ['analytics' => $analytics]);
        }
    }
