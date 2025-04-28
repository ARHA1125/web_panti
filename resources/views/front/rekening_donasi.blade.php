@extends('partials.front')
@section('title', 'Form Donasi')
@section('content')

<div class="container py-5">
    <h2 class="mb-4 text-center">Form Donasi</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('front.donasi.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nominal" class="form-label">Nominal Donasi</label>
                <input type="number" name="nominal" class="form-control" placeholder="Masukkan nominal donasi" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="2" placeholder="Masukkan alamat lengkap" required></textarea>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukkan nomor telepon" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan (Opsional)</label>
            <textarea name="keterangan" class="form-control" rows="2" placeholder="Tulis keterangan (opsional)"></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-3">Kirim Donasi</button>
    </form>
</div>

@endsection
