<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Admin;
use App\Writer;
use App\Themesetting;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest');
      $this->middleware('guest:admin');
      $this->middleware('guest:writer');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showAdminRegisterForm()
   {
            $logo = Themesetting::orderBy('created_at','desc')->first();
       return view('auth.register', ['url' => 'admin'])->with('logo' , $logo);
   }

   public function showWriterRegisterForm()
   {
            $logo = Themesetting::orderBy('created_at','desc')->first();

       return view('auth.register', ['url' => 'writer'])->with('logo' , $logo);
   }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
              return redirect()->intended('login');

    }
    protected function createAdmin(Request $request)
  {
      $this->validator($request->all())->validate();
      $admin = Admin::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
        'is_super' => 1,

      ]);
      return redirect()->intended('login/admin');
  }
  protected function createWriter(Request $request)
   {
       $this->validator($request->all())->validate();
       $writer = Writer::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => Hash::make($request['password']),
       ]);
       return redirect()->intended('login/writer');
   }
}
