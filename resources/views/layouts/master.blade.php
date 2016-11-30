<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}"> <!-- Always go in here and not important where this uses -->

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.theme.css') }}">

    @yield('styles')

</head>
<body>
    @include('includes.header')

    <div class="container">

        <div class="main">
            @yield('content')
        </div>

    </div>

    <script src="{{ URL::to('js/bootstrap.js') }}"></script>
    <script src="{{ URL::to('js/jquery.js') }}"></script>
    <script src="{{ URL::to('js/jquery-ui.js') }}"></script>
    <script src="{{ URL::to('js/npm.js') }}"></script>
    @yield('scripts')
</body>
</html>