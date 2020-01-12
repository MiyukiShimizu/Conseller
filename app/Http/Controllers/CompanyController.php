<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//作成したモデルファイルをControllerに読み込む
use App\Company;
use App\Product;

class CompanyController extends Controller
{

    //getCompanyformを行って、company_apply.blade.phpを表示する。
    public function getCompanyform (){
        return view('company_apply');
    }

    //company_applyページで、新しい企業を登録する。確認画面に飛ぶ
    public function companystoreData(Request $request)
    {
         $company = new Company();
        //  $company->id = $request->id;自動でつくものは書かない。
         $company->company_name = $request->company_name;
         $company->tantou_name = $request->tantou_name;
         $company->company_address = $request->company_address;
         $company->company_tel = $request->company_tel;  
         $company->company_mail = $request->company_mail;             
        //  $company->timestamps = $request-> timestamps; timestampも書かない。
         $company->save();
        return redirect('/');
    }

    // 飛んできたデータをPHPの変数Companyに保存。
    // 飛んできたデータを受け取る時は、requestrequestがいる
    //company_confirmのアドレスのページに表示させる
    public function getAllcompany (Request $request){
        $company = array();
        $company["company_name"] = $request->company_name;
        $company["tantou_name"] = $request->tantou_name;
        $company["company_address"] = $request->company_address;
        $company["company_tel"] = $request->company_tel;  
        $company["company_mail"] = $request->company_mail; 
        return view('company_confirm', compact('company')); 
    }

 //companyallのアドレスのページに一覧表示させる。
        public function indexCompany (){
        $companies = Company::all(); // companiesテーブルの全部を取得してPHPの変数companyに保存
        return view('companyall', compact('companies'));
    }

// 更新画面を表示する。
    public function editCompany ($id){
        $company = Company::where("id",$id)->first();
        // $company->company_name      = $request->company_name;
        // $company->tantou_name       = $request->tantou_name;
        // $company->company_address   = $request->company_address;
        // $company->company_tel       = $request-> company_tel;  
        // $company->company_mail      = $request-> company_mail;             
        // $company->update();
       return view('company_edit', compact('company'));
    }

    // companiesテーブル内のデータを更新する。
    public function updateCompany (Request $request){
        $company = Company::where("id",$request->id)->first();
        $company->company_name      = $request->company_name;
        $company->tantou_name       = $request->tantou_name;
        $company->company_address   = $request->company_address;
        $company->company_tel       = $request->company_tel;  
        $company->company_mail      = $request->company_mail;             
        $company->save();
       return redirect('companyall');
    }

    // companiesテーブル内の特定のデータを削除する。
    public function deleteCompany (Request $request){
        Company::destroy($request->id);
        return redirect('companyall'); 
    }

    //indexを行ったら、company_mypageを表示する。
    public function __construct(){
       $this->middleware('auth');}
    
    public function index()
    {
        return view('company/company_mypage');
    }

// 企業に紐づいている製品を表示する。
    public function companyindexProduct (){
        $products = Company::find(1)->products()->get();
        var_dump;
        return view('company_productall', compact('products'));
        }



}
