@extends('web-layout.main')

@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- Carousel wrapper -->
    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-slide" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
        </ol>
        <!-- Inner -->
        <div class="carousel-inner">
            <!-- carousel item -->
            <div class="carousel-item active" data-bgimage="url(assets/img/slider/4.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white">
                            <div class="row align-items-center">
                                <div class="col-lg-6 offset-lg-1 mb-sm-30">
                                    <h3 class="id-color wow fadeInUp " data-wow-delay=".3s">Our Specials</h3>
                                    <h1 class="s1 wow fadeInUp" data-wow-delay=".6s">Premiun Authentic Coffee</h1>
                                    <a href="#section-artists" class="btn-border wow fadeInUp" data-wow-delay="1.1s">Explore Menu</a>
                                </div>
                                <div class="col-lg-4">
                                    <p class="wow fadeInRight" data-wow-delay="1s">Stradale is a exclusive website template specially made for Cafe and Coffe Shops. Made using only the finest coding dan design practices. Get Stradale now!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
            <!-- carousel item -->
            <div class="carousel-item" data-bgimage="url(assets/img/slider/5.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white">
                            <div class="row align-items-center">
                                <div class="col-lg-6 offset-lg-1 mb-sm-30">
                                    <h3 class="id-color wow fadeInUp " data-wow-delay=".3s">Fresh Bean</h3>
                                    <h1 class="s1 wow fadeInUp" data-wow-delay=".6s">For Great Coffee Taste</h1>
                                    <a href="#section-artists" class="btn-border wow fadeInUp" data-wow-delay="1.1s">Explore Menu</a>
                                </div>
                                <div class="col-lg-4">
                                    <p class="wow fadeInRight" data-wow-delay="1s">Stradale is a exclusive website template specially made for Cafe and Coffe Shops. Made using only the finest coding dan design practices. Get Stradale now!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
        </div>
        <!-- Inner -->
        <!-- Controls -->
        <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <a href="#section-welcome" class="mouse-icon-click scroll-to wow fadeInUp" data-wow-delay="2s">
            <span class="mouse fadeScroll relative" data-scroll-speed="2">
                <span class="scroll"></span>
            </span>
        </a>
    </section>
    <!-- Carousel wrapper -->
    <section id="section-welcome" aria-label="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">This is</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Our Story</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="1s">Lorem ipsum aute enim pariatur ea culpa nulla ut laborum sint nisi laborum culpa ea enim do qui ea deserunt amet proident cillum tempor fugiat magna aliquip sed cillum ullamco sit adipisicing ut velit nulla aliqua.</p>
                </div>

                <div class="col-md-6">
                    <div class="p-4">
                        <div class="row g-4">
                            <!-- gallery item begin -->
                            <div class="col-md-6">
                                <div class="de-image-hover">
                                    <a href="assets/img/gallery/1.jpg" class="image-popup">
                                        <span class="dih-title-wrap">
                                            <span class="dih-title">Fresh Ingredients</span>
                                            <span class="dih-wm">01</span>
                                        </span>
                                        <span class="dih-overlay"></span>
                                        <img src="assets/img/gallery/1.jpg" class="lazy img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- gallery item close -->
                            <!-- gallery item begin -->
                            <div class="col-md-6">
                                <div class="de-image-hover">
                                    <a href="assets/img/gallery/2.jpg" class="image-popup">
                                        <span class="dih-title-wrap">
                                            <span class="dih-title">Authentic Taste</span>
                                            <span class="dih-wm">02</span>
                                        </span>
                                        <span class="dih-overlay"></span>
                                        <img src="assets/img/gallery/2.jpg" class="lazy img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- gallery item close -->
                            <!-- gallery item begin -->
                            <div class="col-md-6">
                                <div class="de-image-hover">
                                    <a href="assets/img/gallery/3.jpg" class="image-popup">
                                        <span class="dih-title-wrap">
                                            <span class="dih-title">Cozy Atmosphere</span>
                                            <span class="dih-wm">03</span>
                                        </span>
                                        <span class="dih-overlay"></span>
                                        <img src="assets/img/gallery/3.jpg" class="lazy img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- gallery item close -->
                            <!-- gallery item begin -->
                            <div class="col-md-6">
                                <div class="de-image-hover">
                                    <a href="assets/img/gallery/4.jpg" class="image-popup">
                                        <span class="dih-title-wrap">
                                            <span class="dih-title">Live Music</span>
                                            <span class="dih-wm">04</span>
                                        </span>
                                        <span class="dih-overlay"></span>
                                        <img src="assets/img/gallery/4.jpg" class="lazy img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- gallery item close -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-specials" class="jarallax" aria-label="section">
        <img class="jarallax-img" src="assets/img/background/7.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 offset-md-1 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Specials</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Of The Day</h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="1s">
                        <h3>Classic Cappuccino </h3>
                        <p>Composed of a single espresso shot and hot milk, with the surface topped with foamed milk. Prepared with an espresso machine.</p>
                        <a href="menu.html" class="btn-border wow fadeInUp" data-wow-delay="1.1s">View All Menu</a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="image-with-counter">
                        <img class="img-1 img-fluid wow zoomIn" src="assets/img/misc/1.png" alt="">
                        <div class="div-1 wow zoomIn" data-wow-delay=".5s">
                            <div class="de_count">
                            <h3><span class="timer" data-to="600" data-speed="3000">0</span></h3>
                            <h5 class="id-color">Sold Today</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-location" aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-sm-30 text-center">
                        <i class="icon_pin_alt fontsize48 id-color mb20"></i>
                        <h3>Location</h3>
                        08 W 36th St, New York, NY 10001
                    </div>

                    <div class="col-md-4 mb-sm-30 text-center">
                        <i class="icon_mug fontsize48 id-color mb20"></i>
                        <h3>We're Open</h3>
                        Weekdays 08:00 - 22:00. Weekends 08:00 - 24:00.
                    </div>

                    <div class="col-md-4 mb-sm-30 text-center">
                        <i class="icon_mail_alt fontsize48 id-color mb20"></i>
                        <h3>Contact Us</h3>
                        P: +1 333 1000 2000. E: contact@example.com.
                    </div>
                </div>
            </div>
        </section>
    <section id="section-blog" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/8.jpg" alt="" />
        <div class="container">
            <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="de-title">
                            <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Latest</span></h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".75s">Blog</h2>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="d-items">
                            <div class="card-image-1 mod-b">
                                <a href="blog-single.html" class="d-text">
                                    <div class="d-inner">
                                        <span class="atr-date">Dec 10, 2021</span>
                                        <h3>This Will Fundamentally Change the Way You Look at Coffee</h3>
                                        <h5 class="d-tag">all about coffee</h5>
                                    </div>
                                </a>
                                <img src="assets/img/blog/1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="d-items">
                            <div class="card-image-1 mod-b">
                                <a href="blog-single.html" class="d-text">
                                    <div class="d-inner">
                                        <span class="atr-date">Dec 10, 2021</span>
                                        <h3>7 Cult-Favorite Coffee Products You Should Know</h3>
                                        <h5 class="d-tag">all about coffee</h5>
                                    </div>
                                </a>
                                <img src="assets/img/blog/2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="d-items">
                            <div class="card-image-1 mod-b">
                                <a href="blog-single.html" class="d-text">
                                    <div class="d-inner">
                                        <span class="atr-date">Dec 10, 2021</span>
                                        <h3>14 Unbelievable Things You Never Knew About Coffee</h3>
                                        <h5 class="d-tag">all about coffee</h5>
                                    </div>
                                </a>
                                <img src="assets/img/blog/3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="d-items">
                            <div class="card-image-1 mod-b">
                                <a href="blog-single.html" class="d-text">
                                    <div class="d-inner">
                                        <span class="atr-date">Dec 10, 2021</span>
                                        <h3>The Best Type of Coffee for Every Zodiac Sign</h3>
                                        <h5 class="d-tag">all about coffee</h5>
                                    </div>
                                </a>
                                <img src="assets/img/blog/4.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="d-items">
                            <div class="card-image-1 mod-b">
                                <a href="blog-single.html" class="d-text">
                                    <div class="d-inner">
                                        <span class="atr-date">Dec 10, 2021</span>
                                        <h3>Some Feel-Good News About Coffee to Brighten Your Day</h3>
                                        <h5 class="d-tag">all about coffee</h5>
                                    </div>
                                </a>
                                <img src="assets/img/blog/5.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-menu-title-2s" aria-label="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <blockquote class="wow fadeInUp" data-wow-delay=".5s">
                            It’s amazing how the world begins to change through the eyes of a cup of coffee.<span>Donna A. Favors</span>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-gallery" class="no-top no-bottom" aria-label="section">
            <div class="container-fluid">
                    <div id="gallery" class="row g-0">

                    <div class="col-md-2 item">
                        <div class="de-image-hover rounded">
                            <a href="assets/img/gallery/1.jpg" class="image-popup">                                
                                <span class="dih-title-wrap">
                                    <span class="dih-title">View</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="assets/img/gallery/1.jpg" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-2 item">
                        <div class="de-image-hover rounded">
                            <a href="assets/img/gallery/2.jpg" class="image-popup">                                
                                <span class="dih-title-wrap">
                                    <span class="dih-title">View</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="assets/img/gallery/2.jpg" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-2 item">
                        <div class="de-image-hover rounded">
                            <a href="assets/img/gallery/3.jpg" class="image-popup">                                
                                <span class="dih-title-wrap">
                                    <span class="dih-title">View</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="assets/img/gallery/3.jpg" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-2 item">
                        <div class="de-image-hover rounded">
                            <a href="assets/img/gallery/4.jpg" class="image-popup">                                
                                <span class="dih-title-wrap">
                                    <span class="dih-title">View</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="assets/img/gallery/4.jpg" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 item">
                        <div class="de-image-hover rounded">
                            <a href="assets/img/gallery/5.jpg" class="image-popup">                                
                                <span class="dih-title-wrap">
                                    <span class="dih-title">View</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="assets/img/gallery/5.jpg" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-2 item">
                        <div class="de-image-hover rounded">
                            <a href="assets/img/gallery/6.jpg" class="image-popup">                                
                                <span class="dih-title-wrap">
                                    <span class="dih-title">View</span>
                                </span>
                                <span class="dih-overlay"></span>
                                <img src="assets/img/gallery/6.jpg" class="lazy img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

</div>
<!-- content close -->
@endsection