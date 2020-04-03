@extends('layouts.template')
@section('title')
名簿一覧 - 登録画面
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

<form action="/roster/createChk" method="get">
  <div class="container-fluid">
    <div class="row md-5">
      <div class="col-md-1">
        <label>氏名</lavel>
      </div>
      <div>
        <input type="text" name="middleName" value="{{ old('middleName') }}">

        <input type="text" name="name" value="{{ old('name') }}">
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <label>性別</lavel>
      </div>
      <div>
        <label class="radio-inline">
          <input type="radio" name="gender" value="1">男性
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="2">女性
        </label>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <label>都道府県</lavel>
      </div>
      <div>
        <input name="pref" type="text" class="textField" id="tField3" list="prefCmbList" value="{{ old('pref') }}">
        <datalist id="prefCmbList">
          @foreach($prefCollection as $bufList1)
            @foreach($bufList1 as $bufList2)
              @foreach($bufList2 as $list)
                <option value="{{$list}}">

              @endforeach
            @endforeach
          @endforeach
        </datalist>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <label>住所</lavel>
      </div>
      <div>
        <input type="text" name="address" value="{{ old('address') }}">
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <label>グループ</lavel>
      </div>
      <div>
        <input name="grpName" type="text" class="textField" id="tField3" list="grpCmbList" value="{{ old('grpName') }}">
        <datalist id="grpCmbList">
          @foreach($gNameList as $d)
            <option value="{{$d->グループ名}}">
          @endforeach
        </datalist>
      </div>
    </div>
  </div>
  <p></p>
<button type="submit" class="btn btn-primary">確認</button>

</form>

@endsection
