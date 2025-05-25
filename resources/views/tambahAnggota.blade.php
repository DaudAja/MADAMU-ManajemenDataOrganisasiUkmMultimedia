@extends('layouts.app')


@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Tambah Anggota</h5>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah anggota</h4>

                                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('anggota.store') }}" method="POST">
                  @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="nama_lengkap" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor handphone</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="no_hp" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                </div>

                    <div class="form-group">
                        <label for="divisi_id">Divisi</label>
                        <select name="divisi_id" class="form-select" required>
                            <option value="">Pilih Divisi</option>
                            @foreach ($divisi as $dvs)
                            <option value="{{ $dvs->id }}">{{ $dvs->nama_divisi }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                    <button type="submit" class="btn btn-success me-2">Simpan</button>
                     <a href="{{ route('anggota.index') }}" class="btn btn-danger me-2">
                     Kembali
                     </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
