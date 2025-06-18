@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="text-titlecase mb-1">Kegiatan</h4>
        </div>
    </div>

    @if (Auth::user()->role === 'admin')
        <div class="row mb-3">
            <div class="col-md-12 d-flex justify-content-start">
                <a href="{{ route('kegiatan.create') }}" class="btn btn-outline-success">
                    <i class="typcn typcn-plus"></i> Tambah Kegiatan
                </a>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                        <thead>
                            <tr>
                                <th class="ms-5">ID</th>
                                {{-- <th>Nama Anggota</th> --}}
                                <th>Nama Kegiatan</th>
                                <th>Deskripsi</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $kg)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- @foreach ($kg->anggotas as $ang)
                                        <td>{{ $ang->nama_lengkap }}</td>
                                    @endforeach --}}
                                    <td>{{ $kg->nama_kegiatan }}</td>
                                    <td>{{ $kg->deskripsi }}</td>
                                    <td>{{ $kg->lokasi }}</td>
                                    <td>{{ $kg->tanggal }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if (in_array(Auth::user()->role, ['admin', 'ketua']))
                                                <a href="{{ route('kegiatan.edit', $kg->id) }}" class="btn btn-success btn-sm btn-icon-text me-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </a>
                                            @else
                                                <form action="{{ route('partisipasi.store') }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="kegiatan_id" value="{{ $kg->id }}">
                                                    <button type="submit" class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Pilih
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </button>
                                                </form>
                                            @endif

                                            @if (Auth::user()->role === 'admin')
                                                <form action="{{ route('kegiatan.destroy', $kg->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                                      style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                                                        Hapus
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($kegiatan->isEmpty())
                        <div class="text-center py-3">Tidak ada data kegiatan.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
