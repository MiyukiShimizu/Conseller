<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//作成したモデルファイルをControllerに読み込む
use App\Product;
use App\Department;
use App\Area;

class ProductController extends Controller
{
    //getProductformを行って、product_apply.blade.phpを表示する。
    //departmentから全データを取る。
    public function getProductform (){
        $department = Department::all();
        $area = Area::all();
        return view('product_apply', compact(['department','area']));
    }

//product_confirmページの内容を登録する。
public function productstoreData(Request $request)
{
     $product = new Product();
     $product->product_name = $request->product_name;
     $product->product_generalname = $request->product_generalname;
     $product->product_maker = $request->product_maker;
     $product->product_no = $request->product_no;  
     $product->product_price = $request->product_price;    
     $product->product_distributor = $request->product_distributor;           
     $product->save(); 
     if (is_array($request->department_product)) {
        $product->departments()->detach();
        $product->departments()->attach($request->department_product); 
    }
    if (is_array($request->area_product)) {
        $product->areas()->detach();
        $product->areas()->attach($request->area_product); 
    }
    return redirect('/');
}

// 飛んできたデータをPHPの変数Productに保存。
//product_confirmのアドレスのページに表示させる
    public function getAllproduct (Request $request){
        $product = array();
        $product["product_name"] = $request->product_name;
        $product["product_generalname"] = $request->product_generalname;       
        $product["product_maker"] = $request->product_maker;
        $product["product_no"] = $request->product_no;  
        $product["product_price"] = $request->product_price; 
        $product["product_distributor"] = $request->product_distributor;
        $product["department_product"] = $request->department_product; 
        $product["product_area"] = $request->product_area;   
        return view('product_confirm', compact('product')); 
    }

//productallのアドレスのページに一覧表示させる。
    public function indexProduct (){
    $products = Product::all(); // productsテーブルの全部を取得してPHPの変数productに保存
    return view('productall', compact('products'));
    }

// 更新画面を表示する。
    public function editProduct ($id){
    $product = Product::where("id",$id)->first();
    return view('product_edit', compact('product'));
}

// productsテーブル内のデータを更新する。
    public function updateProduct (Request $request){
     $product->product_name = $request->product_name;
     $product->product_generalname = $request->product_generalname;
     $product->product_maker = $request->product_maker;
     $product->product_no = $request->product_no;  
     $product->product_price = $request->product_price;    
     $product->product_distributor = $request->product_distributor; 
    $product->save();
   return redirect('productall');
}

// productsテーブル内の特定のデータを削除する。
    public function deleteProduct (Request $request){
    Product::destroy($request->id);
    return redirect('productall'); 
    }

}
