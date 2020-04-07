<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignView;
use App\User;
use Carbon\Carbon;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function userCount() {
        return  User::get()->count();
}
    public function campaignCount() {
        return  Campaign::get()->count();
    }
    public function weeklyVisitorCount() {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        $weeklyVisitors = CampaignView::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
            ->count();
        return  $weeklyVisitors;
    }
    public function weeklyUserCount() {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        $weeklyUser = User::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
            ->count();
        return  $weeklyUser;
    }
    public function visitorChart(){
        $products = CampaignView::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();

        $chart = Charts::database($products, 'line', 'highcharts')
            ->title('Visitor Details')
            ->elementLabel('Total Visitors')
            ->dimensions(1000, 500)
            ->responsive(true)
            ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
            ->groupByMonth(date('Y'), true);
        return $chart;
    }
    public function browserUsageChart(){
        $products = CampaignView::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();

        $chart = Charts::database($products, 'donut', 'highcharts')
            ->title('Visitor Details')
            ->elementLabel('Total Visitors')
            ->dimensions(500, 500)
            ->responsive(true)
            ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
            ->groupBy('agent');
        return $chart;
    }

    public function visitorWorldChart(){
        $products = CampaignView::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();

        $chart = Charts::database($products, 'geo', 'highcharts')
            ->title('Visitor Details')
            ->elementLabel('Total Visitors')
            ->dimensions(600, 300)
            ->responsive(true)
            ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
            ->groupBy('country');
        return $chart;
    }
    public function memberRegisterChart(){
        $users= User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title('User Details')
            ->elementLabel('Total Users')
            ->dimensions(800, 300)
           
            ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
            ->groupByMonth(date('Y'), true);
        return $chart;
    }
    public function adminDashboard(){
        $chart=$this->visitorChart();
        $visitorWorldChart=$this->visitorWorldChart();
        $browserChart=$this->browserUsageChart();
        $memberRegisterChart=$this->memberRegisterChart();
        $userCount = $this->userCount();
        $campaignCount = $this->campaignCount();
        $weeklyVisitorCount = $this->weeklyVisitorCount();
        $weeklyUserCount = $this->weeklyUserCount();
        $user=User::get();
        $campaign=Campaign::get();
        $category=Category::get();
        $campaignViews=CampaignView::get();
        return view('/admin/dashboard')->with(compact(['campaign','category','campaignViews','userCount','campaignCount','weeklyVisitorCount','weeklyUserCount','user','chart','browserChart','visitorWorldChart','memberRegisterChart']));
    }
    public function fundraiserDashboard(){
        return view('/fundraiser/dashboard');
    }
    public function donorDashboard(){
        return view('/donor/dashboard');
    }
}
