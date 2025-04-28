@extends('partials.front')
@section('title', 'Muhammadiyyah Centre Chidren')
@section('content')

<script>
    document.querySelector('.btn-get-started').addEventListener('click', function(e) {
        e.preventDefault(); // Mencegah reload halaman
        document.querySelector('#about').scrollIntoView({ behavior: 'smooth' });
    });
</script>

    <!-- ======= Hero Section ======= -->
   <!-- Bagian Hero -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>
    <!-- End Hero -->

    <!-- Bagian About -->
<section id="about" class="about-section">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p>...</p>
    </div>
</section>

<style>
    /* Hero Section */
    #hero {
        width: 100%;
        height: 100vh;
        background: url("{{ asset('asset/img/mccbg.png') }}") no-repeat center center;
        background-size: cover;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Overlay */
    #hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    
    /* Konten Hero */
    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
    }
    
    /* Tombol */
    .btn-get-started {
        display: inline-block;
        padding: 10px 25px;
        background: #ff6600;
        color: white;
        font-size: 18px;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s;
    }
    
    .btn-get-started:hover {
        background: #cc5500;
    }
    
    /* About Section */
    .about-section {
        padding: 100px 0;
        text-align: center;
    }
    </style>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="justify-content-center:center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>
                                Tentang Kami 
                            </h2>
                            <p>
                               ...
                            </p>
                            <div class="text-center text-lg-start">

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
