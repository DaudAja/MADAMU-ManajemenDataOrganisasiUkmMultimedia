@extends('layouts.app')

@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Edit Anggota</h5>
  </div>

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Edit Anggota</h4>

          <form class="forms-sample" action="{{ route('anggota.update', $anggota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="username">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap" value="{{ $anggota->nama_lengkap }}" required>
            </div>

            <div class="form-group">
              <label for="email">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="{{ $anggota->alamat }}" required>
            </div>

            <div class="form-group">
              <label for="email">Nomor Hp</label>
              <input type="number" class="form-control" name="no_hp" value="{{ $anggota->no_hp }}" required>
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
              <button type="submit" class="btn btn-success me-2">Perbarui</button>
              <a href="{{ route('anggota.index') }}" class="btn btn-danger me-2">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
