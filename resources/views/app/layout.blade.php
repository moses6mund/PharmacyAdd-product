<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "Balance Debt System")</title>
    <link href="{{asset('admin_asset/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin_asset/css/bootstrap.min.css.map')}}" rel="stylesheet" >
    <link href="{{asset('admin_asset/css/bootstrap-grid.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin_asset/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-grid.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-grid.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-grid.rtl.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-grid.rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.min.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.rtl.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-reboot.rtl.min.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.min.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.rtl.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap-utilities.rtl.min.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap.css.map')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/bootstrap.css')}}" rel="stylesheet">
    <script src="{{asset('admin_asset/jquery/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('admin_asset/jquery/jquery-3.7.1.min.js')}}"></script>
  

  </head>
  <body>
    @include('include.header')
   @yield('content')
  </body>
</html>