<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Group;
use App\Participant;
use DB;

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
        $group = Group::where('competition_id','=',Auth::user()->competition_id)
            ->get();

        $participant = Participant::with('group')->get();

        // return $participan;

        $jumlahPeserta = DB::table('participants')
            ->join('groups','groups.id','=','participants.group_id')
            ->select('participants.id as total_peserta')
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $jumlahPeserta;

        $jumlahTim = DB::table('groups')
            ->select('groups.id')
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        $jumlahVeget = DB::table('participants')
            ->join('groups','groups.id','=','participants.group_id')
            ->select('participants.vegetarian')
            ->where('participants.vegetarian','=',1)
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $jumlahVeget;

        $jumlahNonVeget = DB::table('participants')
            ->join('groups','groups.id','=','participants.group_id')
            ->select('participants.vegetarian')
            ->where('participants.vegetarian','=',0)
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $jumlahNonVeget;

        return view('admin.dashboard-admin', compact('group','participant','jumlahPeserta','jumlahTim','jumlahVeget','jumlahNonVeget'));
    }

    public function showFormPembayaran()
    {
        return view('admin.verifikasiPeserta');
    }

    public function showFormVerifikasi()
    {
        return view('admin.verifikasiAdmin');
    }

    public function showFormLogUpload()
    {
        return view('admin.uploadlogs');
    }

    public function showFormTambahPeserta()
    {
        if (Auth::user()->competition_id==3) {
            return view('admin.tambahPesertaLCC');
        }elseif (Auth::user()->competition_id==1 or Auth::user()->competition_id==2) {
            return view('admin.tambahPeserta');
        }
    }        
}
