<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IamRoot</title>

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!--<link href="../css/bootstrap.min.css"> -->
</head>
    <body>
      <!--Header-->
      @include('header')
      <!--content loaded from the section-->
      @yield('content')
      <!--Footer-->
      @include('footer')
    </body>
</html>
