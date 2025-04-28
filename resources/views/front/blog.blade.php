@extends('partials.front')
@section('title', 'Blog')
@section('content')
    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                <div class="row">
    @forelse ($data as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/blog/' . $item->file) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Blog image">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text small text-muted mb-1">
                        <i class="bi bi-person"></i> {{ $item->penulis }} <br>
                        <i class="bi bi-clock"></i>
                        <time datetime="{{ $item->tanggal }}">{{ strftime('%d %B %Y', strtotime($item->tanggal)) }}</time>
                    </p>
                    <p class="card-text flex-grow-1">
                        {{ Str::limit(strip_tags($item->konten), 100, '...') }}
                    </p>
                    <a href="{{ url('read-blog/' . $item->slug) }}" class="btn btn-primary mt-auto">Read More</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                Tidak ada blog yang ditemukan.
            </div>
        </div>
    @endforelse
</div>
<!-- End blog entries list -->
                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection