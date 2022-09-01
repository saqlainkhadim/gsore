<!doctype html>
<html>
@include('front.includes.head')
<body>
  @include('front.includes.header')
  @yield('content')
  @include('front.includes.footer')

  @yield('scripts')


</body>
</html>
