@extends('partials.front')
@section('title', 'Kepengurusan')
@section('content')

    <main id="main">

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Kepengurusan</p>
                </header>

                <div class="row gy-4">
    @foreach ($managements as $management)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
                <div class="member-img" style="width: 100%; aspect-ratio: 1 / 1; overflow: hidden;">
                    <img src="{{ asset('storage/' . $management->photo) }}" 
                         style="width: 100%; height: 100%; object-fit: cover;" 
                         alt="{{ $management->name }}">
                </div>     
                <style>
                    .social {
                        background: linear-gradient(135deg, #e0f2fe, #f3e8ff);
                        padding: 20px;
                        border-radius: 20px;
                        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
                        text-align: center;
                        max-width: 100%; /* ubah dari 300px */
                        margin: 0; /* hilangkan auto centering */
                        flex: 1; /* biar fleksibel lebar dengan sisa ruang */
                    }
                    .social hr {
                        border: none;
                        border-top: 3px solid #60a5fa;
                        width: 50px;
                        margin: 0 auto 15px auto;
                    }
                    .social p:first-of-type {
                        font-size: 1.5rem;
                        font-weight: bold;
                        color: #1e40af !important;
                    }
                    .social p:last-of-type {
                        font-size: 1rem;
                        color: #7e22ce !important;
                    }
                </style>
                    <div class="social m-0">
                        <hr>
                        <p><b>{{ $management->name }}</b></p>
                        <p>{{ $management->position }}</p>
                    </div>
            </div>
        </div>
    @endforeach
</div>

            </div>
        </section>
        <!-- End Team Section -->
        </main><!-- End #main -->
@endsection