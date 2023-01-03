<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPDB Wikrama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Wikrama</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active">Beranda</a>
                <a href="#kami" class="nav-item nav-link">Tentang Kami</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#jurusan" class="dropdown-item">Jurusan</a>
                        <a href="#testimoni" class="dropdown-item">Testimoni</a>
                        <a href="#kontak" class="dropdown-item">Hubungi Kami</a>
                    </div>
                </div>
                <a href="/login" class="nav-item nav-link">Login</a>
            </div>
            <a href="/register" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Daftar<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/Gedung.jpg">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">SMK Wikrama Bogor</h5>
                                <h1 class="display-3 text-white animated slideInDown">PPDB TP 2023-2024
                                    SMK Wikrama Bogor</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan
                                    cara klik PENDAFTARAN PPDB dibawah ini!
                                    Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</p>
                                <a href="/register"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pendaftaran
                                    PPDB</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">MOTTO</h5>
                            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">AFIRMASI</h5>
                            <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">ATITUDE</h5>
                            <p>Aku ada lingkunganku bahagia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="kami">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/MMD03095.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                    <h1 class="mb-4">Selamat Datang Di PPDB SMK Wikrama Bogor</h1>
                    <h5 class="mb-4">Pembelajaran Tatap Muka Terbatas</h5>
                    <p class="mb-4">SMK Wikrama selalu menerapkan protokol kesehatan dengan ketat, jadi kamu gak
                        perlu khawatir lagi !</p>
                    <h5>SMK Unggul dan Berprestasi Nasional</h5>
                    <p class="mb-4">SMK Wikrama Bogor Satu dari 20 SMK Penerima Penghargaan "SMK Unggul dan
                        Berprestasi" di Indonesia dari KEMENDIKBUD</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category" id="jurusan">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Jurusan</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/DSC06940.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">PPLG</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/2.IMG_9963.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">DKV</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/DSC09099.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">TJKT</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/WIK01760.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">MPLB</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="testimoni">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-5">Menurut Para Alumni!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="img/585e4beacb11b227491c3399.png"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Akhmad Munito</h5>
                    <p>2000</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg
                            sangat
                            bermanfat dan akhlakul karimah bisa langsung bersaing ke dunia kerja di era modern
                            ini</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/585e4beacb11b227491c3399.png"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Kamaludin</h5>
                    <p>2016</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI
                            yang sangat
                            memudahkan siswa.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/585e4beacb11b227491c3399.png"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lutfi Hakim</h5>
                    <p>2011</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia
                            kerja,
                            melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-5">
                    <h4 class="text-white mb-3">Tautan</h4>
                    <a class="btn btn-link" href="#kami">Tentang Kami</a>
                    <a class="btn btn-link" href="#jurusan">Jurusan</a>
                    <a class="btn btn-link" href="#testimoni">Testimoni</a>
                </div>
                <div class="col-lg-4 col-md-5">
                    <h4 class="text-white mb-3">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Wangun
                        Kelurahan Sindangsari
                        Bogor Timur 16720</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0251-8242411</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>prohumasi@smkwikrama.net</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/smkwikrama/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@multimediawikrama7482"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/school/smkwikramabogor/mycompany/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8" id="kontak">
                    <h4 class="text-white mb-3">Hubungi Kami</h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5 mb-3" type="text"
                            placeholder="Nama Lengkap">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5 mb-3" type="text"
                            placeholder="Alamat Email">
                        <input class="form-control border-0 w-100 py-5 ps-4 pe-5" type="text"
                            placeholder="Pesan">
                        <button type="button" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Kirim Pesan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;Copyright © 2022 SMK Wikrama, All
                        Right
                        Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/mains.js"></script>
</body>

</html>
