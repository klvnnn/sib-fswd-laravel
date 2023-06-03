<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Arkatama Store</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1>Arkatama Store<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <div class="dropdown">
                        <a href="#" class="ms-4">Product</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Product Category</a></li>
                            <li><a href="#" class="dropdown-item">Product List</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="ms-4">Users</a>
                        <ul class="dropdown-menu">
                            <li><a href="/users" class="dropdown-item">Users Group</a></li>
                            <li><a href="#" class="dropdown-item">Users List</a></li>
                        </ul>
                    </div>
                    <li><a href="dashboard">Dashboard</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- ======= Homepage Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Welcome To<br>Arkatama Store</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Apa yang kamu cari ada disini!!!</p>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner" style="border-radius: 12px">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/store.jpg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                                    data-aos-delay="300">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider1.jpeg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                                    data-aos-delay="300">
                                </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider4.jpeg') }}" class="img-fluid" alt=""
                                    data-aos="zoom-out" data-aos-delay="300">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider2.jpeg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                                    data-aos-delay="300">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider3.jpeg') }}" class="img-fluid" alt=""
                                    data-aos="zoom-out" data-aos-delay="300">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('assets/img/left.png') }}" alt="">
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next"  data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('assets/img/right.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright justify-content-start d-flex mb-2">
                &copy; Copyright <strong><span>&nbsp; Kelvin Aulia Wilson</span></strong>. All Rights Reserved
            </div>
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- ===== Footer ===== -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
