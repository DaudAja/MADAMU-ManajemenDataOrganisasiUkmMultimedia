<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - MADAMU</title>
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-start py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <img src="{{ asset('assets/images/download.svg') }}" alt="MADAMU Logo">
              </div>
              <div class="auth-form-light text-center mt-0 py px-4 px-sm-5">
                  <h4>Masuk ke akun anda</h4>
              </div>
              <form method="POST" action="{{ route('login') }}" class="pt-3">
                @csrf
                {{-- @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $item )
                    <li>{{ item }}</li>
                    @endforeach
                </ul>
                @endif --}}

                {{-- <div class="form-group mb-3">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="masukkan username" required>
                </div> --}}

                <div class="form-group mb-3">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="masukkan email" required value="{{ old('email') }}">
                </div>

                <div class="form-group mb-4">
                  <label for="password">Kata sandi</label>
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="masukkan kata sandi" required>
                </div>

                <div class="mt-3 d-grid">
                  <button type="submit" class="btn btn-danger btn-lg fw-bold">MASUK</button>
                </div>

                {{-- <div class="text-center mt-4">
                  <small>Belum punya akun? <a href="/register" class="text-danger">Contact Admin</a></small>
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
</body>

</html>
