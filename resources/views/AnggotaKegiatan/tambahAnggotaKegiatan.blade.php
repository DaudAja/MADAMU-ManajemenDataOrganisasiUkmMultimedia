@extends('layouts.master')

@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Tambah Data Anggota Kegiatan</h5>
  </div>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Tambah Kehadiran Anggota</h4>

          {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif --}}

          <form class="forms-sample" action="{{ route('AnggotaKegiatan.store') }}" method="POST">
            @csrf

            <div class="form-group">
              <label for="anggota_id">Pilih Anggota</label>
              <select name="anggota_id" class="form-select" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach ($anggota as $a)
                  <option value="{{ $a->id }}">{{ $a->nama_lengkap }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="kegiatan_id">Pilih Kegiatan</label>
              <select name="kegiatan_id" class="form-select" required>
                <option value="">-- Pilih Kegiatan --</option>
                @foreach ($kegiatan as $k)
                  <option value="{{ $k->id }}">{{ $k->nama_kegiatan }}</option>
                @endforeach
              </select>
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-success me-2">Simpan</button>
              <a href="{{ route('AnggotaKegiatan.index') }}" class="btn btn-danger me-2">Kembali</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
