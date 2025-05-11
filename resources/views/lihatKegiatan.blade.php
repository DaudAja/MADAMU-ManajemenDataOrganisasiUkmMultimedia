@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Kegiatan</h5>
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
                                <th>Nama Anggota</th>
                                <th>Nama kegiatan</th>
                                <th>Deskripsi</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatan as $kg)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @foreach ($kg->anggotas as $ang)

                                    <td>{{ $ang->nama_lengkap }}</td>
                                    @endforeach
                                    <td>{{ $kg->nama_kegiatan }}</td>
                                    <td>{{ $kg->deskripsi }}</td>
                                    <td>{{ $kg->lokasi }}</td>
                                    <td>{{ $kg->tanggal }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href=" "
                                               class="btn btn-success btn-sm btn-icon-text me-3">
                                                Edit
                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                            </a>

                                            <form action=" "
                                                  method="POST"
                                                  onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($kegiatan->isEmpty())
                        <div class="text-center py-3">Tidak ada data kegiatan.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
