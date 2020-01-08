<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//作成したモデルファイルをControllerに読み込む
use App\Mr;

class MRController extends MR
{

    //getMRformを行って、mr_apply.blade.phpを表示する。
    public function getMRform (){
        return view('mr_apply');
    }

// 飛んできたデータをPHPの変数mrに保存。
//mr_confirmのアドレスのページに表示させる
    public function getAllMR (Request $request){
        $mr = array();
        $mr["mr_name"] = $request->mr_name;
        $mr["mr_address"] = $request->mr_address;
        $mr["mr_tel"] = $request->mr_tel;  
        $mr["mr_mail"] = $request->mr_mail; 
        return view('mr_confirm', compact('mr')); 
    }

//mr_applyページで、新しいMRを登録する。
public function mrstoreData(Request $request)
{
     $mr = new Mr();
     $mr->mr_name = $request->mr_name;
     $mr->mr_address = $request->mr_address;
     $mr->mr_tel = $request->mr_tel;  
     $mr->mr_mail = $request->mr_mail;             
     $mr->save();
    return redirect('/');
}

//mrallのアドレスのページに一覧表示させる。
    public function indexMR (){
    $mrs = MR::all(); // mrsテーブルの全部を取得してPHPの変数mrに保存
    return view('mrall', compact('mrs'));
    }

// 更新画面を表示する。
    public function editMR ($mr_id){
    $mr = MR::where("mr_id",$mr_id)->first();
    return view('mr_edit', compact('mr'));
}

// mrsテーブル内のデータを更新する。
    public function updateMR (Request $request){
        $mr->mr_name       = $request->mr_name;
        $mr->mr_address   = $request->mr_address;
        $mr->mr_tel       = $request->mr_tel;  
        $mr->mr_mail      = $request->mr_mail;        
    $mr->save();
   return redirect('mrall');
}

// mrsテーブル内の特定のデータを削除する。
    public function deleteMR (Request $request){
    MR::destroy($request->mr_id);
    return redirect('mrall'); 
    }

}
