<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dashboard;
use App\Participant;
use Auth;

class DashboardController extends Controller
{
    private  $completeness;
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('auth');
        
        $this->completeness = [
            'email_verif' => 0,
            'participants' => 0,
            'identity_verif' => 0,
            'payment' => 0,
            'payment_verif' => 0,
        ];

        


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Auth::user()->participants;

        if(Auth::user()->verified) 
            $this->completeness['email_verif'] = 1;

        if($participants->count() > 1)
            $this->completeness['participants'] = 1;
        
        $this->completeness['identity_verif'] = 1;
        foreach($participants as $participant){
            if(!$participant->active){
                $this->completeness['identity_verif'] = 0;
            }
        }
        
        $data['participants'] = Auth::user()->participants;
        return view('peserta.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['captain'] = 0;
        $data['group_id'] = Auth::user()->id;
        $data['photo'] = $request->competition_id."_".$request->full_name.".".$request->file('photo')->getClientOriginalExtension();
        Participant::uploadPhoto($request->file('photo'), $data['photo']);
        Participant::create($data);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Participant::destroy($id);
        return redirect('dashboard');
    }

    public function showVerificationForm()
    {
        return view('peserta.verifikasi');
    }

    public function showUploadDataForm()
    {
        return view('peserta.upload');
    }

    public function showSettingForm()
    {
        return view('peserta.setting');
    }
}
