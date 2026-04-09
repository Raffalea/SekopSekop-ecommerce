@extends('layouts.user')
@section('title', 'Dashboard User')
@section('content')

    <body>

        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->


        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->

        <!-- hero area -->
        <div class="hero-area hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-2 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">BUILDING MATERIAL SOLUTION</p>
                                <h1>Build Better</h1>
                                <div class="hero-btns">
                                    <a href="/user/shop" class="boxed-btn">Shop Now</a>
                                    <a href="/user/contact" class="bordered-btn">Explore Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero area -->

        <!-- features list section -->
        <div class="list-section pt-80 pb-80">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="content">
                                <h3>Free Shipping</h3>
                                <p>When order over $75</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <h3>24/7 Support</h3>
                                <p>Get support all day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="content">
                                <h3>Refund</h3>
                                <p>Get refund within 3 days!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end features list section -->

        <!-- product section -->
        <div class="product-section mt-150 mb-150">
            <div class="container">

                <!-- Title -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Our</span> Products</h3>
                            <p>Browse our latest building materials</p>
                        </div>
                    </div>
                </div>

                <!-- Product List -->
                <div class="row">

                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="single-product-item">

                                <!-- IMAGE -->
                                <div class="product-image">
                                    <a href="{{ route('user.product.show', $product->id) }}">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                    </a>
                                </div>

                                <!-- NAME -->
                                <h3>{{ $product->name }}</h3>

                                <!-- PRICE -->
                                <p class="product-price">
                                    <span>Per Item</span>
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>

                                <!-- BUTTON -->
                                <a href="{{ route('user.product.show', $product->id) }}" class="cart-btn">
                                    <i class="fas fa-eye"></i> View Details
                                </a>

                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        <!-- end product section -->

        {{-- <!-- cart banner section -->
        <section class="cart-banner pt-100 pb-100">
            <div class="container">
                <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-lg-6">
                        <div class="image">
                            <div class="price-box">
                                <div class="inner-price">
                                    <span class="price">
                                        <strong>30%</strong> <br> off per kg
                                    </span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/a.jpg') }}" alt="">
                        </div>
                    </div>
                    <!--Content Column-->
                    <div class="content-column col-lg-6">
                        <h3><span class="orange-text">Deal</span> of the month</h3>
                        <h4>Hikan Strwaberry</h4>
                        <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam
                            similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error
                            sit voluptatem accusant</div>
                        <!--Countdown Timer-->
                        <div class="time-counter">
                            <div class="time-countdown clearfix" data-countdown="2020/2/01">
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Days</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Hours</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Mins</div>
                                </div>
                                <div class="counter-column">
                                    <div class="inner"><span class="count">00</span>Secs</div>
                                </div>
                            </div>
                        </div>
                        <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end cart banner section -->

        <!-- testimonail-section -->
        <div class="testimonail-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('assets/img/avaters/avatar1.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Saira Hakim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "This platform really helps me find building materials quickly and efficiently. The
                                        interface is simple, and the product information is very clear. It saves me a lot of
                                        time."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('assets/img/avaters/avatar2.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>David Niph <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "This platform really helps me find building materials quickly and efficiently. The
                                        interface is simple, and the product information is very clear. It saves me a lot of
                                        time."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('assets/img/avaters/avatar3.png') }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        "I had a great experience using this website. The product list is well organized,
                                        and the checkout process is easy to understand. Highly recommended for anyone in
                                        need of building supplies."
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonail-section -->

        <!-- advertisement section -->
        <div class="abt-section mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="abt-bg">
                            <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="abt-text">
                            <p class="top-sub">Since Year 1999</p>
                            <h2>We are <span class="orange-text">Sekop Sekop</span></h2>
                            <p>
                                Sekop Sekop is your trusted partner for high-quality construction materials.
                                We provide a wide range of building needs, from basic tools to essential supplies,
                                to support your projects efficiently and reliably.
                            </p>
                            <p>
                                With a focus on quality and customer satisfaction, we help builders, contractors,
                                and individuals get the right materials at the right time.
                            </p>
                            <a href="about.html" class="boxed-btn mt-4">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end advertisement section -->

        <!-- shop banner -->
        {{-- <section class="shop-banner">
            <div class="container">
                <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
                <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
                <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
            </div>
        </section> --}}
        <!-- end shop banner -->

        <!-- latest news -->
        <div class="latest-news pt-150 pb-150">
            <div class="container">

                <!-- TITLE -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h2><span class="orange-text">Tips</span> & Guides</h2>
                            <p>
                                Discover useful tips and practical guides to help you choose the right building materials
                                for your projects. We provide clear and reliable information to support your decisions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- NEWS (TETAP 3 ITEM FIX) -->
                <div class="row">

                    @foreach ($news->take(3) as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-latest-news">

                                <a href="{{ route('user.news.show', $item->id) }}">
                                    <div class="latest-news-bg"
                                        style="background-image: url('{{ asset('storage/' . $item->image) }}');">
                                    </div>
                                </a>

                                <div class="news-text-box">
                                    <h3>
                                        <a href="{{ route('user.news.show', $item->id) }}">
                                            {{ $item->title }}
                                        </a>
                                    </h3>

                                    <p class="blog-meta">
                                        <span class="author">
                                            <i class="fas fa-user"></i> Admin
                                        </span>
                                        <span class="date">
                                            <i class="fas fa-calendar"></i>
                                            {{ $item->created_at->format('d F, Y') }}
                                        </span>
                                    </p>

                                    <p>
                                        {{ \Illuminate\Support\Str::limit($item->content, 120) }}
                                    </p>

                                    <a href="{{ route('user.news.show', $item->id) }}" class="read-more-btn">
                                        read more <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- BUTTON (INI YANG ILANG TADI) -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="/user/news" class="boxed-btn">More News</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- end latest news -->

        <!-- logo carousel -->
        {{-- <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="{{ asset('assets/img/company-logos/1.png')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ asset('assets/img/company-logos/2.png')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ asset('assets/img/company-logos/3.png')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ asset('assets/img/company-logos/4.png')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ asset('assets/img/company-logos/5.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- end logo carousel -->



        <!-- copyright -->
        {{-- <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        {{-- <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                            Reserved.<br>
                            Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                        </p> --}}
                    {{-- </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}} 
        <!-- end copyright -->
        {{-- 	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script> --}}

    </body>
