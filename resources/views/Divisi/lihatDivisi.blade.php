@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="text-titlecase mb-1">Divisi</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-start">
            <a href="{{ route('divisi.create') }}" class="btn btn-outline-success">
                <i class="typcn typcn-plus"></i> Tambah Divisi
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
                                <th>Nama Divisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisi as $ds)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ds->nama_divisi }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('divisi.edit', $ds->id) }}"
                                               class="btn btn-success btn-sm btn-icon-text me-3">
                                                Edit
                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                            </a>
                                            <form action="{{ route('divisi.destroy', $ds->id) }}"
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

                    @if($divisi->isEmpty())
                        <div class="text-center py-3">Tidak ada data divisi.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
