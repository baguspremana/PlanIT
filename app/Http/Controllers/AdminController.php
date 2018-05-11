<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Group;
use App\Participant;
use DB;
use App\UserMessageTemporary;

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

        /*$participant = Participant::with('group')->where('competition_id','=',Auth::user()->competition_id)->get();*/

        $participant = DB::table('participants')
            ->join('groups', 'groups.id','=','participants.group_id')
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $participant;

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

        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.dashboard-admin', compact('group','participant','jumlahPeserta','jumlahTim','jumlahVeget','jumlahNonVeget','jumlahPesan'));
    }

    public function showFormPembayaran()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.verifikasiPeserta', compact('jumlahPesan'));
    }

    public function showFormVerifikasi()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.verifikasiAdmin', compact('jumlahPesan'));
    }

    public function showFormLogUpload()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.uploadlogs', compact('jumlahPesan'));
    }

    public function showFormTambahPeserta()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        if (Auth::user()->competition_id==3) {
            return view('admin.tambahPesertaLCC', compact('jumlahPesan'));
        }elseif (Auth::user()->competition_id==1 or Auth::user()->competition_id==2) {
            return view('admin.tambahPeserta', compact('jumlahPesan'));
        }
    }

    public function showFormTambahJuri()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.tambahJuri', compact('jumlahPesan'));
    }

    public function showFormInputPenilaian()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.inputFormNilai', compact('jumlahPesan'));
    }        

}
