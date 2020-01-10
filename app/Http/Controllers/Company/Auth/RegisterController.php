<?php
namespace App\Http\Controllers\Company\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
//Requestを入れてもらった。
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
    protected $redirectTo = '/company/{id}/company_mypage';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showRegisterForm()
    {
        return view('company.auth.register');  // 企業用テンプレート
    }

    //教えてもらったコード
    // public function register(Request $request)
    // {
    //     return $request["name"];
    // }

    public function register()
    {
        return redirect('company/{id}/company_mypage'); 
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'], // companiesテーブに変更
            'password' => ['required', 'string', 'min:4', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function guard(){
        return \Auth::guard('user'); //ユーザー認証のguardを指定
    }
}