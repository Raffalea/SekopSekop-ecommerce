@extends('layouts.user')
@section('title', 'news User')
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
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Information</p>
                            <h1>News Article</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- latest news -->
        <div class="latest-news mt-150 mb-150">
            <div class="container">

                <div class="row">
                    @forelse ($news as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-latest-news">

                                <!-- IMAGE -->
                                <a href="{{ route('user.news.show', $item->id) }}">
                                    <div class="latest-news-bg"
                                        style="background-image: url('{{ asset('storage/' . $item->image) }}');">
                                    </div>
                                </a>

                                <!-- CONTENT -->
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

                                    <p class="excerpt">
                                        {{ \Illuminate\Support\Str::limit($item->content, 120) }}
                                    </p>

                                    <a href="{{ route('user.news.show', $item->id) }}" class="read-more-btn">
                                        read more <i class="fas fa-angle-right"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No news available.</p>
                        </div>
                    @endforelse
                </div>

                <!-- PAGINATION -->
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="pagination-wrap">
                                    <ul>

                                        {{-- PREV --}}
                                        @if ($news->onFirstPage())
                                            <li><a href="#">Prev</a></li>
                                        @else
                                            <li>
                                                <a href="{{ $news->previousPageUrl() }}">Prev</a>
                                            </li>
                                        @endif

                                        {{-- NUMBER --}}
                                        @for ($i = 1; $i <= $news->lastPage(); $i++)
                                            <li>
                                                <a href="{{ $news->url($i) }}"
                                                    class="{{ $news->currentPage() == $i ? 'active' : '' }}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor

                                        {{-- NEXT --}}
                                        @if ($news->hasMorePages())
                                            <li>
                                                <a href="{{ $news->nextPageUrl() }}">Next</a>
                                            </li>
                                        @else
                                            <li><a href="#">Next</a></li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end latest news -->

        {{-- <!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel --> --}}

        {{-- <!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer --> --}}

        <!-- copyright -->
        
        <!-- end copyright -->

        {{-- <!-- jquery -->
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
