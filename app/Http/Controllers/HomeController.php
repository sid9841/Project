<?php

namespace App\Http\Controllers;

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
    public function adminDashboard(){
        return view('/admin/dashboard');
    }
    public function fundraiserDashboard(){
        return view('/fundraiser/dashboard');
    }
    public function donorDashboard(){
        return view('/donor/dashboard');
    }
}
