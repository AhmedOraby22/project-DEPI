<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('web_asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('web_asset/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <div id="app">
        @yield('content')
    </div>

    <script src="{{ asset('web_asset/js/bootstrap.min.js') }}"></script>

</body>

</html>