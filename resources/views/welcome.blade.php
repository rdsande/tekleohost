@extends('layouts.app')

@section('content')

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="/"><img class="light-version-logo" src="media/tekleologo.svg" alt="logo"></a>
                            <a href="/"><img class="dark-version-logo" src="media/tekleologo2.svg" alt="logo"></a>
                            <a href="/"><img class="sticky-logo" src="media/tekleologo.svg" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="/">
                                                <img class="light-mode" src="media/logo-2.svg" alt="Site Logo">
                                                <img class="dark-mode" src="media/logo-3.svg" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Digital</a>
                                        <ul class="axil-submenu">
                                            <li><a href="/">Domain names</a></li>
                                            <li><a href="index-3.html">UI/UX, Website Design & Development</a></li>
                                            <li><a href="index-4.html">Website Hosting</a></li>
                                            <li><a href="index-5.html">Mobile Development</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Branding</a>
                                        <ul class="axil-submenu">
                                            <li><a href="service.html">Logo / Brand Identity </a></li>
                                            <li><a href="service-2.html">Social Media Management</a></li>
                                            <li><a href="service-design.html">Print Design</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Blog</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-block d-none">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner banner-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">From an idea, to a digital solution.</h1>
                            <span class="subtitle">We are on our journey to become among Tanzania'a top web development agencies. We work with our clients to craft trully productive websites and systems.
        We are energetic, curious and creative.
                            <a href="contact.html" class="axil-btn btn-fill-primary btn-large">Tell me more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_g3dzz0wz.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover loop  ></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-13">
                <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="media/others/bubble-14.png" alt="Bubble">
                </li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-equal bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left text-center">
                    <span class="subtitle t-center">You are not lost, we are what you are looking for.</span>
                    <h2 class="title m-auto">Services we can help you with</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid active">
                            
                            <div class="thumbnail">
                                <img src="media/icon/icon-3.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-design.html">Digital</a></h5>
                                <p>We transform your business into a digital system. From registering your domain to productive web systems and apps.</p>
                                <a href="service-design.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="media/icon/icon-1.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-development.html">Branding</a></h5>
                                <p>We help to make you recognizable and memorable. We create informative yet attractive designs. </p>
                                <a href="service-development.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                        <div class="thumbnail">
                                <img src="media/icon/icon-5.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-business.html">Solutions</a></h5>
                                <p>Through research and experience we have some ready-made web solutions to cater for your various needs.</p>
                                <a href="service-business.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="media/others/circle-1.png" alt="Circle"></li>
                <li class="shape shape-2"><img src="media/others/line-3.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="media/others/bubble-5.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=       Case Study Area Start       =-->
        <!--=====================================-->
        <!-- <section class="section section-padding-equal case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-content" data-slick='{"infinite": true,"arrows": false, "dots": true, "slidesToShow": 1, "asNavFor": ".featured-thumbnail"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Logo, identity &amp; web design for Uber</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Website and web Development, Design</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Branding, website &amp; digital marketing for Apple</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-thumbnail" data-slick='{"infinite": true,"arrows": false, "dots": false, "fade": true, "slidesToShow": 1, "asNavFor": ".featured-content"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="media/others/case-study-4.png" alt="travel">
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="media/others/case-study-5.png" alt="travel">
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="media/others/case-study-6.png" alt="travel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    
        <!--=====================================-->
        <!--=        Project Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-2">
            <div class="container">
                <div class="section-heading heading-left mb--40">
                    <span class="subtitle">Our Project</span>
                    <h2 class="title">Some of our <br> finest work.</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="media/project/project-1.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Creative Agency</a></h4>
                                    <span class="subtitle">Full Branding, Website, App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="media/project/project-2.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Marketing</a></h4>
                                    <span class="subtitle">Logo, Website & Mobile App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="media/project/project-3.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Agency</a></h4>
                                    <span class="subtitle">Website, UI/UX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="media/project/project-4.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Plan Management</a></h4>
                                    <span class="subtitle">Branding, Website, IOS App</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>

        <!--=====================================-->
        <!--=        Pricing Area Start       	=-->
        <!--=====================================-->
        <section class="section bg-color-light section-padding">
            <div class="container">
            <div class="section-heading mb-0">
                    <span class="subtitle">Looking for a domain name?</span>
                    <h2 class="title">Register your domain</h2>
                </div>
                <div class="domain-search-container">
                <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                </div>
                <div class="section-heading mb-0">
                <span class="subtitle">Affordable website hosting in Tanzania</span>
                    <h2 class="title">Our Hosting Packages</h2>
                    <p>Flexible pricing options for freelancers <br> and design teams.</p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link active" id="yearly-plan-btn" type="button">Billed yearly</button>
                        </li>
                        <li class="nav-item billed-check-box">
                            <input type="checkbox" id="pricing-checkbox">
                            <label for="pricing-checkbox"></label>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="monthly-plan-btn" type="button">
                                Billed monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active">
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="pricing-header">
                                <h3 class="title">Professional</h3>
                                <span class="subtitle">A beautiful, simple website</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$119.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$19.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">Small Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$219.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$29.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>50 Pages Responsive Website</li>
                                    <li>Unlimited PPC Campaigns</li>
                                    <li>Unlimited SEO Keywords</li>
                                    <li>Unlimited Facebook Camplaigns</li>
                                    <li>Unlimited Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">Large Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$559.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$59.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large-fluid btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-1"><img src="media/others/line-1.png" alt="shape"></li>
                <li class="shape shape-2"><img src="media/others/bubble-4.png" alt="shape"></li>
                <li class="shape shape-3"><img src="media/others/hand-1.png" alt="shape"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img src="media/others/pc.png" alt="Computer">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img src="media/others/comment.png" alt="Comments">
                            </li>
                            <li class="shape shape-2" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <img src="media/others/keyboard.png" alt="Comments">
                            </li>
                            <li class="shape shape-3" data-sal="slide-right" data-sal-duration="800" data-sal-delay="300">
                                <img src="media/others/mouse.png" alt="Comments">
                            </li>
                            <li class="shape shape-4" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img src="media/others/bell-icon.png" alt="Comments">
                            </li>
                            <li class="shape shape-5" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="200">
                                <img src="media/others/chat-bot.png" alt="Comments">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="media/others/bubble-12.png" alt="Comments"></li>
                <li class="shape shape-2"><img src="media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-3"><img src="media/others/bubble-13.png" alt="Comments"></li>
                <li class="shape shape-4"><img src="media/others/bubble-14.png" alt="Comments"></li>
                <li class="shape shape-5"><img src="media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-6"><img src="media/others/bubble-15.png" alt="Comments"></li>
                <li class="shape shape-7"><img src="media/others/bubble-16.png" alt="Comments"></li>
            </ul>
        </section>

@endsection