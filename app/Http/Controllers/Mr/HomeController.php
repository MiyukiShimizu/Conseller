<?php
namespace App\Http\Controllers\Mr;  // Mrの追加
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
    return view('mr.mr_mypage');   // MR用のテンプレート
}
}