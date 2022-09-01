@extends('front.layout.layout')
@section('content')
      <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="about-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="img-responsive">
                                <img src="{{URL::asset('front')}}/assets/img/about/about-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-content">
                            <h4 class="font--regular">We Are A Gsore Focused On Delivering Best Organic Food And User Experiences.</h4>
                            <p class="para__text">Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu phasellus risus urna aliquam, ornare. vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque</p>
                            <a href="#" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize m-t-20">More Information<i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>         
        </div>

        <!-- ::::::  Start CMS Section  ::::::  -->
        <div class="cms m-t-100">
            <div class="container">
                <div class="row">
                    <!-- Start Single CMS box -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Free Shipping</h6>
                                <p class="para__text">Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <i class="far fa-money-bill-alt"></i>
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">100% Money Back Guarantee</h6>
                                <p class="para__text">Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <i class="far fa-life-ring"></i>
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Online Support 24/7</h6>
                                <p class="para__text">Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                </div>
            </div>
        </div> <!-- ::::::  End CMS Section  ::::::  -->
        

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area">
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

       
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection