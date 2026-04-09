@extends('layouts.user')
@section('title', 'Single News User')
@section('content')

<body>
    
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
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
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Read the Details</p>
                        <h1>Single Article</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <div class="single-artcile-bg"></div>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2023</span>
                            </p>
                            <h2>The Importance of Choosing Quality Foundation Materials</h2>
                            <p>Building a dream home always starts from the ground up, namely the foundation. The foundation is the most crucial element in a building because it functions to support the entire structural load above it. Many people often focus too much on the beauty of interior design or the house facade, but neglect the quality of basic materials. In fact, using substandard building materials at this early stage can have fatal risks, ranging from cracked walls, soil settlement, to the risk of building collapse over a certain period of time.</p>
                            <p>To create a solid foundation, selecting materials such as cement, sand, and steel rebar should not be done carelessly. Make sure you use cement with high adhesive strength and threaded rebar with standard certifications to ensure tensile and compressive strength. This is where the importance of partnering with a reliable material provider comes in. Sekop Sekop is here to ensure that every grain of sand and bar of steel you use is of premium quality, so your building structure can withstand various weather conditions and soil movements.</p>
                            <p>Ultimately, investing more in high-quality basic materials is not a waste, but a smart move for long-term savings. Repairing structural damage caused by a weak foundation will cost significantly more than the price difference of the materials you pay upfront. Start your construction project on the right foot, and entrust your basic structural needs only to the best materials with proven quality.</p>
                        </div>

                        <div class="comments-list-wrap">
                            <h3 class="comment-count-title">3 Comments</h3>
                            <div class="comment-list">
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="{{asset('assets/img/avaters/avatar1.png')}}" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Jenny Joe <span class="comment-date">Jan 12, 2024</span> <a href="#">reply</a></h4>
                                        <p>A very enlightening article! I happen to have plans to start pouring the foundation for a two-story house next month. I completely agree that steel rebar must meet standard certifications to be safer in the long run.</p>
                                    </div>
                                    <div class="single-comment-body child">
                                        <div class="comment-user-avater">
                                            <img src="{{asset('assets/img/avaters/avatar3.png')}}" alt="">
                                        </div>
                                        <div class="comment-text-body">
                                            <h4>Simon Soe <span class="comment-date">Jan 13, 2024</span> <a href="#">reply</a></h4>
                                            <p>Absolutely right, Mrs. Jenny. I also always order basic needs like cement and steel from Sekop Sekop, the delivery is fast so the builders' project is never delayed.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="{{asset('assets/img/avaters/avatar2.png')}}" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Addy Aoe <span class="comment-date">Feb 02, 2024</span> <a href="#">reply</a></h4>
                                        <p>Does Sekop Sekop provide delivery for concrete sand and crushed stone by the truckload to out-of-town areas? I need materials for a warehouse project, please let me know. Thank you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-template">
                            <h4>Leave a comment</h4>
                            <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                            <form action="index.html">
                                <p>
                                    <input type="text" placeholder="Your Name">
                                    <input type="email" placeholder="Your Email">
                                </p>
                                <p><textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea></p>
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-section">
                        <div class="recent-posts">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li><a href="/user/singlenews">5 Tips for Choosing Anti-Slip Bathroom Floor Tiles.</a></li>
                                <li><a href="/user/singlenews">Fundamental Differences Between Red Bricks, Lightweight Blocks, and Concrete Blocks.</a></li>
                                <li><a href="/user/singlenews">How to Accurately Calculate Cement Requirements for Plastering.</a></li>
                                <li><a href="/user/singlenews">Understanding the Types of Mild Steel for Roof Trusses.</a></li>
                                <li><a href="/user/singlenews">Exterior Paint Color Inspirations for Extreme Weather.</a></li>
                            </ul>
                        </div>
                        <div class="archive-posts">
                            <h4>Archive Posts</h4>
                            <ul>
                                <li><a href="/user/singlenews">JAN 2024 (5)</a></li>
                                <li><a href="/user/singlenews">FEB 2024 (3)</a></li>
                                <li><a href="/user/singlenews">MAY 2024 (4)</a></li>
                                <li><a href="/user/singlenews">SEP 2023 (4)</a></li>
                                <li><a href="/user/singlenews">DEC 2023 (3)</a></li>
                            </ul>
                        </div>
                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="/user/singlenews">Cement</a></li>
                                <li><a href="/user/singlenews">Steel Rebar</a></li>
                                <li><a href="/user/singlenews">Lightweight Block</a></li>
                                <li><a href="/user/singlenews">Mild Steel</a></li>
                                <li><a href="/user/singlenews">Ceramic Tiles</a></li>
                                <li><a href="/user/singlenews">Wall Paint</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/sticker.js"></script>
    <script src="assets/js/main.js"></script> --}}

</body>