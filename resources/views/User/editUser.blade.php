@extends('layouts.master')

@section('content')

<div class="content-wrapper">
  <div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Edit Pengguna</h5>
  </div>

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Edit Pengguna</h4>

          <form class="forms-sample" action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
            </div>

            {{-- <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" value="{{ $user->password }}" required>
              <small class="text-muted">* Ganti jika ingin ubah password</small>
            </div> --}}

            <div class="form-group">
              <label for="role">Role</label>
              <select name="role" class="form-select" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="ketua" {{ $user->role == 'ketua' ? 'selected' : '' }}>Ketua</option>
                <option value="anggota" {{ $user->role == 'anggota' ? 'selected' : '' }}>Anggota</option>
              </select>
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-success me-2">Perbarui</button>
              <a href="{{ route('user.index') }}" class="btn btn-danger me-2">Batal</a>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
