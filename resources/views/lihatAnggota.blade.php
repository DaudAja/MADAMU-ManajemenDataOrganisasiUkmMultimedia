@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Anggota</h5>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-start">
            <a href="{{ route('anggota.create') }}" class="btn btn-outline-success">
                <i class="typcn typcn-plus"></i> Tambah Anggota
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
                                <th>Nama pengguna</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Nomor</th>
                                <th>Divisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota as $agt)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $agt->user->username ?? 'Belum ada user' }}</td>
                                    <td>{{ $agt->nama_lengkap }}</td>
                                    <td>{{ $agt->alamat }}</td>
                                    <td>{{ $agt->no_hp }}</td>
                                    <td>{{ $agt->divisi->nama_divisi ?? 'Belum ada divisi' }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('anggota.edit', $agt->id) }}"
                                               class="btn btn-success btn-sm btn-icon-text me-3">
                                                Edit
                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                            </a>
                                            <form action="{{ route('anggota.destroy', $agt->id) }}"
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

                    @if($anggota->isEmpty())
                        <div class="text-center py-3">Tidak ada data anggota.</div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
