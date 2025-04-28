@extends('partials.admin')
@section('title', 'Anak Asuh')
@section('main')
<div class="container">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title border-bottom pb-2 mb-2">
                            <h4 class="mb-0">Daftar Anak Asuh</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="ph ph-house"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Anak Asuh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="row mb-3">
        <div class="col-sm-6">
            <a href="{{ route('anak_asuh.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-sm-6">
          <!-- Form Pencarian dan Filter -->
          <div class="d-flex justify-content-end">
            <form action="{{ route('anak_asuh.index') }}" method="GET" class="d-flex align-items-center">
                <select name="mukim_nonmukim" class="form-select form-select-sm me-2">
                    <option value="">Semua</option>
                    <option value="mukim" {{ request('mukim_nonmukim') == 'mukim' ? 'selected' : '' }}>Mukim</option>
                    <option value="non-mukim" {{ request('mukim_nonmukim') == 'non-mukim' ? 'selected' : '' }}>Non-Mukim</option>
                </select>
                
                <input type="text" name="search" class="form-control form-control-sm border-primary me-2" placeholder="Cari Nama..." value="{{ request('search') }}">
                
                <button type="submit" class="btn btn-primary btn-sm px-3 py-1 ms-2 d-flex align-items-center">
                    <i class="ph ph-magnifying-glass me-1"></i> Cari
                </button>
                
            </form>
        </div>
        
        
        </div>
    </div>

    <table id="example" class="table table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status Mukim</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anak_asuh as $key => $anak)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $anak->nama }}</td>
                <td>{{ $anak->tanggal_lahir }}</td>
                <td>{{ $anak->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ ucfirst($anak->mukim_nonmukim) }}</td>
                <td>
                    <a href="{{ route('anak_asuh.edit', $anak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('anak_asuh.destroy', $anak->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
