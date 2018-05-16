<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dashboard;
use App\Participant;
use Auth;
use DB;
use App\AdminMessageTemporary;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\Hash;
use App\Group;

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
        $completeness = 0;

        $participants = Auth::user()->participants;

        if(Auth::user()->verified) 
            $this->$completeness['email_verif'] = 1;

        if($participants->count() > 1)
            $this->$completeness['participants'] = 1;
        
        $this->$completeness['identity_verif'] = 1;
        foreach($participants as $participant){
            if(!$participant->active){
                $this->$completeness['identity_verif'] = 0;
            }
        }

        $jumlah = DB::table('participants')
            ->select('participants.id')
            ->where('participants.group_id','=',Auth::user()->id)
            ->get();

        // return $jumlah;

        $jumlahPesan = AdminMessageTemporary::where('group_id','=', Auth::user()->id)
            ->where('view','=', 0)
            ->get();
        
        $data['participants'] = Auth::user()->participants;
        return view('peserta.dashboard', $data, compact('jumlah','jumlahPesan'));
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

        return redirect('dashboard')->with('success', 'Berhasil menambah anggota');
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
        return redirect('dashboard')->with('success', 'Berhasil menghapus data anggota');
    }

    public function showVerificationForm()
    {
        $jumlahPesan = AdminMessageTemporary::where('group_id','=', Auth::user()->id)
            ->where('view','=', 0)
            ->get();

        return view('peserta.verifikasi', compact('jumlahPesan'));
    }

    public function showUploadDataForm()
    {
        $jumlahPesan = AdminMessageTemporary::where('group_id','=', Auth::user()->id)
            ->where('view','=', 0)
            ->get();

        return view('peserta.upload', compact('jumlahPesan'));
    }

    public function showSettingForm()
    {
        $jumlahPesan = AdminMessageTemporary::where('group_id','=', Auth::user()->id)
            ->where('view','=', 0)
            ->get();

        return view('peserta.setting', compact('jumlahPesan'));
    }

    public function gantiPassword()
    {
        $Group = Group::find(Auth::user()->id);
        if (Hash::check(Input::get('passwordold'), $Group['password']) && Input::get('password') == Input::get('password_confirmation')) {
            $Group->password = bcrypt(Input::get('password'));
            $Group->save();
            return back()->with('success', 'Password berhasil diganti');
        }else{
            return back()->with('error', 'Gagal mengganti password');
        }
    }
    
}
