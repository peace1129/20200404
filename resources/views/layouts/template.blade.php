<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>
<body class="bg-secondary">

  @yield('content')

</body>
</html>
