<?php

namespace App\Http\Controllers;

use App\ScoreList;
use Illuminate\Http\Request;
use Auth;
use App\Group;
use App\Object;
use App\Participant;
use DB;
use App\DetailScoreList;

class ScoreListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:jury');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $score = new ScoreList();
        $score->jury_id = $request->jury_id;
        $score->object_id = $request->object_id;
        $score->save();

        foreach ($request->form as $key => $part_id) {
            $score_list = new DetailScoreList();
            $score_list->score_list_id = $score->id;
            $score_list->part = $part_id;
            $score_list->score = $request->score[$key];
            $score_list->save();
        }

        return redirect('/juri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScoreList  $scoreList
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $object = Object::find($id);
        $group = Group::all();
        $participant = Participant::with('group')
            ->where('group_id','=',$id)
            ->get();
        $dataSecore = ScoreList::all()->where('object_id','=',$id);

        if (Auth::user()->competition_id==4) {
            return view('jury.form', compact('group', 'object', 'participant', 'dataSecore'));
        }elseif (Auth::user()->competition_id==5) {
            return view('jury.form-nilai-si', compact('group', 'object', 'participant', 'dataSecore'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScoreList  $scoreList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataSecore = ScoreList::find($id);
        $group = Group::all();
        $object = Object::with('group');
        $score = DetailScoreList::all();

        // $group_id = DB::table('objects')
        //     ->select('objects.group_id');

        $id_group = Object::find($id);
        $scoreList = ScoreList::with('object')
            ->get();
        
        $participant = Participant::with('group')
            ->where('group_id','=',$id)
            ->get();

        if (Auth::user()->competition_id==4) {
            return view('jury.form-edit-nilai', compact('dataSecore','group','object','scoreList','score', 'participant'));
        }elseif (Auth::user()->competition_id==5) {
            return 'aaaa';
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScoreList  $scoreList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $scores = DetailScoreList::
            where('score_list_id','=',$id)
            ->get();

        $dataSecore = ScoreList::find($id);

        $dataSecore->jury_id = $request->jury_id;
        $dataSecore->object_id = $request->object_id;
        $dataSecore->save();

        foreach ($scores as $key => $score) {
            $score_list = DetailScoreList::find($score->id);
            $score_list->score = $request->score[$key];
            $score_list->save();
        }

        return redirect('/juri');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScoreList  $scoreList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
