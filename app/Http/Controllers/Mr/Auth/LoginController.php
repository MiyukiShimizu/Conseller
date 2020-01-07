<?php
namespace App\Http\Controllers\Mr\Auth;
use App\Http\Controllers\Mr\Auth;
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
    protected $redirectTo = '/Mr/mr_mypage';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // ログイン画面
    public function showLoginForm()
    {
        return view('mr.auth.login'); //MRログインページのテンプレート
    }
    protected function guard()
    {
        return \Auth::guard('mr'); //MR認証のguardを指定
    }
    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/');  // ログアウト後のリダイレクト先
}
}