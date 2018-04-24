<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard-admin');
    }

    public function showFormPembayaran()
    {
        return view('admin.verifikasiPeserta');
    }

    public function showFormVerifikasi()
    {
        return view('admin.verifikasiAdmin');
    }        
}
