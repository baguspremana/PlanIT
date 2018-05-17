<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Group;
use App\Verified_req;
use App\Participant;
use DB;
use App\UserMessageTemporary;
use App\Jury;
use Carbon\Carbon;

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

        $verif_reqs = Verified_req::whereHas('Group',function($q){
            $q->where('verified','!=',1)->orWhereNull('verified');
        })->with('Group')->get();

        $dir_file = Verified_req::$dir_verifikasi;


        return view('admin.verifikasiAdmin', compact('jumlahPesan','verif_reqs', 'dir_file'));
    }

    public function verifikasi(Request $request){
        $group = Group::find($request->group_id);
        $group->verified = 1;
        $group->verified_at = Carbon::now();
        $group->verifying_admin = Auth::user()->id;
        $group->save();
        
        return redirect('/admin')->with('success', 'Berhasil melakukan verifikasi peserta');
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

    public function storeJury(Request $request)
    {
        $juri = $this->validate($request, [
            'fullname' => 'required|string',
            'email' => 'required|email',
            'competition_id' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ],[
            'fullname.required' => 'Kolom nama harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'competition_id.required' => 'Kolom kategori harus diisi',
            'username.required' => 'Kolom username harus diisi',
            'password.required' => 'Kolom password harus diisi',
            'password.confirmed' => 'Konfirmasi password harus diisi',
        ]);

        $juri = new Jury();
        $juri->fullname = $request->fullname;
        $juri->email = $request->email;
        $juri->competition_id = $request->competition_id;
        $juri->username = $request->username;
        $juri->password = bcrypt($request->password);
        $juri->save();

        return redirect('/admin')->with('success', 'Berhasil menambahkan juri');
    }        

    public function storeGroup(Request $request)
    {
        $data = $this->validate($request, [
            'groupname' => 'required|string',
            'institution' => 'required|string',
            'fullname' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'vegetarian' => 'required',
            'photo' => 'required',
            'username' => 'required|string',
            'password' => 'required|confirmed',
        ],[
            'groupname.required' => 'Kolom nama group harus diisi',
            'institution.required' => 'Kolom institusi harus diisi',
            'fullname.required' => 'Kolom nama harus diisi',
            'birthday.required' => 'Kolom tanggal lahir harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'contact.required' => 'Kolom kontak harus diisi',
            'vegetarian.required' => 'Kolom vegetarian harus diisi',
            'photo.required' => 'Kolom identitas harus diisi',
            'username.required' => 'Kolom username harus diisi',
            'password.required' => 'Kolom password harus diisi',
            'password.confirmed' => 'Kolom konfirmasi password harus diisi',
        ]);

        $data = new Group();
        $data->group_name = $request->groupname;
        $data->institution = $request->institution;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->email = $request->email;
        $data->competition_id = Auth::user()->competition_id;
        $data->save();

        $peserta = new Participant();
        $peserta->captain = 1;
        $peserta->group_id = $data->id;
        $peserta->full_name = $request->fullname;
        $peserta->birthdate = $request->birthday;
        $peserta->email = $data->email;
        $peserta->contact = $request->contact;
        $peserta->vegetarian = $request->vegetarian;
        $peserta->buy_shirt = $request->buy_shirt;
        $peserta->photo = $data->competition_id."_".$request->fullname.".".$request->file('photo')->getClientOriginalExtension();
        Participant::uploadPhoto($request->file('photo'), $peserta->photo);
        $peserta->save();

        return redirect('/admin')->with('success', 'Berhasil menambahkan peserta');
    }

    public function storePeserta(Request $request)
    {
        $data = $this->validate($request, [
            'institution' => 'required|string',
            'fullname' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'vegetarian' => 'required',
            'photo' => 'required',
            'username' => 'required|string',
            'password' => 'required|string|confirmed',
        ],[
            'institution.required' => 'Kolom institusi harus diisi',
            'fullname.required' => 'Kolom nama harus diisi',
            'birthday.required' => 'Kolom tanggal lahir harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'contact.required' => 'Kolom kontak harus diisi',
            'vegetarian.required' => 'Kolom vegetarian harus diisi',
            'photo.required' => 'Kolom kartu identitas harus diisi',
            'username.required' => 'Kolom username harus diisi',
            'password.required' => 'Kolom password harus diisi',
            'password.confirmed' => 'Kolom konfirmasi password harus diisi',
        ]);

        $data = new Group();
        $data->group_name = $request->fullname;
        $data->institution = $request->institution;
        $data->username = $request->username;
        $data->password = bcrypt($request->password); 
        $data->email = $request->email;
        $data->competition_id = Auth::user()->competition_id;
        $data->save();

        $peserta = new Participant();
        $peserta->captain = 1;
        $peserta->group_id = $data->id;
        $peserta->full_name = $request->fullname;
        $peserta->birthdate = $request->birthday;
        $peserta->email = $data->email;
        $peserta->contact = $request->contact;
        $peserta->vegetarian = $request->vegetarian;
        $peserta->buy_shirt = 0;
        $peserta->photo = $data->competition_id."_".$request->fullname.".".$request->file('photo')->getClientOriginalExtension();
        Participant::uploadPhoto($request->file('photo'), $peserta->photo);
        $peserta->save();

        return redirect('/admin')->with('success', 'Berhasil menambahkan peserta');

    }
}
