@extends('front.layout.layout')
@section('content')
      <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                    <div class="error-section-top text-center">
                        <h1>404</h1>
                        <h4 class="m-b-20">OOOPS! ERROR 404</h4>
                        <h5 class="font--light">Sorry, But the page you are looking for does't exist!</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
                    <div class="page-not-found text-center">
                        <div class="form-box__single-group d-flex align-items-center pos-relative m-b-30">
                            <input class="round-input" type="search" placeholder="Search..." required>
                            <button class="btn btn--search pos-absolute round-input-btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <a href="index.html" class="btn btn--icon-left btn--small btn--radius-tiny btn--green btn--green-hover-black font--bold text-capitalize m-t-20">GO TO HOME PAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection