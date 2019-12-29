<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->middleware('guest')->only('index', 'login');
        $this->middleware('guest')->except('logout');
    }
    
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['company_name' => $request->post('company_name'), 'company_password' => $request->post('company_password')])) {
            return redirect('/company_mypage');
        }
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
