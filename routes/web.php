<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now set something great!
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
Route::get('/companyall/edit/{id}', 'CompanyController@editCompany');

//更新内容を確認する。
Route::patch('/companyall/edit/{id}', 'CompanyController@editconfirmCompany');

//データを更新する（companyallページで、CompanyControllerのupdateCompanyを行う。）
Route::post('/companyall/update/{id}', 'CompanyController@updateCompany');

//company一覧ページから企業を削除する。（companyallページで、CompanyControllerのdeleteCompanyを行う。）
Route::delete('/companyall/delete/{id}', 'CompanyController@deleteCompany');


//3. 製品登録
//product_applyのアドレスからデータを得たら、ProductControllerのgetProductformを行う。
Route::get('/product_apply', 'ProductController@getProductform'); 

//データをフォームに表示する(product_storeにデータを投げたら、ProductControllerのproductstoredataを見る。)
Route::post('/product_store', 'ProductController@productstoreData'); 

//データを登録する（product_confirmページでは、ProductControllerのgetAllProductを行う。）
Route::post('/product_confirm', 'ProductController@getAllproduct');

//データの一覧を表示する（companyallページでは、ProductControllerのindexProductを行う。）
Route::get('/productall', 'ProductController@indexProduct');

//企業ごとのデータの一覧を表示する（company_productallページでは、ProductControllerのcompanyindexProductを行う。）
Route::get('/company_productall', 'CompanyController@companyindexProduct');

//更新画面を表示する。
Route::get('/productall/edit/{id}', 'ProductController@editProduct');

//更新内容を確認する。
Route::patch('/productall/edit/{id}', 'ProductController@editconfirmProduct');

//データを更新する（comproductallページで、ProductControllerのupdateProductを行う。）
Route::post('/productall/update/{id}', 'ProductController@updateProduct');

//company一覧ページから企業を削除する。（productallページで、ProductControllerのdeleteProductを行う。）
Route::delete('/productall/delete/{id}', 'ProductController@deleteProduct');


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


//6. 企業ログイン,ログアウト
    Route::group(['prefix' => 'company', 'middleware' => 'guest:user'], function() {
    Route::get('login', 'Company\Auth\LoginController@showLoginForm')->name('company.login');
    Route::post('login', 'Company\Auth\LoginController@login')->name('company.login');
    Route::get('register', 'Company\Auth\RegisterController@showRegisterForm')->name('company.register');
    Route::post('register', 'Company\Auth\RegisterController@register')->name('company.register');
    });
    Route::group(['prefix' => 'company', 'middleware' => 'auth:user'], function(){
    Route::get('company_mypage', function () {
        return view('company.company_mypage');
    });
    Route::post('company/logout', 'Company\Auth\LoginController@logout')->name('company.logout');
    Route::get('home', 'Company\HomeController@index')->name('home');
    });
    Route::get('company/home', function(){
        return view('top');
    });


//8. MRログイン,ログアウト
    Route::group(['prefix' => 'mr', 'middleware' => 'guest:loginmr'], function() {
    Route::get('login', 'Mr\Auth\LoginController@showLoginForm')->name('mr.login');
    Route::post('login', 'Mr\Auth\LoginController@login')->name('mr.login');
    Route::get('register', 'Mr\Auth\RegisterController@showRegisterForm')->name('mr.register');
    Route::post('register', 'Mr\Auth\RegisterController@register')->name('mr.register');
    });
    Route::group(['prefix' => 'mr', 'middleware' => 'auth:loginmr'], function(){
    Route::get('mr_mypage', function () {
        return view('mr.mr_mypage');
    });
    Route::post('logout', 'Mr\Auth\LoginController@logout')->name('mr.logout');
    Route::get('mr/home', 'Mr\HomeController@index')->name('mr.home');
    });
    Route::get('mr/home', function(){
        return view('top');
    });

//9.管理者用ページへのログイン、ログアウト
    Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function() {
    Route::get('/home', function () {
        return view('admin.home');
    });
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
    });
    Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
    });

//10. 製品写真、添付文書、販促資料をアップロードする。
Route::get('/image_input', 'ImageController@getImageInput');
Route::post('/image_confirm', 'ImageController@postImageConfirm');
Route::post('/image_complete', 'ImageController@postImageComplete');

// // 11. トップページ
// アドレスが/homeの時は、top.blade.phpを表示する。
// Route::get('/home', function(){
//     return view('top');
// });

//12. 試作用
// アドレスが/〇〇の時は、〇〇.blade.phpを表示する。
Route::get('company_applyinfo', function(){
    return view('company_applyinfo');
});




?>
