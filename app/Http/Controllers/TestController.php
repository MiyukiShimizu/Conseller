<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test; 

class TestController extends Controller
{
//getTestの関数を「test.blade.phpというアドレスのページを表示する」と定義する。    
    public function getTest (){
        // return view('test');
        $test = Test::find(1); // testテーブル内のID番号1番を取得してPHPの変数testに保存
        return view("test", ['test'=>$test]); 
    }
    
//formのアドレスのページに表示させる。
    public function getForm (){
        return view('form');
    }

// Postしたら、見に行く場所を指定する関数
public function storeData(Request $request){
        $test = new Test();
        $test->title = $request->title;
        $test->content = $request->content;
        $test->save();
        return redirect('/testtest/');
    }

    public function getAll (){
        $tests = Test::all();
        return view("testall", ['tests'=>$tests]); 
        // testテーブル内のID番号全部を取得してPHPの変数testに保存
    //testallのアドレスのページに表示させる。
    }

    
}
