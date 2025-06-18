@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row mb-3">
        <div class="col-xl-6">
            <h4 class="text-titlecase mb-3">Kegiatan yang Saya Ikuti</h4>
        </div>
    </div>

    {{-- Jika ada data kegiatan --}}
    <div class="card">
        <div class="table-responsive pt-3">
            @if(isset($kegiatanku) && !$kegiatanku->isEmpty())
                <table class="table table-striped project-orders-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatanku as $index => $kg)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $kg->nama_kegiatan }}</td>
                                <td>{{ $kg->deskripsi }}</td>
                                <td>{{ $kg->lokasi }}</td>
                                <td>{{ $kg->tanggal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center py-4">
                    <strong>Anda belum memilih kegiatan apapun.</strong>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

