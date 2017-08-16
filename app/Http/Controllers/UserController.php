<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth')->except('userLogout');
        
    }
    public function index()
    {
    	return view('user.dashboard');
    }

    public function profile()
    {
        return view('user.profile');
    }

     public function userLogout()
    {
        Auth::guard('web')->logout();

        return redirect('/awareness');
    }
}
