@extends('layouts.app')

@section('content')
<!--=====================================-->
<!--=       Breadcrumb Area Start       =-->
<!--=====================================-->
<div class="breadcrum-area breadcrumb-banner">
    <div class="container">
        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
            <h1 class="title h2">Digital</h1>
            <p>Our digital solutions are centered around startups to big businesses and organizations. We want to be part of the journey in developing and hosting websites and systems.
                We believe in Tanzanian talents rather than outsourcing projects. If the idea can work on the web, it can be done here in Tanzania.
            </p>
        </div>
        <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
            <img class="paralax-image" src="../media/banner/banner-thumb-4.png" alt="Illustration">
        </div>
    </div>
    <ul class="shape-group-8 list-unstyled">
        <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
            <img src="../media/others/bubble-9.png" alt="Bubble">
        </li>
        <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
            <img src="../media/others/bubble-21.png" alt="Bubble">
        </li>
        <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
            <img src="../media/others/line-4.png" alt="Line">
        </li>
    </ul>
</div>
<!--=====================================-->
<!--=        Service Area Start         =-->
<!--=====================================-->
<div class="service-scroll-navigation-area">
    <!-- Service Nav -->
    <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#section1">Domain Names</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Web Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">UI/UX, Website Design & Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">Mobile Development</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Design Service -->
    <div class="section section-padding bg-color-light" id="section1">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">Doman Names</h2>
                <p>Start your domain search</p>
            </div>
            <div class="row">
                <form action="http://tekleoweb.com/whmcshost/cart.php?a=add&domain=register" method="post">
                    <div class="input-group">
                        <input type="text" name="query" class="form-control" placeholder="Search domain">
                        <button class="subscribe-btn" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Development Service -->
    <div class="section section-padding" id="section2">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">Web Hosting</h2>
            </div>
            <div class="row">
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Packages</span></button>
                        <button data-filter=".students"><span class="filter-text"> Students </span></button>
                        <button data-filter=".startup"><span class="filter-text"> Start-ups</span></button>
                        <button data-filter=".business"><span class="filter-text"> Business</span></button>
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-lg-3 project students" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title">Desa</h3>
                                    <!-- <span class="subtitle"> Small project </span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">20,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>1 GB Storage</li>
                                        <li>3 Emails</li>
                                        <li>Unlimited Bandwidth</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project students startup" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title"> Starter </h3>
                                    <!-- <span class="subtitle">Small Team</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount"> 50,000 </span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>1.5 GB Storage</li>
                                        <li>6 Emails</li>
                                        <li>Unlimited Bandwidth</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project students startup" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title">Starter-Pro</h3>
                                    <!-- <span class="subtitle">Small Team</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">80,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>2 GB Storage</li>
                                        <li>10 Emails</li>
                                        <li>Free (.co.tz) domain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project students startup" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="pricing-table active">
                                <div class="star-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="pricing-header">
                                    <h3 class="title">Startup</h3>
                                    <!-- <span class="subtitle">Medium Team</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">100,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>3 GB Storage</li>
                                        <li>20 Emails</li>
                                        <li>Free domain (.com/.co.tz)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project business startup" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title">Business Basic</h3>
                                    <!-- <span class="subtitle">Business</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">130,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>4 GB Storage</li>
                                        <li>Unlimited Emails</li>
                                        <li>Free domain (.com/.co.tz)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project business" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title">Business Plus</h3>
                                    <!-- <span class="subtitle">Business</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">150,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>5 GB Storage</li>
                                        <li>Unlimited Emails</li>
                                        <li>Free domain (.com/.co.tz)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project business" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title">Business Pro</h3>
                                    <!-- <span class="subtitle">Business</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">250,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>7 GB Storage</li>
                                        <li>Unlimited Emails</li>
                                        <li>Free domain (.com/.co.tz)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 project business" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h3 class="title">Business Max</h3>
                                    <!-- <span class="subtitle">Business</span> -->
                                    <div class="price-wrap">
                                        <div class="yearly-pricing">
                                            <span class="amount">350,000</span>
                                            <span class="duration">/yearly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started</a>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list-unstyled">
                                        <li>10 GB Storage</li>
                                        <li>Unlimited Emails</li>
                                        <li>Free domain (.com/.co.tz)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-padding bg-color-light" id="section3">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">UI/UX Website Design & Development </h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="../media/icon/icon-39.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="service-business.html">We craft attractive and productive websites</a></h5>
                            <p>Anyone can design a website, but we make it our core business and focus point. We understand that the end-user is the one to design for and that each project
                                has a goal that must be achieved.


                            </p>
                            <p> We make it easy for our client to manage and update their website by using easy interfaces and Content Management Systems (CMS's). </p>

                            <a href="{{ url('about')}}}}" class="more-btn">Check our process?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-padding" id="section4">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">Mobile Apps Development</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                </div>
                <div class="col-lg-6 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="../media/icon/icon-44.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="service-technology.html">The future is mobile. </a></h5>
                            <p>We develop mobile apps that deliver results. With many people using smartphones on a daily basis we take our time to craft friendly interfaces and simplify the way our clients interact with their end-users. </p>
                            <!-- <a href="service-technology.html" class="more-btn">Find out more</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection