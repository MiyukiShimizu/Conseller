<?php
namespace App\Http\Controllers\Loginmr\Auth;
use App\Loginmr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = '/mr/mr_mypage';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showRegisterForm()
    {
        return view('mr.auth.register');  // 管理者用テンプレート
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:mrs'], // mrsテーブに変更
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    public function register()
    {
        return view('mr.mr_mypage'); 
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Mr
     */
    protected function create(array $data)
    {
        return Mr::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function guard(){
        return \Auth::guard('loginmr'); //MR認証のguardを指定
    }
}