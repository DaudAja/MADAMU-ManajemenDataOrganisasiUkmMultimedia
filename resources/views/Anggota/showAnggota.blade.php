@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Profil Anggota</h5>
  </div>

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">


          <div class="mb-1 row">
            <label class="col-sm-3 col-form-label text-start">Nama Lengkap</label>
            <div class="col-sm-9 col-form-label">:
              {{ $anggota->nama_lengkap }}
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label text-start">Alamat</label>
            <div class="col-sm-9 col-form-label">:
              {{ $anggota->alamat }}
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label text-start">Email</label>
            <div class="col-sm-9 col-form-label">:
              {{ $anggota->user->email }}
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label text-start">Nomor HP</label>
            <div class="col-sm-9 col-form-label">:
              {{ $anggota->no_hp }}
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label text-start">Divisi</label>
            <div class="col-2">:
              {{ $anggota->divisi->nama_divisi ?? '-' }}
            </div>
          </div>

          <div class="mt-4 row">
            <div class="">
              <a href="{{ route('anggota.index') }}" class="btn btn-danger">kembali</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
