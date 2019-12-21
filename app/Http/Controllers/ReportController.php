<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//作成したモデルファイルをControllerに読み込む
use App\Report;

class ReportController extends Controller
{

    //getReportformを行って、report_apply.blade.phpを表示する。
    public function getReportform (){
        return view('report_apply');
    }

    //eigyo_applyページで、新しい報告書を登録する。確認画面に飛ぶ
    public function reportstoreData(Request $request)
    {
         $report = new Report();
         $report->report_name = $request->report_name;
         $report->report_date = $request->report_date;
         $report->report_hospital = $request->report_hospital;
         $report->report_department = $request->report_department;  
         $report->report_product = $request->report_product;             
         $report->report_comment = $request->report_comment;  
         $report->report_salesnumber = $request->report_salesnumber;  
         $report->report_salesprice = $request->report_salesprice;      
         $report->save();
        return redirect('/');
    }

    // 飛んできたデータをPHPの変数Reportに保存。
    //report_confirmのアドレスのページに表示させる
    public function getAllreport (Request $request){
        $report = array();
        $report["report_name"] = $request->report_name;
        $report["report_date"] = $request->report_date;
        $report["report_hospital"] = $request->report_hospital;
        $report["report_department"] = $request->report_department;  
        $report["report_product"] = $request->report_product; 
        $report["report_comment"] = $request->report_comment;  
        $report["report_salesnumber"] = $request->report_salesnumber; 
        $report["report_salesprice"] = $request->report_salesprice; 
        return view('report_confirm', compact('report')); 
    }

 //reportallのアドレスのページに一覧表示させる。
        public function indexReport (){
        $reports = Report::all(); // reportsテーブルの全部を取得してPHPの変数reportに保存
        return view('reportall', compact('reports'));
    }

// 更新画面を表示する。
    public function editReport ($report_id){
        $report = Report::where("report_id",$report_id)->first();
       return view('report_edit', compact('report'));
    }

    // reportsテーブル内のデータを更新する。
    public function updateReport (Request $request){
        $report = Company::where("company_id",$request->company_id)->first();
        $report->report_name          = $request->report_name;
        $report->report_date          = $request->report_date;
        $report->report_hospital      = $request->report_hospital;
        $report->report_department    = $request->report_department;  
        $report->report_product       = $request->report_product;             
        $report->report_comment       = $request->report_comment;
        $report->report_salesnumber   = $request->report_salesnumber;  
        $report->report_salesprice    = $request->report_salesprice;  
        $report->save();
       return redirect('reportall');
    }

    // companiesテーブル内の特定のデータを削除する。
    public function deleteReport (Request $request){
        Report::destroy($request->report_id);
        return redirect('reportall'); 
    }
    
}
