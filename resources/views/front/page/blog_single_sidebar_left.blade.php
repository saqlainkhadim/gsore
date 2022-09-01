@extends('front.layout.layout')
@section('content')
       <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widgets -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Recent Post</h5>
                            </div>
                            <ul class="sidebar__post-blog list-space--small">
                                <li class="d-flex align-items-center ">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="{{URL::asset('front')}}/assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Jul 23, 2020</span>
                                        <a class="link--gray" href="">Consectetur adipi...</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="{{URL::asset('front')}}/assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Jul 16, 2020</span>
                                        <a class="link--gray" href="">Without Very Dark...</a>
                                    </div>
                                </li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Recent Post  -->

                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">CUSTOM MENU</h5>
                            </div>
                            <ul class="sidebar__menu">
                                <li><a href="#">Search Terms</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="#">Helps & Faqs</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Orders & Returns</a></li>
                                <li><a href="#">Deliveries</a></li>
                                <li><a href="#">Refund & Returns</a></li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Tags</h5>
                            </div>
                            <ul class="sidebar__tag list-space--small">
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">blue</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gold</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gray</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">green</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">maroon</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">red</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">white</a></li>
                            </ul>
                        </div> <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->
                        
                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->

                 <!-- Start Rightside - Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-single">
                                    <div class="img-responsive"><img src="{{URL::asset('front')}}/assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt=""></div>
                                    <div class="blog__content">
                                        <h3 class="blog__title">Consectetur adipisicing</h3>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.
                                            </p>
                                            <p class="block-quote">
                                               Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.
                                            </p>
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog__tag-share border-around m-t-30">
                                        <div class="nametag">
                                            <span>Tags:</span>
                                            <ul class="nametag__list">
                                                <li><a href="#">Fashion,</a></li>
                                                <li><a href="#">T-shirt,</a></li>
                                                <li><a href="#">White</a></li>
                                            </ul>
                                        </div>
                                        <div class="nametag">
                                            <span>Share:</span>
                                            <ul class="nametag__list">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog List -->
                        </div>
                    </div>

                    <!-- Start Blog Comment -->
                    <div class="blog blog--comment m-t-100">
                        <div class="section-content">
                            <h5>3 Comments</h5>
                        </div>
                        <!-- Start - Review Comment -->
                        <ul class="comment border-around m-t-40">
                            <!-- Start - Review Comment list-->
                            <li class="comment__list">
                                <div class="comment__wrapper">
                                    <div class="comment__img">
                                        <img src="{{URL::asset('front')}}/assets/img/user/image-1.png" alt=""> 
                                    </div>
                                    <div class="comment__content">
                                        <div class="comment__content-top">
                                            <div class="comment__content-left flex-column">
                                                <h6 class="comment__name">Kaedyn Fraser</h6>
                                                <span class="blog-news__postdate">Oct 29, 2020</span>
                                            </div>   
                                            <div class="comment__content-right">
                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                        
                                        <div class="para__content">
                                            <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start - Review Comment Reply-->
                                <ul class="comment__reply">
                                    <li class="comment__reply-list">
                                        <div class="comment__wrapper">
                                            <div class="comment__img">
                                                <img src="{{URL::asset('front')}}/assets/img/user/image-2.png" alt=""> 
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__content-top">
                                                    <div class="comment__content-left flex-column ">
                                                        <h6 class="comment__name">Oaklee Odom</h6>
                                                        <span class="blog-news__postdate">Oct 29, 2020</span>
                                                    </div>   
                                                    <div class="comment__content-right">
                                                        <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="para__content">
                                                    <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul> <!-- End - Review Comment Reply-->
                            </li> <!-- End - Review Comment list-->
                            <!-- Start - Review Comment list-->
                            <li class="comment__list">
                                <div class="comment__wrapper">
                                    <div class="comment__img">
                                        <img src="{{URL::asset('front')}}/assets/img/user/image-3.png" alt=""> 
                                    </div>
                                    <div class="comment__content">
                                        <div class="comment__content-top">
                                            <div class="comment__content-left flex-column">
                                                <h6 class="comment__name">Jaydin Jones</h6>
                                                <span class="blog-news__postdate">Oct 29, 2020</span>
                                            </div>   
                                            <div class="comment__content-right">
                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                        
                                        <div class="para__content">
                                            <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                        </div>
                                    </div>
                                </div>
                            </li> <!-- End - Review Comment list-->
                        </ul>  <!-- End - Review Comment -->
                    </div>  <!-- End Blog Comment -->

                    <!-- Start Blog Comment Form -->
                    <div class="blog blog--comment-form m-t-40">
                        <div class="section-content">
                            <h5>Leave A Reply</h5>
                        </div>
                        <form class="form-box" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-box__single-group">
                                        <label for="form-name">Your Name*</label>
                                        <input type="text" id="form-name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box__single-group">
                                        <label for="form-email">Your Email*</label>
                                        <input type="email" id="form-email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box__single-group">
                                        <label for="form-review">Your review*</label>
                                        <textarea id="form-review" rows="8" placeholder="Write a review"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn--radius-tiny btn--small btn--black btn--black-hover-green text-uppercase font--bold m-t-30" type="submit">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- End Blog Comment Form -->

                </div>  <!-- Start Rightside - Content -->
                
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection