@extends('layouts.master')

@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Edit Kegiatan</h5>
  </div>

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Edit Kegiatan</h4>

            {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


          <form class="forms-sample" action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="nama_kegiatan">Nama Kegiatan</label>
              <input type="text" class="form-control" name="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" required>
            </div>

            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" value="{{ $kegiatan->deskripsi }}" required>
            </div>

            <div class="form-group">
              <label for="lokasi">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" value="{{ $kegiatan->lokasi }}" required>
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="{{ $kegiatan->tanggal }}" required>
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-success me-2">Perbarui</button>
              <a href="{{ route('kegiatan.index') }}" class="btn btn-danger me-2">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
