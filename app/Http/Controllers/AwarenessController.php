<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AwarenessController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin');
		$this->middleware('guest:web');
	}
    public function index()
    {
    	return view('awareness.index');
    }
}
