@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Edit Profile</h5>
  </div>

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Edit Profile</h4>

          <form class="forms-sample" action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

              <input type="hidden" class="form-control" name="id" value="{{ $anggota->id }}" required>
            <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap" value="{{ $anggota->nama_lengkap }}" required>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="{{ $anggota->alamat }}" required>
            </div>

            <div class="form-group">
              <label for="no_hp">Nomor HP</label>
              <input type="text" class="form-control" name="no_hp" value="{{ $anggota->no_hp }}" required>
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-success me-2">Perbarui</button>
              <a href="{{ route('profile.update') }}" class="btn btn-danger me-2">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
