<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewUser(){
        $users=User::get();
        return view('/admin/viewUsers')->with(compact('users'));
    }

}
