<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\Login;

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
    }

    public function doLogin (Login $request)
    {
        $login = array(
            'email'     => $request->email,
            'password'  => $request->password,
            'is_allowed_login'  => true
        );

        if (Auth::attempt($login)) {
            $user = Auth::user();
            Session::put('user', $user);
            return Redirect::to('home');
        } else {
            return back()->with('error', 'Email or Password is incorrect or your account still need to be check by the admin!');
        }
    }

    public function apiLogin(Request $request)
    {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_allowed_login' => true
        ];

        if (\Auth::attempt($login)) {
            $user = \Auth::user();
            return response()->json([
                'success' => true,
                'user_id' => $user->id,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect or your account still needs to be checked by the admin!',
            ], 401);
        }
    }
}
