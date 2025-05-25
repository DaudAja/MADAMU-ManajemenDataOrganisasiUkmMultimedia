@extends('layouts.app')


@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="mb-2 text-titlecase mb-2">Tambah Pengguna</h4>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Pengguna</h4>

                  <form class="forms-sample" action="{{ route('user.store') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="nidn">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="username" name="username">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="email"  name="email">
                    </div>

                    <div class="form-group">
                      <label for="email">Password</label>
                      <input type="text" class="form-control" id="password" placeholder="password" name="password">
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-select" required>
                            <option value="admin">Admin</option>
                            <option value="ketua">Ketua</option>
                            <option value="anggota">Anggota</option>
                        </select>
                    </div>
                    <div class="mt-3">
                    <button type="submit" class="btn btn-success me-2">Simpan</button>
                     <a href="{{ route('user.index') }}" class="btn btn-danger me-2">
                     Kembali
                     </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@endsection
