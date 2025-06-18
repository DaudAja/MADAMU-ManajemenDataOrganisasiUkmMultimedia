@extends('layouts.master')

@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="mb-2 text-titlecase mb-2">Tambah Divisi</h4>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Divisi</h4>

                  <form class="forms-sample" action="{{ route('divisi.store') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="nidn">Nama Divisi</label>
                        <input type="text" class="form-control" id="nama_divisi" placeholder="tambah divisi" name="nama_divisi">
                    </div>

                    <div class="mt-3">
                    <button type="submit" class="btn btn-success me-2">Simpan</button>
                     <a href="{{ route('divisi.index') }}" class="btn btn-danger me-2">
                     Kembali
                     </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@endsection
