<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Writer;
use App\Themesetting;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
     $this->middleware('guest')->except('logout');
     $this->middleware('guest:admin')->except('logout');
     $this->middleware('guest:writer')->except('logout');
      }

      
    public function showAdminLoginForm()
   {
        $logo = Themesetting::orderBy('created_at','desc')->first();

       return view('auth.login', ['url' => 'admin'])->with('logo' , $logo);
   }

   public function adminLogin(Request $request)
   {
       $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required'
       ]);
      

       if (Auth::guard('admin')->attempt(['email' => $request->email, 'password'
       => $request->password , 'ban' => 0])) {
          toastr()->success('successfully Login');

           return redirect()->intended('/admin');
       }
                       toastr()->error('Ban & Something Wrong!');

       return back()->withInput($request->only('email', 'remember'));
   }
    public function userLogin(Request $request)
   {
       $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required'
       ]);
      

       if (Auth::guard('web')->attempt(['email' => $request->email, 'password'
       => $request->password , 'ban' => 0])) {
          toastr()->success('successfully Login');

           return redirect()->intended('/home');
       }
                       toastr()->error('Ban & Something Wrong!');

       return back()->withInput($request->only('email', 'remember'));
   }
   public function showWriterLoginForm()
    {
            $logo = Themesetting::orderBy('created_at','desc')->first();

        return view('auth.writerlogin', ['url' => 'writer'])->with('logo' , $logo);
    }

    public function writerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('writer')->attempt(['email' => $request->email, 'password' => $request->password, 'ban' => 0])) {
          toastr()->success('successfully Login');

            return redirect()->intended('/writer');
        }
                       toastr()->error('Ban & Something Wrong!');

        return back()->withInput($request->only('email', 'remember'));
    }
}
