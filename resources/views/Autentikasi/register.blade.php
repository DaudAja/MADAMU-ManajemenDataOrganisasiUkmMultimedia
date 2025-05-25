{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-start py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('assets/images/download.svg') }}" alt="logo">
              </div>
              <div class="auth-form-light text-center mt-0 py px-4 px-sm-5">
                  <h4>Silahkan registrasi</h4>
              </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif


              <form class="user" action="{{ route('register') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="username" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-lg" placeholder="nama_lengkap" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="email" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control form-control-lg" placeholder="alamat" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor handphone</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control form-control-lg" placeholder="no_hp" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" placeholder="Ulangi password" required>
                </div>

                <div class="form-group">
                    <label for="divisi">Divisi</label>
                    <select name="divisi_id" required class="form-control">
                        <option value="">-- Pilih Divisi --</option>
                            @foreach($divisi as $dvs)
                        <option value="{{ $dvs->id }}">{{ $dvs->nama_divisi }}</option>
                @endforeach
                </select>
                </div>



  {{-- <div class="form-group">
    <label for="role">Role</label>
    <select name="role" id="role" class="form-control form-control-lg" required>
      <option value="">-- Pilih Role --</option>
      <option value="admin">Admin</option>
      <option value="ketua">Ketua</option>
      <option value="anggota">Anggota</option>
    </select>
  </div> --}}

                {{-- <div class="mt-3 d-grid gap-2">
                    <button class="btn btn-block btn-danger btn-lg fw-medium auth-form-btn">Simpan</button>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>  --}}
