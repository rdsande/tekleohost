<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> TekleoWeb - Web development, web hosting and ICT solutions providers - Based in Dar es salaam, Tanzania</title>

    <!-- Main -->
    <link rel="icon" href="{{ asset ('images/webspecialists-favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/green-audio-player.min.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="sticky-header">

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
                                                <img class="light-mode" src="media/tekleologo.svg" alt="Site Logo">
                                                <img class="dark-mode" src="media/tekleologo2.svg" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('digital')}}">Digital</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{ url('digital')}}">Domain names</a></li>
                                            <li><a href="{{ url('digital')}}">UI/UX, Website Design & Development</a></li>
                                            <li><a href="{{ url('digital')}}">Website Hosting</a></li>
                                            <li><a href="{{ url('digital')}}">Mobile App Development</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('branding')}}">Branding</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{ url('branding')}}">Logo / Brand Identity </a></li>
                                            <li><a href="{{ url('branding')}}">Social Media Management</a></li>
                                            <li><a href="{{ url('branding')}}">Print Design</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('portfolio')}}">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('about')}}">About us</a>
                                    </li>
                                    <li><a href="{{ url('contact')}}">Contact</a></li>
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

        @yield('content')


        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Got an idea?</h2>
                        <a href="{{ url('contact')}}" class="axil-btn btn-large btn-fill-white">Give us a brief</a>
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

        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="£" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://instagram.com/tekleoweb" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://instagram.com/rdsande" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Get in touch!</h2>
                                    <p> Tekleoweb is a web design and hosting company based in Dar es salaam, Tanzania. Part of Tekleo Technologies. </p>
                                    <a class="tel" href="tel:+255746371371"><i class="fas fa-phone"></i>+255 746 371 371</a>
                                    <!-- <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Services</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ url('digital')}}">Digital</a></li>
                                                <li><a href="{{ url('branding')}}">Branding</a></li>
                                                <li><a href="#">Solutions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ url('portfolio')}}">Portfolio</a></li>
                                                <li><a href="{{ url('about')}}">About us</a></li>
                                                <li><a href="{{ url('https://tekleo.co.tz')}}"> Tekleo Blog </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ url('contact')}}">Contact</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2022. All rights reserved by <a href="https://tekleoweb.com/"> Tekleoweb - Web Design & Hosting in Tanzania </a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="{{ url('digital')}}">Digital</a></li>
                            <li><a href="{{ url('branding')}}">Branding</a></li>
                            <li><a href="#">Solutions</a></li>
                            <li><a href="{{ url('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{ url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact us</span>
                                    <p>Haile Selassie rd.<br> Masaki, Dar es salaam</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:+255746371371"><i class="fas fa-phone"></i>+255 746 371 371</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://instagram.com/tekleoweb" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://instagram.com/rdsande" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Js -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/sal.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/vendor/tilt.js') }}"></script>
    <script src="{{ asset('js/vendor/green-audio-player.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nav.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>