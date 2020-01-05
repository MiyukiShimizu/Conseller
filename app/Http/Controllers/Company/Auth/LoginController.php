<?php
namespace App\Http\Controllers\Company\Auth;
use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/comapny/company_mypage';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // ログイン画面
    public function showLoginForm()
    {
        return view('company.auth.login'); //企業ログインページのテンプレート
    }
    protected function guard()
    {
        return \Auth::guard('user'); //ユーザー認証のguardを指定
    }
    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/company/login');  // ログアウト後のリダイレクト先
    }
}