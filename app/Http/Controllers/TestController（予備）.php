<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
//データを読み込む

class TestController extends Controller
{
    public function getTest (){
        $test = Test::find(1); // testテーブル内のID番号1番を取得してPHPの変数testに保存
        return view("test", ['test'=>$test]);
    //testのアドレスのページに表示させる。
    }
    //public functionは関数を作るもの

    public function getForm (){
        return view('form');
    //formのアドレスのページに表示させる。
    }

    public function storeData(Request $request)
    {
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
