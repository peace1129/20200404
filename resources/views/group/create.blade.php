@extends('layouts.template')
@section('title')
グループ一覧 - 登録画面
@endsection

@section('content')

<p><label class="h2">入力画面</label></p>
@if ($errors->any())
  <div class="errors">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form action="/group/createChk" method="get">
  グループ名
  <input type="text" name="grpName">

  <p class="mb10"></p>
  <button type="submit" class="btn btn-primary">登録確認</button>
</form>
@endsection
