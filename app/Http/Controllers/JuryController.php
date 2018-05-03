<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Object;
use Auth;
use DB;
use App\DetailScoreList;
use App\Jury;
use Carbon\Carbon;
use App\ScoreList;
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
     
        /*$juri = DB::table('score_lists')
            ->select('score_lists.jury_id');

        $group = DB::table('groups');

        if ($juri->count()==0) {
           $group = $group
            ->join('objects', 'groups.id','=','objects.group_id')
            ->select('groups.*','objects.title', DB::raw('"Belum Dinilai" as total_nilai'))
            ->where('groups.competition_id','=', Auth::user()->competition_id)
            ->get();
            return view('jury.dashboard', compact('group','juri'));
        }else {
            return view('jury.dashboard', compact('group','juri'));
        }*/

        /*$today = date('Y-m-d'); //Carbon::today()->format('Y-m-d');
        // return $today;

        $tanggal = date('2018-05-03');
        //return $tanggal;
        
        if ($today == $tanggal) {
            return 'a';
        }else{
            return 'b';
        }*/

        $juri_id = DB::table('juries')
            ->join('score_lists','juries.id','=','score_lists.jury_id')
            ->select('score_lists.jury_id as id_juri')
            ->where('juries.competition_id','=',Auth::user()->competition_id)
            ->get();

        //return $juri_id;

        $group = DB::table('groups')
            ->join('objects', 'groups.id','=','objects.group_id')
            ->leftJoin('score_lists','objects.id','=','score_lists.object_id')
            ->leftJoin('juries','juries.id','=','score_lists.jury_id')
            ->leftJoin('detail_score_lists','score_lists.id','=','detail_score_lists.score_list_id')
            ->select('groups.institution', 'groups.group_name', 'objects.title', 'objects.id',DB::raw('sum(detail_score_lists.score) as total_nilai'), 'score_lists.id as id_score', 'score_lists.jury_id')
            ->where('groups.competition_id','=', Auth::user()->competition_id)
            //->where('score_lists.jury_id','=','juri_id')
            ->groupBy('objects.title', 'groups.group_name','groups.institution','objects.id', 'id_score','score_lists.jury_id')
            ->orderBy('total_nilai','dsc')
            ->get();

        //return $group;

        //return $juri_id;
        //return view('jury.dashboard', compact('group','juri_id'));
           
    }

    public function showRekapNilai()
    {
        //$rekap = Auth::user()->competition_id

        return view('jury.rekap-nilai');
    }

}
