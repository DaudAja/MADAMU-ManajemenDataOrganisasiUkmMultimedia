{{-- @extends('layouts.app')


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

                  <form class="forms-sample" action="{{ route('anggota.store') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="nidn">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="nama pengguna" name="username">
                    </div>

                    <div class="form-group">
                        <label for="nidn">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" placeholder="nama lengkap" name="nama_lengkap">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="alamat"  name="alamat">
                    </div>

                    <div class="form-group">
                      <label for="email">Nomor Telepon</label>
                      <input type="text" class="form-control" id="no_hp" placeholder="no handphone" name="no_hp">
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
@endsection --}}
