@extends('layouts.app')
@section('title', 'Yummy | Home ')
@section('content')


    {{-- header --}}
    @include('user.header')
    {{-- header --}}

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Imagane , Feel and Taste ...</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="btn-book-a-table">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/user/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url(assets/user/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Book a Table</h4>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/user/img/about-2.jpg" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Why Choose Yummy?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                                optio ad corporis.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Corporis voluptates officia eiusmod</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                        aliquip</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-gem"></i>
                                    <h4>Ullamco laboris ladore pan</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Labore consequatur incidid dolore</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="zoom-out">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Menu</h2>
                    <p>Check Our <span>Yummy Menu</span></p>
                </div>

                <ul id="menu" class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">

                    <li class="nav-item">
                        <div class="button-group filters-button-group">
                            <button class="nav-link show active" data-filter="*">
                                <h4>All Categories</h4>
                            </button>
                        </div>
                    </li><!-- End tab nav item -->
                    @foreach ($category as $data)
                        <li class="nav-item">
                            <div class="button-group filters-button-group">
                                <button class="nav-link" data-filter="{{ '.' . $data->filter }}">
                                    <h4>{{ $data->name }}</h4>
                                </button>
                            </div>
                        </li><!-- End tab nav item -->
                    @endforeach

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="row gy-5 iso mt-3">
                            @forelse ($products as $data)
                                <div class="col-lg-4 menu-item {{ $data->filter }}" data-category="{{ $data->filter }}">
                                    <a href="/uploads/products/img/{{ $data->image }}" class="glightbox"><img
                                            src="/uploads/products/img/{{ $data->image }}" class="menu-img img-fluid"
                                            alt="Not Found"></a>
                                    <h4>{{ $data->name }}</h4>
                                    <p class="price">
                                        {{ $data->price }} L.E
                                    </p>
                                    <a href="#" class="add-to-cart" title="Add to Cart">
                                        add to cart <i class="bi bi-cart"></i>
                                    </a>
                                </div><!-- Menu Item -->
                            @empty
                                <div class="alert alert-danger p-5">
                                    NO Products To View ...
                                </div>
                            @endforelse
                        </div>
                    </div><!-- End Starter Menu Content -->


                </div>

            </div>
        </section>
        <!-- End Menu Section -->



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>gallery</h2>
                    <p>Check <span>Our Gallery</span></p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-1.jpg"><img
                                    src="assets/user/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-2.jpg"><img
                                    src="assets/user/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-3.jpg"><img
                                    src="assets/user/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-4.jpg"><img
                                    src="assets/user/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-5.jpg"><img
                                    src="assets/user/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-6.jpg"><img
                                    src="assets/user/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-7.jpg"><img
                                    src="assets/user/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/user/img/gallery/gallery-8.jpg"><img
                                    src="assets/user/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->


    </main><!-- End #main -->

    {{-- footer --}}
    @include('user.footer')
    {{-- end footer --}}


@endsection
