<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//1. トップページ
//アドレスが/の時は、top.blade.phpを表示する。
Route::get('/', function () {
    return view('top');
});


//2. 企業登録
//company_applyのアドレスからデータを得たら、CompanyControllerのgetCompanyformを行う。
Route::get('/company_apply', 'CompanyController@getCompanyform'); 

//データをフォームに表示する(company_storeにデータを投げたら、companyControllerのcompanystoredataを見る。)
Route::post('/company_store', 'CompanyController@companystoreData'); 

//データを登録する（company_confirmページでは、CompanyControllerのgetAllCompanyを行う。）
Route::post('/company_confirm', 'CompanyController@getAllCompany');

//データの一覧を表示する（companyallページでは、CompanyControllerのindexCompanyを行う。）
Route::get('/companyall', 'CompanyController@indexCompany');

//更新画面を表示する。
Route::get('/companyall/edit/{company_id}', 'CompanyController@editCompany');

//更新内容を確認する。
Route::patch('/companyall/edit/{company_id}', 'CompanyController@editconfirmCompany');

//データを更新する（companyallページで、CompanyControllerのupdateCompanyを行う。）
Route::post('/companyall/update/{company_id}', 'CompanyController@updateCompany');

//company一覧ページから企業を削除する。（companyallページで、CompanyControllerのdeleteCompanyを行う。）
Route::delete('/companyall/delete/{company_id}', 'CompanyController@deleteCompany');


//3. 製品登録
//product_applyのアドレスからデータを得たら、ProductControllerのgetProductformを行う。
Route::get('/product_apply', 'ProductController@getProductform'); 

//データをフォームに表示する(product_storeにデータを投げたら、ProductControllerのproductstoredataを見る。)
Route::post('/product_store', 'ProductController@productstoreData'); 

//データを登録する（product_confirmページでは、ProductControllerのgetAllProductを行う。）
Route::post('/product_confirm', 'ProductController@getAllproduct');

//データの一覧を表示する（companyallページでは、ProductControllerのindexProductを行う。）
Route::get('/productall', 'ProductController@indexProduct');

//更新画面を表示する。
Route::get('/productall/edit/{product_id}', 'ProductController@editProduct');

//更新内容を確認する。
Route::patch('/productall/edit/{product_id}', 'ProductController@editconfirmProduct');

//データを更新する（comproductallページで、ProductControllerのupdateProductを行う。）
Route::post('/productall/update/{product_id}', 'ProductController@updateProduct');

//company一覧ページから企業を削除する。（productallページで、ProductControllerのdeleteProductを行う。）
Route::delete('/productall/delete/{product_id}', 'ProductController@deleteProduct');


//4. MR登録
//mr_applyのアドレスからデータを得たら、MRControllerのgetMRformを行う。
Route::get('/mr_apply', 'MRController@getMRform'); 

//MRデータをフォームに表示する(mr_storeにデータを投げたら、MRControllerのMRstoreDataを見る。)
Route::post('/mr_store', 'MRController@MRstoreData'); 

//MRデータを登録する（mr_confirmページでは、MRControllerのgetAllMRを行う。）
Route::post('/mr_confirm', 'MRController@getAllMR');

//データの一覧を表示する（mrallページでは、MRControllerのindexMRを行う。）
Route::get('/mrall', 'MRController@indexMR');

//更新画面を表示する。
Route::get('/mrall/edit/{mr_id}', 'MRController@editMR');

//更新内容を確認する。
Route::patch('/mrall/edit/{mr_id}', 'MRController@editconfirmMR');

//データを更新する（mrallページで、MRControllerのupdateMRを行う。）
Route::post('/mrall/update/{mr_id}', 'MRController@updateMR');

//company一覧ページから企業を削除する。（mrallページで、MRControllerのdeleteMRを行う。）
Route::delete('/mrall/delete/{mr_id}', 'MRController@deleteMR');


//5. 営業レポート登録
//report_applyのアドレスからデータを得たら、ReportControllerのgetReportformを行う。
Route::get('/report_apply', 'ReportController@getReportform'); 

//データをフォームに表示する(report_storeにデータを投げたら、ReportControllerのReportstoreDataを見る。)
Route::post('/report_store', 'ReportController@ReportstoreData'); 

//データを登録する（report_confirmページでは、ReportControllerのgetAllReportを行う。）
Route::post('/report_confirm', 'ReportController@getAllReport');

//データの一覧を表示する（reportallページでは、ReportControllerのindexReportを行う。）
Route::get('/reportall', 'ReportController@indexReport');

//更新画面を表示する。
Route::get('/reportall/edit/{report_id}', 'ReportController@editReport');

//更新内容を確認する。
Route::patch('/reportall/edit/{report_id}', 'ReportController@editconfirmReport');

//データを更新する（reportallページで、ReportControllerのupdateReportを行う。）
Route::post('/reportall/update/{report_id}', 'ReportController@updateReport');

//company一覧ページから企業を削除する。（reportallページで、ReportControllerのdeleteReportを行う。）
Route::delete('/reportall/delete/{report_id}', 'ReportController@deleteReport');


//6. 企業ログイン、MRログインページを表示する。
//アドレスが/loginの時は、login.blade.phpを表示する。
Route::get('/login', function () {
    return view('login');
});

//loginでindexを取ったら、Companycontrollerのindexを行う。
Auth::routes();
Route::get('/register', function () {
    return view('company_mypage');
});

//7.アドレスが/company_mypageの時は、company_mypage.blade.phpを表示する。
Route::get('/company_mypage', function () {
    return view('company_mypage');
});

//8.アドレスが/mr_mypageの時は、mr_mypage.blade.phpを表示する。
Route::get('/mr_mypage', function () {
    return view('mr_mypage');
});
Route::get('/mr_login', function () {
    return view('mr_login');
});



//10. 製品写真、添付文書、販促資料をアップロードする。
Route::get('/image_input', 'ImageController@getImageInput');
Route::post('/image_confirm', 'ImageController@postImageConfirm');
Route::post('/image_complete', 'ImageController@postImageComplete');

