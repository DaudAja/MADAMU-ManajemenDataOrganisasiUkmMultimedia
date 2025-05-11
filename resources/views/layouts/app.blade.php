<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>

  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
</head>

<!-- partial:partials/_navbar.html -->
<body>
  <div class="container-scroller">
    @include('layouts.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
          @yield('content')
        <!-- partial:partials/_footer.html -->
        @include('layouts.footer')
        <!-- partial -->
      </div>
    </div>
  </div>

  <!-- base:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- Plugin js for this page-->
  <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
