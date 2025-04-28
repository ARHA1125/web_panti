@extends('partials.admin')
@section('title', 'Data Donasi')
@section('main')

<div class="container">

    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title border-bottom pb-2 mb-2">
                            <h4 class="mb-0">Data Donasi</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="ph ph-house"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Donasi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="row mb-3">
        <div class="col-sm-6">
            <a href="{{ route('donasi.form') }}" class="btn btn-primary">Tambah Donasi</a>
        </div>
        <div class="col-sm-6">
            <!-- Optional: filter/pencarian -->
            <div class="d-flex justify-content-end">
                <form action="{{ route('donasi.index') }}" method="GET" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control form-control-sm border-primary me-2" placeholder="Cari Nama / Email..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary btn-sm px-3 py-1 ms-2 d-flex align-items-center">
                        <i class="ph ph-magnifying-glass me-1"></i> Cari
                    </button>
                </form>
            </div>
        </div>
    </div>

    <table class="table mt-3 table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nominal</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($donasis as $key => $donasi)
            <tr>
                <td>{{ $donasis->firstItem() + $key }}</td>
                <td>{{ $donasi->nama }}</td>
                <td>Rp{{ number_format($donasi->nominal, 0, ',', '.') }}</td>
                <td>{{ $donasi->alamat }}</td>
                <td>{{ $donasi->no_hp }}</td>
                <td>{{ $donasi->email }}</td>
                <td>{{ $donasi->keterangan ?? '-' }}</td>
                <td>{{ $donasi->created_at->format('d-m-Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">Belum ada donasi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-end mt-3">
        {{ $donasis->links() }}
    </div>
</div>
@endsection
