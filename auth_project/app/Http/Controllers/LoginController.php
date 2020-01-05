<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('index', 'login');
        $this->middleware('auth')->only('logout');
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
        return redirect('/home');
    }
}
