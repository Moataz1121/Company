

<!doctype html>
<html lang="en">
    @include('admin.auth.partilas.head')

  <body class="light @if (LaravelLocalization::getCurrentLocale() == 'ar')
  rtl
@endif   ">
    @yield('content')

    @include('admin.auth.partilas.scripts')

  </body>
</html>
</body>
</html>
