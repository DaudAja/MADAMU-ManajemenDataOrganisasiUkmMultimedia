@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="text-titlecase mb-1">Anggota Kegiatan</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-start">
            <a href="{{ route('AnggotaKegiatan.create') }}" class="btn btn-outline-success">
                <i class="typcn typcn-plus"></i> Tambah Anggota Kegiatan
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
                                <th>Nama Anggota </th>
                                <th>Nama Kegiatan </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggotaKegiatanList as $akg)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $akg->anggota->nama_lengkap ?? 'Belum ada data'}}</td>
                                    <td>{{ $akg->kegiatan->nama_kegiatan ?? 'Belum ada data'}}</td>
                                    <td>
                                            <form action="{{ route('AnggotaKegiatan.destroy', $akg->id) }}"
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

                    @if($anggotaKegiatanList->isEmpty())
                        <div class="text-center py-3">Tidak ada data anggota.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
