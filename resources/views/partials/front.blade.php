<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="/asset/img/apple-touch-icon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="tw-head">
            <div class="container">
                <nav class="navbar navbar-right"> 
                    <a class="navbar-brand tw-nav-brand d-flex align-items-center" href="index.html">
                        <img src="{{ asset('/asset/img/logohmn.png') }}" width="70" height="70" alt="Muhammadiyyah Centre Children">
                        <div class="ms-2">
                            <span class="d-block fw-bold" style="font-size: 24px;">Muhammadiyyah</span>
                            <span class="d-block" style="font-size: 16px; text-transform: uppercase; letter-spacing: 1px;">
                                Chidren Center Pasirian
                            </span>
                        </div>
                    </a>
                    

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto " href="{{ route('beranda') }}">Beranda</a></li>
                            <hr>
                            <li><a class="nav-link scrollto" href="{{ url('/#about') }}">Tentang Kami</a></li>                
                            <hr>
                            <li><a class="nav-link" href="{{ route('anak-asuh') }}">Anak Asuh</a></li>
                            <hr>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Donasi
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('front.donasi.form') }}">Verifikasi Donasi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('validasi_donasi') }}">Rekening Donasi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('laporan_donasi') }}">Laporan Donasi</a></li>
                                </ul>
                            </li>
                            <hr>
                            <li><a class="nav-link" href="{{ route('kepengurusan') }}">Kepengurusan</a></li>
                            <hr>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Konten
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('show-blog') }}">Blog</a></li>
                                    <li><a class="dropdown-item" href="{{ route('galeri') }}">Galeri</a></li>
                                </ul>
                            </li>
                            <hr>
                            <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Kontak</a></li>
                            <hr>

                        </ul>

                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                </nav>
                <!-- .navbar -->
            </div>
    </header>
    <!-- End Header -->
    <div class="content">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-newsletter">
            <div class="container">


            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>MuhammadiyyahCentreChildern</span></strong>. All Rights Reserved
                </div>

            </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('asset/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    @stack('style')
    @stack('js')
</body>

</html>
