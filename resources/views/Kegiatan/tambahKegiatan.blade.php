@extends('layouts.master')


@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="mb-2 text-titlecase mb-2">Tambah kegiatan</h4>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah kegiatan</h4>

                  <form class="forms-sample" action="{{ route('kegiatan.store') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="nidn">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama_kegiatan" placeholder="tambah kegiatan" name="nama_kegiatan">
                    </div>

                    <div class="form-group">
                        <label for="nidn">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi">
                    </div>

                    <div class="form-group">
                        <label for="nidn">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="lokasi" name="lokasi">
                    </div>

                    <div class="form-group">
                        <label for="nidn">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal">
                    </div>

                    <div class="mt-3">
                    <button type="submit" class="btn btn-success me-2">Simpan</button>
                     <a href="{{ route('kegiatan.index') }}" class="btn btn-danger me-2">
                     Kembali
                     </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@endsection
