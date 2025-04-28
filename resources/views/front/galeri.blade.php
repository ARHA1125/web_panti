@extends('partials.front')
@section('title', 'Galeri')
@section('content')

<main id="main" class="my-5">

<section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Galeri</p>
                </header>

        <div class="row">
            @forelse ($galleries as $item)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada foto galeri.</p>
            @endforelse
        </div>
    </div>
</main>

@endsection