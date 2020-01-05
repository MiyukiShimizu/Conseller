<?php
namespace App\Http\Controllers\Company;  // Companyの追加
use App\Http\Controllers\Controller;   // 追加
use Illuminate\Http\Request;
class HomeController extends Controller
{
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    return view('company.company_mypage');   // 企業用のテンプレート
}
}