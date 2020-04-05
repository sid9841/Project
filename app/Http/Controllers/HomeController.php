<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignView;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('index');
    }
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
    public function adminDashboard(){


        $userCount = $this->userCount();
        $campaignCount = $this->campaignCount();
        $weeklyVisitorCount = $this->weeklyVisitorCount();
        $weeklyUserCount = $this->weeklyUserCount();
        $user=User::get();
        return view('/admin/dashboard')->with(compact(['userCount','campaignCount','weeklyVisitorCount','weeklyUserCount','user']));
    }
    public function fundraiserDashboard(){
        return view('/fundraiser/dashboard');
    }
    public function donorDashboard(){
        return view('/donor/dashboard');
    }
}
