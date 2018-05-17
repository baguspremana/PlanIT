<?php

namespace App\Http\Controllers\Auth;

use App\Group;
use App\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\Shirt;

class GroupRegisterController extends Controller
{
    use RedirectsUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'group_name' => 'required|string',
            'institution' => 'required|string',
            'full_name' => 'required|string',
            'birthdate' => 'required|date',
            'contact' => 'required|numeric',
            'vegetarian' => 'required',
            'photo' => 'required',
            'buy_shirt' => 'required',
            'size' => 'required',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:groups',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Group
     */
    protected function create(array $data)
    {
        return Group::create($data);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {   
        $data = $request->all();
        //$validator = $this->validator($data);

        $data['password'] = Hash::make($data['password']);

        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($data)));

        //$this->guard()->login($user);

        $data['group_id'] = $user->id;
        $data['photo'] = $request->competition_id."_".$request->full_name.".".$request->file('photo')->getClientOriginalExtension();
        $data['captain'] = 1;
        
        Participant::uploadPhoto($request->file('photo'), $data['photo']);
        Participant::create($data);
        

        return redirect()->to('login'); 

        /*return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());*/
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }

    
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProgRegistrationForm()
    {
        return view('peserta.sign-up-prog');
    } 

    public function showWebRegistrationForm()
    {
        return view('peserta.sign-up-web');
    }

    public function showLccRegistrationForm()
    {
        return view('peserta.sign-up-lcc');
    }

    public function showIdeaRegistrationForm()
    {
        $data['harga_baju'] = Shirt::find(1)->harga;
        return view('peserta.sign-up-idea', $data);
    }
    
}
