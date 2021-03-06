<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
  // グル―プ一覧表示時処理
  public function index(){
    $group = new Group();
    $gData = $group->getGrpCnt();

    return view('group.index',['gData' => $gData]);
  }

  // 新規グループ作成ボタン押下時処理
  public function create(){

    return view('group.create');

  }

  // グループ名重複チェックボタン押下時処理
  public function createChk(Request $request){
    $request->validate([
      'grpName'      => 'required|max:10|unique:groups,グループ名'
    ]);

    $request->session()->put('grpName', $request->input('grpName'));

    return view('group.create_exec');
  }

  public function createExec(Request $request){
      $group = new Group();
      $group->create([
        'グループ名' => $request->session()->get('grpName')
      ]);

      $gData = $group->getGrpCnt();

      return view('group.index',['gData' => $gData]);
  }
}
