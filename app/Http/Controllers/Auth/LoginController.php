<?php

namespace App\Http\Controllers\Auth;

use App\Checkin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login() {
    //     return view('auth.login');
    // }
    public function Attemptlogin(Request $request) {
        $email = $request->post('email');
        $password = $request->post('password');
        $users = User::where('email', $email)->get();
        foreach ($users as $user) {
            $role = $user->role;
            $name =$user->name;
            $user_id =$user->id;
            $color=$user->event_color;
        }
        session(['start_time' => time()]);
        session(['role' =>$role]);
        session(['name' =>$name]);
        session(['email' =>$email]);
        session(['event_color' =>$color]);
        // $sum = User::where('email', $email)->sum('role');
        // var_dump($sum);die();
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        session(['end_time' => time()]);
        $working_seconds = session('end_time') - session('start_time');
        $working_hrs = round((int)$working_seconds / 10, 2);
        if(session('role')>1)
        {
            Checkin::create([
                'name' => session('name'),
                'email' =>session('email'),
                'role'=>session('role'),
                'workingtime'=>$working_hrs,

            ]);
        };
        var_dump($working_hrs);
        Auth::logout();

        return redirect('/login');
    }
}
