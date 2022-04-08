@extends('web-layout.main')

@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section id="section-drinks" aria-label="section" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/1.jpg" alt="" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="de-title">
                        <div class="spacer-single"></div>
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

</div>
<!-- content close -->
@endsection