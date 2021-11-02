<!DOCTYPE html>
<html lang="en">
 @include('Layouts.header')
<body class="bg-default">
        @include('Layouts.nav')
        <div class="main-content">
          <!-- Navbar -->
           @include('Layouts.topnav')
          <!-- End Navbar -->
          <!-- Header -->
          <div class="header bg-primary pb-8 pt-5 pt-md-6">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@yield('js')

</body>
</html>
