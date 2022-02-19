<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
  @yield('content')
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace()
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</body>
</html>