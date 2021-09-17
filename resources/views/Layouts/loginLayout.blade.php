<!DOCTYPE html>
<html lang="en">
 @include('Layouts.header')
 <body class="bg-default">
    @yield('login')
  <!--   Core   -->
  <script src="{{asset('argon/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
