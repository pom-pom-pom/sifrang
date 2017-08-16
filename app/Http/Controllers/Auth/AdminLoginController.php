<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function index()
    {
        // return view('auth.adminLogin');
        return view('auth.adminLogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request,[
            'phone_no' => 'required|integer',
            'password' => 'required|min:6'
            ]);

        if(Auth::guard('admin')->attempt(['phone_no'=> $request->phone_no,'password'=> $request->password],$request->remember)){
            return redirect()->intended('/admin');

        }
        return redirect()->back()->withInput($request->only('phone_no','remember'));
    }
 

     public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }

  
}
