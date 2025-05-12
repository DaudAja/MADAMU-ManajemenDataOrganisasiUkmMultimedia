@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="mb-2 text-titlecase mb-2">Pengguna</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-start">
            <a href="{{ route('user.create') }}" class="btn btn-outline-success">
                <i class="typcn typcn-plus"></i> Tambah Pengguna
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                        <thead>
                            <tr>
                                <th class="ms-5">ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $us)
                                <tr>
                                    <td>{{ $us->id }}</td>
                                    <td>{{ $us->username }}</td>
                                    <td>{{ $us->email }}</td>
                                    {{-- <td>{{ $us->password }}</td> --}}
                                    <td>{{ $us->role }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('user.edit', $us->id) }}"
                                               class="btn btn-success btn-sm btn-icon-text me-3">
                                                Edit
                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                            </a>
                                            <form action="{{ route('user.destroy', $us->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                                                    Hapus
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($user->isEmpty())
                        <div class="text-center py-3">Tidak ada data user.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
