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
    @guest
      <!--Header-->
      @include('header')
      <!--content loaded from the section-->
      @yield('content')
      <!--Footer-->
      @include('footer')
    <script>$(window).load(function () {
            $(".trigger_popup_fricc").click(function(){
                $('.hover_bkgr_fricc').show();
            });
            $('.hover_bkgr_fricc').click(function(){
                $('.hover_bkgr_fricc').hide();
            });
            $('.popupCloseButton').click(function(){
                $('.hover_bkgr_fricc').hide();
            });
        });</script>
      @endguest
    </body>
</html>
