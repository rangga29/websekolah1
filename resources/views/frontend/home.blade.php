@extends('frontend.layouts.main')

@section('container')

    <!-- Slider Section -->
    <div class="slider-section slider-active section">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Single Slider -->
                <div class="swiper-slide animation-style-01 single-slider d-flex align-items-center"
                    style="background-image: url(frontend/images/slider/slider.jpg);">
                    <div class="container">
                        <div class="slider-content">
                            <h6 class="sub-title">Selamat Datang</h6>
                            <h1 class="main-title">SMP SANTA URSULA BANDUNG</h1>
                            <p>Entrepreneurship is Our Mindset</p>
                        </div>
                    </div>
                    <div class="slider-social">
                        <div class="container">
                            <div class="social-wrapper">
                                <p>Sosial Media:</p>
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slider -->
                <div class="swiper-slide animation-style-01 single-slider d-flex align-items-center"
                    style="background-image: url(frontend/images/slider/slider.jpg);">
                    <div class="container">
                        <div class="slider-content">
                            <h6 class="sub-title">Telah Dibuka</h6>
                            <h1 class="main-title">PPDB Tahun 2022/2023</h1>
                            <p>Jalur Prestasi & Reguler</p>
                            <a href="#" class="btn btn-slider">Website</a>
                        </div>
                    </div>
                    <div class="slider-social">
                        <div class="container">
                            <div class="social-wrapper">
                                <p>Sosial Media:</p>
                                <ul class="social">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="section section-padding-02 bg-grey">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h2 class="main-title">Agenda Kegiatan Sekolah</h2>
            </div>

            <div class="blog-wrapper">
                <div class="row gx-xxl-5">
                    <div class="col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog">
                                <div class="blog-date-meta">
                                    <span>
                                        <strong>24</strong> Feb
                                    </span>
                                    <div class="meta">
                                        <p class="author">By: OSIS</p>
                                        <ul>
                                            <li>Link Zoom</li>
                                            <li>Google Form</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="blog-details-left-sidebar.html">
                                        Sosialisasi Kegiatan OSIS
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog">
                                <div class="blog-date-meta">
                                    <span>
                                        <strong>24</strong> Feb
                                    </span>
                                    <div class="meta">
                                        <p class="author">By: OSIS</p>
                                        <ul>
                                            <li><a href="#">Link Zoom</a></li>
                                            <li><a href="#">Google Form</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="blog-details-left-sidebar.html">
                                        Sosialisasi Kegiatan OSIS
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog">
                                <div class="blog-date-meta">
                                    <span>
                                        <strong>24</strong> Feb
                                    </span>
                                    <div class="meta">
                                        <p class="author">By: OSIS</p>
                                        <ul>
                                            <li>Link Zoom</li>
                                            <li>Google Form</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="blog-details-left-sidebar.html">
                                        Sosialisasi Kegiatan OSIS Semester 2
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Section -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                <h2 class="main-title">Berita & Artikel Terbaru</h2>
            </div>

            <div class="courses-wrapper">
                <div class="row gx-xxl-5">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Courses -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html">
                                    <img src="frontend/images/courses/courses-1.jpg" alt="courses">
                                </a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <p class="author">By: <a href="#">Ryan Patterson</a></p>
                                    <h4 class="title"><a href="courses-details-left-sidebar.html">
                                            Children Nutrition and Cooking
                                        </a>
                                    </h4>
                                    <ul class="meta">
                                        <li>20 Desember 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Courses -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="frontend/images/courses/courses-2.jpg"
                                        alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <p class="author">By: <a href="#">Ryan Patterson</a></p>
                                    <h4 class="title"><a href="courses-details-left-sidebar.html">
                                            Children Nutrition and Cooking
                                        </a>
                                    </h4>
                                    <ul class="meta">
                                        <li>20 Desember 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Courses -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="frontend/images/courses/courses-3.jpg"
                                        alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <p class="author">By: <a href="#">Ryan Patterson</a></p>
                                    <h4 class="title"><a href="courses-details-left-sidebar.html">
                                            Children Nutrition and Cooking
                                        </a>
                                    </h4>
                                    <ul class="meta">
                                        <li>20 Desember 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Courses -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="frontend/images/courses/courses-4.jpg"
                                        alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <p class="author">By: <a href="#">Ryan Patterson</a></p>
                                    <h4 class="title"><a href="courses-details-left-sidebar.html">
                                            Children Nutrition and Cooking
                                        </a>
                                    </h4>
                                    <ul class="meta">
                                        <li>20 Desember 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Courses -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="frontend/images/courses/courses-5.jpg"
                                        alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <p class="author">By: <a href="#">Ryan Patterson</a></p>
                                    <h4 class="title"><a href="courses-details-left-sidebar.html">
                                            Children Nutrition and Cooking
                                        </a>
                                    </h4>
                                    <ul class="meta">
                                        <li>20 Desember 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Single Courses -->
                        <div class="single-courses">
                            <div class="courses-images">
                                <a href="courses-details-left-sidebar.html"><img src="frontend/images/courses/courses-6.jpg"
                                        alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <div class="content-wrapper">
                                    <p class="author">By: <a href="#">Ryan Patterson</a></p>
                                    <h4 class="title"><a href="courses-details-left-sidebar.html">
                                            Children Nutrition and Cooking
                                        </a>
                                    </h4>
                                    <ul class="meta">
                                        <li>20 Desember 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="section section-padding bg-grey overflow-hidden">
        <div class="container">
            <div class="about-wrapper">
                <div class="row align-items-center gx-xxl-5">
                    <div class="col-lg-5">
                        <!-- About Images -->
                        <div class="about-images">
                            <img src="frontend/images/shape/shape-2.png" alt="shape" class="shape">
                            <div class="images">
                                <img src="frontend/images/about.jpg" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <!-- About Content -->
                        <div class="about-content bg-white">
                            <img class="shape" src="frontend/images/shape/shape-1.png" alt="shape">
                            <div class="content-wrapper">
                                <h2 class="main-title">Sambutan <br>Kepala Sekolah</h2>
                                <span class="count">Tjio Dedy, S.Pd</span>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting standard dummy text ever
                                    since the 150 when an unknown printe specimen book has survived centuries. </p>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting standard dummy text ever
                                    since the 150 when an unknown printe specimen book has survived centuries.</p>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting standard dummy text ever
                                    since the 150 when an unknown printe specimen book has survived centuries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="section section-padding">
        <div class="container">
            <div class="features-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Feature -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <span><i class="flaticon-lunges"></i></span>
                            </div>
                            <div class="feature-content">
                                <div class="content-wrapper">
                                    <h4 class="title"><a href="#">6 Nilai Serviam</a></h4>
                                    <p>Lorem Ipsum is simply dummy themes industryes psum has been them industry the loep
                                        into type setting.</p>
                                </div>
                                <a href="#" class="arrow"><i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Feature -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <span><i class="flaticon-lotus"></i></span>
                            </div>
                            <div class="feature-content">
                                <div class="content-wrapper">
                                    <h4 class="title"><a href="#">Visi & Misi</a></h4>
                                    <p>Lorem Ipsum is simply dummy themes industryes psum has been them industry the loep
                                        into type setting.</p>
                                </div>
                                <a href="#" class="arrow"><i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Feature -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <span><i class="flaticon-computer"></i></span>
                            </div>
                            <div class="feature-content">
                                <div class="content-wrapper">
                                    <h4 class="title"><a href="#">Entrepreneurship</a></h4>
                                    <p>Lorem Ipsum is simply dummy themes industryes psum has been them industry the loep
                                        into type setting.</p>
                                </div>
                                <a href="#" class="arrow"><i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="section section-padding testimonial-section testimonial-active">

        <img class="shape-01 animation-down" src="frontend/images/shape/shape-5.png" alt="Shape">
        <img class="shape-02 animation-up" src="frontend/images/shape/shape-6.png" alt="Shape">

        <div class="container">

            <!-- Section Title -->
            <div class="section-title section-title-white">
                <h6 class="sub-title">happy students</h6>
                <h2 class="main-title">What Client Say About Us</h2>
            </div>

            <div class="testimonial-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Single Testimonial -->
                        <div class="single-testimonial swiper-slide">
                            <div class="testimonial-author">
                                <img src="frontend/images/author/author-01.jpg" alt="Author">
                                <i class="flaticon-left-quote"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing typesetting industry has been the industry's
                                standard dummy text ever ince the 1500s when unknown printer took a galley of type and
                                scrambled it to</p>
                            <h4 class="name">Pollock Austin</h4>
                            <span class="designation">UI/UX DESIGNER</span>
                        </div>

                        <!-- Single Testimonial -->
                        <div class="single-testimonial swiper-slide">
                            <div class="testimonial-author">
                                <img src="frontend/images/author/author-02.jpg" alt="Author">
                                <i class="flaticon-left-quote"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing typesetting industry has been the industry's
                                standard dummy text ever ince the 1500s when unknown printer took a galley of type and
                                scrambled it to</p>
                            <h4 class="name">Pollock Austin</h4>
                            <span class="designation">UI/UX DESIGNER</span>
                        </div>

                        <!-- Single Testimonial -->
                        <div class="single-testimonial swiper-slide">
                            <div class="testimonial-author">
                                <img src="frontend/images/author/author-03.jpg" alt="Author">
                                <i class="flaticon-left-quote"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing typesetting industry has been the industry's
                                standard dummy text ever ince the 1500s when unknown printer took a galley of type and
                                scrambled it to</p>
                            <h4 class="name">Pollock Austin</h4>
                            <span class="designation">UI/UX DESIGNER</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow">
            <div class="swiper-button-next"><i class="fa fa-long-arrow-right"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-long-arrow-left"></i></div>
        </div>
    </div>

    <!-- Download Section -->
    <div class="section section-padding">
        <div class="container">
            <div class="download-wrapper">
                <img class="shape-01" src="frontend/images/shape/shape-7.png" alt="Shape">
                <img class="shape-02" src="frontend/images/shape/shape-8.png" alt="Shape">

                <!-- Section Title -->
                <div class="section-title shape-none">
                    <h6 class="sub-title">mobile app available</h6>
                    <h2 class="main-title">Download our mobile <br> app. and start coaching anytime.</h2>
                </div>

                <!-- download App -->
                <div class="download-app">
                    <ul>
                        <li><a href="#"><img src="frontend/images/play-store.jpg" alt="Play Store"></a></li>
                        <li><a href="#"><img src="frontend/images/app-store.jpg" alt="App Store"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
