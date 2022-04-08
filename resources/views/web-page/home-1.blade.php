@extends('web-layout.main')

@section('content')
    
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- Carousel wrapper -->
    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
        </ol>
        <!-- Inner -->
        <div class="carousel-inner">
            <!-- carousel item -->
            <div class="carousel-item active" data-bgimage="url(assets/img/slider/1.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="id-color wow fadeInUp" data-wow-delay=".3s">Always</h3>
                                    <h1 class="wow fadeInUp mb-2" data-wow-delay=".6s">Fresh</h1>
                                    <div class="col-lg-6 offset-lg-3 mb30">
                                        <p class="wow fadeInUp" data-wow-delay="1s">Stradale is a exclusive website template specially made for Cafe and Coffe Shops. Made using only the finest coding dan design practices. Get Stradale now!</p>
                                    </div>
                                    <a href="#section-artists" class="btn-border wow fadeInUp" data-wow-delay="1.4s">Explore Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
            <!-- carousel item -->
            <div class="carousel-item" data-bgimage="url(assets/img/slider/2.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="id-color wow fadeInUp" data-wow-delay=".3s">Make Your</h3>
                                    <h1 class="wow fadeInUp mb-2" data-wow-delay=".6s">Story</h1>
                                    <div class="col-lg-6 offset-lg-3 mb30">
                                        <p class="wow fadeInUp" data-wow-delay="1s">Stradale is a exclusive website template specially made for Cafe and Coffe Shops. Made using only the finest coding dan design practices. Get Stradale now!</p>
                                    </div>
                                    <a href="#section-artists" class="btn-border wow fadeInUp" data-wow-delay="1.4s">Explore Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel item -->
            <!-- carousel item -->
            <div class="carousel-item" data-bgimage="url(assets/img/slider/3.jpg)">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="id-color wow fadeInUp" data-wow-delay=".3s">Authentic</h3>
                                    <h1 class="wow fadeInUp mb-2" data-wow-delay=".6s">Taste</h1>
                                    <div class="col-lg-6 offset-lg-3 mb30">
                                        <p class="wow fadeInUp" data-wow-delay="1s">Stradale is a exclusive website template specially made for Cafe and Coffe Shops. Made using only the finest coding dan design practices. Get Stradale now!</p>
                                    </div>
                                    <a href="#section-artists" class="btn-border wow fadeInUp" data-wow-delay="1.4s">Explore Menu</a>
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
                <div class="col-lg-6 offset-lg-3 col-md-12 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Welcome to</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Stradale</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="1s">Lorem ipsum aute enim pariatur ea culpa nulla ut laborum sint nisi laborum culpa ea enim do qui ea deserunt amet proident cillum tempor fugiat magna aliquip sed cillum ullamco sit adipisicing ut velit nulla aliqua.</p>
                </div>
            </div>
            <div class="spacer-single"></div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="de-banner text-center">
                        <img class="img-main" src="assets/img/misc/2.png" alt="">
                        <div class="div-content">
                            <h4>Mocha latte</h4>
                            <h3>Buy 1 <span class="id-color">Get 1</span></h3>
                            <a class="btn-border" href="#">Order Now</a>
                            <small>*Limited time offer</small>
                        </div>
                        <img class="img-bg" src="assets/img/misc/1.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="de-banner text-center">
                        <img class="img-main" src="assets/img/misc/3.png" alt="">
                        <div class="div-content">
                            <h4>Caramel late</h4>
                            <h3>Free <span class="id-color">Upsize</span></h3>
                            <a class="btn-border" href="#">Order Now</a>
                            <small>*Limited time offer</small>
                        </div>
                        <img class="img-bg" src="assets/img/misc/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-top no-bottom" aria-label="section">
        <div class="container-fluid">
            <div class="row g-0">
                <!-- gallery item begin -->
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
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
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
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
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
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
                <div class="col-md-3">
                    <div class="de-image-hover mod-a">
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
    </section>
    <section id="section-specials" aria-label="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 offset-lg-1 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Specials</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Of The Day</h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="1s">
                        <h3>Classic Cappuccino </h3>
                        <p>Composed of a single espresso shot and hot milk, with the surface topped with foamed milk. Prepared with an espresso machine.</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
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
    <section id="section-drinks" aria-label="section" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/1.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Drinks</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-drinks-menu" aria-label="section">
        <div class="container">
            <div class="row g-5 masonry">
                <div class="col-md-6 col-sm-12 col-xs-12 item">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                            <div class="c1">coffee</div>
                            <div class="c2">Medium<span>16 oz</span></div>
                            <div class="c3">Large<span>20 oz</span></div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Brewed coffee<i class="fa fa-thumbs-up" title="recommend"></i></div>
                            <div class="c2"><span class="cur">$</span>1.85</div>
                            <div class="c3"><span class="cur">$</span>2.35</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Cafe au lait</div>
                            <div class="c2"><span class="cur">$</span>2.65</div>
                            <div class="c3"><span class="cur">$</span>3.40</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">French press</div>
                            <div class="c2"><span class="cur">$</span>2.65</div>
                            <div class="c3"><span class="cur">$</span>3.40</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Iced coffee</div>
                            <div class="c2"><span class="cur">$</span>1.85</div>
                            <div class="c3"><span class="cur">$</span>2.35</div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                            <div class="c1">espresso</div>
                            <div class="c2">Medium<span>16 oz</span></div>
                            <div class="c3">Large<span>20 oz</span></div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Espresso</div>
                            <div class="c2"><span class="cur">$</span>1.75</div>
                            <div class="c3"><span class="cur">$</span>2.20</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Mocchiato</div>
                            <div class="c2"><span class="cur">$</span>1.95</div>
                            <div class="c3"><span class="cur">$</span>2.25</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Con panna<span>new</span></div>
                            <div class="c2"><span class="cur">$</span>1.95</div>
                            <div class="c3"><span class="cur">$</span>2.25</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Cafe latte</div>
                            <div class="c2"><span class="cur">$</span>3.15</div>
                            <div class="c3"><span class="cur">$</span>4.15</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Classic Cappucino<i class="fa fa-thumbs-up" title="recommend"></i></div>
                            <div class="c2"><span class="cur">$</span>2.90</div>
                            <div class="c3"><span class="cur">$</span>3.90</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Cappucino</div>
                            <div class="c2"><span class="cur">$</span>3.15</div>
                            <div class="c3"><span class="cur">$</span>4.15</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Mocha latte</div>
                            <div class="c2"><span class="cur">$</span>3.45</div>
                            <div class="c3"><span class="cur">$</span>4.35</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Caramel late</div>
                            <div class="c2"><span class="cur">$</span>3.45</div>
                            <div class="c3"><span class="cur">$</span>4.35</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Vanilla late</div>
                            <div class="c2"><span class="cur">$</span>3.45</div>
                            <div class="c3"><span class="cur">$</span>4.35</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Cafe miel</div>
                            <div class="c2"><span class="cur">$</span>3.85</div>
                            <div class="c3"><span class="cur">$</span>4.70</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Cafe americano</div>
                            <div class="c2"><span class="cur">$</span>2.25</div>
                            <div class="c3"><span class="cur">$</span>3.50</div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                            <div class="c1">non coffee</div>
                            <div class="c2">Medium<span>16 oz</span></div>
                            <div class="c3">Large<span>20 oz</span></div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Hot tea</div>
                            <div class="c2"><span class="cur">$</span>1.85</div>
                            <div class="c3"><span class="cur">$</span>2.35</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Iced tea</div>
                            <div class="c2"><span class="cur">$</span>2.65</div>
                            <div class="c3"><span class="cur">$</span>3.40</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Steamer<span>new</span></div>
                            <div class="c2"><span class="cur">$</span>2.85</div>
                            <div class="c3"><span class="cur">$</span>3.85</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Hot chocolate<i class="fa fa-thumbs-up" title="recommend"></i></div>
                            <div class="c2"><span class="cur">$</span>2.85</div>
                            <div class="c3"><span class="cur">$</span>3.85</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Lemonade</div>
                            <div class="c2"><span class="cur">$</span>2.50</div>
                            <div class="c3"><span class="cur">$</span>3.50</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Fruit smoothie</div>
                            <div class="c2"><span class="cur">$</span>3.15</div>
                            <div class="c3"><span class="cur">$</span>4.15</div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                            <div class="c1">add ons</div>
                        </div>

                        <div class="spacer-half"></div>


                        <div class="menu-item">
                            <div class="c1">Pearl</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>1.15</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Almond</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>1.15</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Coffee Jelly</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>1.15</div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <section id="section-food" aria-label="section" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/2.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="de-title">
                        <h5 class="s1 wow fadeInUp" data-wow-delay=".5s"><span class="id-color-2">Favorite</span></h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s">Food</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-food-menu" aria-label="section">
        <div class="container">
            <div class="row g-5 masonry">
                <div class="col-md-6 col-sm-12 col-xs-12 item">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                            <div class="c1">breads</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>

                        <div class="menu-item">
                            <div class="c1">Plain bread</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Milk bread</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Sandwich bread</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Brown bread</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Garlic bread<i class="fa fa-thumbs-up" title="recommend"></i></div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Wheat bread</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Bannana bread</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">Burger bun</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 item">
                    <div class="menu-wrap">
                        <div class="menu-item thead">
                            <div class="c1">snacks</div>
                            <div class="c2"></div>
                            <div class="c3">Price</div>
                        </div>

                        <div class="spacer-half"></div>

                        <div class="menu-item">
                            <div class="c1">Chicken burger</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>4.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Chicken pizza</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>8.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Veg pizza<span>new</span></div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>6.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Chicken grilled pizza</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>8.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Veg grilled pizza</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>6.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Chicken sandwich</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>4.75</div>
                        </div>


                        <div class="menu-item">
                            <div class="c1">Veg sandwich</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>3.75</div>
                        </div>

                        <div class="menu-item">
                            <div class="c1">French fries</div>
                            <div class="c2"></div>
                            <div class="c3"><span class="cur">$</span>2.75</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-blog" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/3.jpg" alt="" />
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
        <section id="section-menu-title-2s" aria-label="section" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/4.jpg" alt="" />
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
</div>
<!-- content close -->
@endsection