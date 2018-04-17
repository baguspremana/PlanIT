<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:jury');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jury.dashboard');
    }
}
