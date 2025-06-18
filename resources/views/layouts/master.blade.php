<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MADAMU</title>

  {{-- Base CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">

  {{-- Main CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
</head>

<body>
  <div class="container-scroller">

    {{-- Navbar --}}
    @include('layouts.navbar')

    <div class="container-fluid page-body-wrapper">

      {{-- Sidebar --}}
      @include('layouts.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">

          {{-- Success Message --}}
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          {{-- Error Message --}}
          @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          {{-- Validation Errors --}}
          @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          {{-- Konten Utama --}}
          @yield('content')

        </div>

        {{-- Footer --}}
        @include('layouts.footer')
      </div>

    </div>
  </div>

  {{-- Base JS --}}
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

  {{-- Plugins --}}
  <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>

  {{-- Core Template JS --}}
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>

  {{-- Custom JS --}}
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
