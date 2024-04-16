<!doctype html>
<html lang="en">
    @include('admin.partilas.head')

  <body class="vertical  light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif ">
    <div class="wrapper">
        @include('admin.partilas.navbar')
        @include('admin.partilas.sidebar')
        <main role="main" class="main-content">
            @yield('content')

          </main>

       <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partilas.scripts')
    <script>
        function confirmdelete(id){
            if(confirm('Are You Sure ?')){
                document.getElementById('form-'+id).submit()
            }
        }
      </script>
  </body>
</html>
