@extends('layouts.template')
@section('title')
グループ一覧 - 確認画面
@endsection

@section('content')

<p><label class="h2">確認画面</label></p>
<form action="/group/createExec" method="POST">
  {{ csrf_field() }}
  グループ名
  {{ Session::get('grpName') }}

  <p class="mb10"></p>
  <button type="submit" class="btn btn-primary">登録</button>
</form>
@endsection
