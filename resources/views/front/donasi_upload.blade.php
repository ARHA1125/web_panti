@extends('partials.front')
@section('title', 'Konfirmasi Donasi')
@section('content')

<!-- ======= Banner Section ======= -->
<section class="page-banner" style="position: relative; height: 100vh; background: url('{{ asset('asset/img/mccbg.png') }}') center center no-repeat; background-size: cover;">
    <div class="overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0, 0, 0, 0.4);"></div>
    <div class="container d-flex align-items-center justify-content-center h-100">
        <h1 class="text-white text-center fw-bold display-3" style="z-index: 2; position: relative; text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
            Konfirmasi Donasi
        </h1>
        <a href="#main" class="scroll-down-icon" style="position: absolute; bottom: 30px; z-index: 2; text-decoration: none;">
            <i class="fas fa-chevron-down" style="font-size: 2rem; color: white; animation: bounce 2s infinite;"></i>
        </a>
    </div>
</section>

<style>
    @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0); 
    }
    40% {
        transform: translateY(10px); 
    }
    60% {
        transform: translateY(5px); 
    }
}
</style>
<!-- ======= End Banner Section ======= -->

<div class="container py-5">
    <h3 class="mb-4 text-center">Konfirmasi Donasi</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-4">
        <h5>Silakan transfer ke rekening berikut:</h5>
        <ul>
            <li>BNI - 123456789 a.n. Yayasan ABC</li>
            <li>Mandiri - 987654321 a.n. Yayasan ABC</li>
        </ul>
    </div>
    <!-- QR Code di sebelah kanan -->
        <div class="col-md-8 d-flex justify-content-center flex-wrap">
            <div class="p-3">
                <img src="{{ asset('asset/img/qrcode.png') }}" class="img-fluid" style="max-width: 300px;" alt="QR Panti">
            </div>
            <div class="p-3">
                <img src="{{ asset('asset/img/qrcode.png') }}" class="img-fluid" style="max-width: 300px;" alt="QR Masjid">
            </div>
        </div>


    <form action="{{ route('donasi.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="foto" class="form-label">Upload Bukti Transfer</label>
            <input type="file" name="foto" class="form-control" required>
        </div>
    
        <button type="submit" class="btn btn-success w-100 py-3">Simpan Donasi</button>
    </form>
</div>

@endsection
