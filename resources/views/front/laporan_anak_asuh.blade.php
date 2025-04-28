@extends('partials.front')
@section('title', 'Laporan Anak Asuh')
@section('content')
<main id="main">

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Data Anak Asuh</p>
            </header>

    <!-- Form Pencarian dan Filter -->
    <div class="row mb-3">
        <div class="col-sm-6 d-flex justify-content-end"> <!-- flex-end untuk menjorokkan ke kanan -->
            <form action="{{ route('laporan.anak_asuh') }}" method="GET" class="d-flex align-items-center w-100"> <!-- w-100 untuk memastikan form penuh -->
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
    

    <!-- Tabel Daftar Anak Asuh -->
    <table id="example" class="table table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status Mukim</th>
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
            </tr>
            @endforeach
        </tbody>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();  // Menginisialisasi DataTables pada tabel dengan ID 'example'
            });
        </script>
        
        
    </table>
</div>
</section>
<!-- End Team Section -->
</main>
@endsection
