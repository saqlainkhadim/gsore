@extends('front.layout.layout')
@section('content')
 <!-- :::::: Start Main Container Wrapper :::::: -->
 <main id="main-container" class="main-container">
        <!-- ::::::  Start Hero Section  ::::::  -->
        <div class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="{{URL::asset('front')}}/assets/img/hero/hero-home-1-img-1.jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Healthy & Affordable</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Organic <br>  Vegetables</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Small Changes Big Difference</h4>
                                    <a href="product-single-default.html" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="assets/img/hero/hero-home-1-img-2.jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Healthy & Affordable</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Organic <br>   fresh fruits</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Small Changes Big Difference</h4>
                                    <a href="product-single-default.html" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
        </div> <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner m-t-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="product-single-default.html" class="banner__link">
                                    <img src="{{URL::asset('front')}}/assets/img/banner/size-wide/banner-home-1-img-1-wide.jpg" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title  font--regular letter-spacing--4  text-center m-b-10">Green Vegetable</h6>
                                    <h2 class="banner__title banner__title--large font--medium letter-spacing--4  text-uppercase">100% ORGANIC</h2>
                                    <h6 class="banner__title font--regular letter-spacing--4  text-center m-b-20">Healthy Nutrition</h6>
                                    <div class="text-center">
                                        <a href="product-single-default.html" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Buy Now</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="product-single-default.html" class="banner__link">
                                    <img src="{{URL::asset('front')}}/assets/img/banner/size-wide/banner-home-1-img-2-wide.jpg" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-10">Fresh herbs</h6>
                                    <h2 class="banner__title banner__title--large letter-spacing--4 font--medium text-uppercase">SPINACH</h2>
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-20">Healthy Food</h6>
                                    <div class="text-center">
                                        <a href="product-single-default.html" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Buy Now</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Top categories</h5>
                            <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More categories <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__catagory">
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Pure egg Collection </a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-1.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-2.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Fresh Milk Collection</a>
                                    <span class="product__items--text">3 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-3.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">0 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-4.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Best beef Collection</a>
                                    <span class="product__items--text">3 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-5.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">0 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-6.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Vegetable Collection</a>
                                    <span class="product__items--text">3 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-7.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Fresh Carrot Collection</a>
                                    <span class="product__items--text">0 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-8.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Pure Masroom Collection</a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-9.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">
                                    <a href="product-single-default.html" class="product__link">Best Mashroom Collection</a>
                                    <span class="product__items--text">2 Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/category/category-home-1-img-10.jpg" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Catagory Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Top categories</h5>
                            <ul class="tablist tablist--style-blue tablist--style-gap-20 nav">
                                <li><a class="nav-link active" data-toggle="tab" href="#fruits">Fruites</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#milk">Milk</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#fish">Fish</a></li>
                            </ul>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content tab-animate-zoom">
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane show active" id="fruits">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Best red meat</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane" id="milk">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">

                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Best red meat</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                            <!-- Start Single Tab Item -->
                            <div class="tab-pane" id="fish">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Best red meat</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="product-single-default.html" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                        
                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

         <!-- ::::::  Start banner Section  ::::::  -->
         <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                <img src="{{URL::asset('front')}}/assets/img/banner/size-extra-large-wide/banner-home-1-img-1-extra-large-wide.jpg" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">SPECIAL DISCOUNT</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize">For all Grocery <br>
                                    products</h1>
                                <h6 class="banner__title font--medium m-b-40">Take now 20% off for all grocer product.</h6>
                                <a href="product-single-default.html" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>    
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">New Products</h5>
                            <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More Products<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-34%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                        </a>
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$25.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-10%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Countdown -->
                                        <div class="product__counter-box">
                                            <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                        </div> <!-- End Product Countdown -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$21.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                        </a>
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$50.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-31%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Best red meat</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$55.00 <del>$80.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-34%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-34%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-35%</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Countdown -->
                                        <div class="product__counter-box">
                                            <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                        </div> <!-- End Product Countdown -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$39.00 <del>$60.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-out">Soldout</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$55.00 <del>$75.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="product-single-default.html" class="product__img--link">
                                            <img class="product__img img-fluid" src="{{URL::asset('front')}}/assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-out">Soldout</span>
                                        <!-- End Procuct Label -->
                                        <!-- Start Product Action Link-->
                                        <ul class="product__action--link pos-absolute">
                                            <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                            <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                            <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                        </ul> <!-- End Product Action Link -->
                                    </div> <!-- End Product Image -->
                                    <!-- Start Product Content -->
                                    <div class="product__content m-t-20">
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$10.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start Testimonial Section  ::::::  -->
        <div class="testimonial m-t-100 pos-relative">
            <div class="testimonial__bg">
                <img src="{{URL::asset('front')}}/assets/img/testimonial/testimonials-bg.jpg" alt="">
            </div>
            <div class="testimonial__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Our Client Say!</h2>
                            </div>
                            <div class="testimonial__slider default-slider">
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="{{URL::asset('front')}}/assets/img/testimonial/testimonial-home-1-img-1.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Nirob Khan / <span>CEO</span> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="{{URL::asset('front')}}/assets/img/testimonial/testimonial-home-1-img-2.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Torvi / <span>C0O</span> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Testimonial Section  ::::::  -->

        <!-- ::::::  Start  Blog News  ::::::  -->
        <div class="blog m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Our Latest News</h5>
                            <a href="blog-list-sidebar-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More blogs <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red">
                            <div class="blog-feed-slider-3grid default-slider gap__col--30 ">
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="{{URL::asset('front')}}/assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="{{URL::asset('front')}}/assets/img/blog/feed/blog-feed-home-1-img-2.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="{{URL::asset('front')}}/assets/img/blog/feed/blog-feed-home-1-img-3.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="{{URL::asset('front')}}/assets/img/blog/feed/blog-feed-home-1-img-4.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

         <!-- ::::::  Start Newsletter Section  ::::::  -->
         <div class="newsletter m-t-100 pos-relative">
            <div class="newsletter__bg">
                <img src="{{URL::asset('front')}}/assets/img/newsletter/newsletter-bg.jpg" alt="">
            </div>
            <div class="newsletter__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form class="newsletter__form" action="#" method="post">
                                <div class="newsletter__form-content pos-relative">
                                    <label class="pos-absolute" for="newsletter-mail"><i class="icon-mail"></i></label>
                                    <input type="email" name="newsletter-mail" id="newsletter-mail" placeholder="Your mail address">
                                    <button class="text-uppercase pos-absolute" type="submit" >Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End newsletter Section  ::::::  -->

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area default-slider">
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="{{URL::asset('front')}}/assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Company Logo Section  ::::::  -->

    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection

