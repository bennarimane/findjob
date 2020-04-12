<?php

namespace App\Http\Controllers\Auth;
use App\Profile;
use App\Company;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'avatar' => ['sometimes', 'image','mimes:jpg,jpeg,tmp,svg,png'],
            'admin' => ['required', 'string', 'max:255'],
            'customRadio' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 

if(request()->has('avatar')){
    $avataruploaded = request()->file('avatar');
    $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
    $avatarpath = public_path('/images/');
$avataruploaded->move($avatarpath,$avatarname);
            $user= User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'avatar' => '/images/' .$avatarname,
            'customRadio' => $data['customRadio'],
            'admin' => $data['admin'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Profile::create(['user_id' => $user->id ]);
       Company::create(['user_id' => $user->id ]);
        return $user;
    }}
}
