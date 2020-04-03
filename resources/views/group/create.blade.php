@extends('layouts.template')
@section('title')
グループ一覧 - 登録画面
@endsection

@section('content')

<p><label class="h2">入力画面</label></p>
<form action="/group/create" method="POST">
  {{ csrf_field() }}
  グループ名
  <input type="text" name="newGrpName">

  <p class="mb10"></p>
  <button type="submit" class="btn btn-primary">新規登録</button>
</form>
@endsection
