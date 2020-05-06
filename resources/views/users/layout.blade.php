<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
  <head>
    <meta charset="utf-8">
    <title>@yield('titolo')</title>
  </head>
  <body>
    @include ('partials.header')
    @include ('partials.main')
    @include ('partials.footer')
    @yield('script')
  </body>
</html>
