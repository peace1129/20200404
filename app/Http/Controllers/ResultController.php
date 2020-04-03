<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
  // 名簿一覧表示時処理
  public function result(){

    return view('result.result');
  }

  // 名簿一覧表示時処理
  public function completed(){

    return view('result.completed');
  }
}
