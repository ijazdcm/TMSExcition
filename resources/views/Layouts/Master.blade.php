<!DOCTYPE html>
<html lang="en">
 @include('Layouts.header')
<body class="bg-default">
    <body class="">
        @include('Layouts.nav')
        <div class="main-content">
          <!-- Navbar -->
           @include('Layouts.topnav')
          <!-- End Navbar -->
          <!-- Header -->
          <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            @yield('top-section')
          </div>
          {{-- @yield('dashbar') --}}
            <div class="container">
                @yield('content');
            </div>
          </div>
        </div>
  <!--   Core   -->
  <script src="{{asset('argon/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
