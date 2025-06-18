@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h4 class="text-titlecase mb-1">Anggota</h4>
        </div>
    </div>

    {{-- @php dd(session()->all()) @endphp --}}

    @if (Auth::user()->role === 'admin')
    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-start">
            <a href="{{ route('anggota.create') }}" class="btn btn-outline-success">
                <i class="typcn typcn-plus"></i> Tambah Anggota
            </a>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive pt-3">
                    <table class="table table-striped project-orders-table">
                        <thead>
                            <tr>
                                <th class="ms-5">ID</th>

                                @if (Auth::user()->role !== 'ketua')
                                <th>Nama pengguna</th>
                                @endif

                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                {{-- <th>Nomor</th> --}}
                                <th>Divisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota as $agt)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @if (Auth::user()->role !== 'ketua')
                                        <td>{{ $agt->user->username ?? 'Belum ada user' }}</td>
                                    @endif
                                    <td>{{ $agt->nama_lengkap }}</td>
                                    <td>{{ $agt->alamat }}</td>
                                    {{-- <td>{{ $agt->no_hp }}</td> --}}
                                    <td>{{ $agt->divisi->nama_divisi ?? 'Belum ada divisi' }}</td>
                                    <td>
                                        @if (Auth::user()->role === 'ketua')
                                            <a href="{{ route('anggota.show', $agt->id) }}"
                                            class="btn btn-info btn-sm btn-icon-text me-2">
                                                Lihat
                                                <i class="typcn typcn-eye btn-icon-append"></i>
                                            </a>
                                        @endif

                                        @if (Auth::user()->role === 'admin')
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
                                        @endif

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
