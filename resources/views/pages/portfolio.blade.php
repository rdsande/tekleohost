@extends('layouts.app')

@section('content')

<!--=====================================-->
<!--=       Breadcrumb Area Start       =-->
<!--=====================================-->
<div class="breadcrum-area breadcrumb-banner">
    <div class="container">
        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
            <h1 class="title h2">Portfolio</h1>
            <p>Behind each one of our work is a story and a goal that is being delivered. </p>
        </div>
        <div class="banner-thumbnail thumbnail-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
            <img src="../media/banner/banner-thumb-5.png" alt="Illustration">
        </div>
    </div>
    <ul class="shape-group-8 list-unstyled">
        <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
            <img src="../media/others/bubble-9.png" alt="Bubble">
        </li>
        <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
            <img src="../media/others/bubble-22.png" alt="Bubble">
        </li>
        <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
            <img src="../media/others/line-4.png" alt="Line">
        </li>
    </ul>
</div>
<!--=====================================-->
<!--=       About  Area Start        =-->
<!--=====================================-->
<section class="section section-padding case-study-featured-area">
    <div class="container">
        <div class="axil-isotope-wrapper">
            <div class="row row-35 isotope-list">

                <div class="col-md-6 project mobile">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="single-portfolio.html">
                                <img src="media/others/seacliff.jpg" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://hotelseacliff.com">SeaCliff Hotel</a></h4>
                            <span class="subtitle">Website Design, Booking System (Village)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project branding">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://zahrawater.co.tz">
                                <img src="media/others/zahra.jpg" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-portfolio.html">Zahra Water</a></h4>
                            <span class="subtitle">Website, UI/Ux</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project branding">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="single-portfolio.html">
                                <img src="media/others/uniworld.jpg" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://uniworld.co.tz">Uniworld Construction</a></h4>
                            <span class="subtitle">Website, UI/UX, Laravel</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project mobile">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://kodon.co.tz">
                                <img src="media/others/kodon.jpg" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-portfolio.html">Kodon Construction</a></h4>
                            <span class="subtitle">Website, Wordpress</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection