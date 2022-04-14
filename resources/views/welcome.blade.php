@extends('layouts.app')

@section('content')

<section class="banner banner-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <h1 class="title">From an idea, to a digital solution.</h1>
                    <span class="subtitle">We are on our journey to become among Tanzania's top web development agencies. We work with our clients to craft trully productive websites and systems.
                        We are energetic, curious and creative.
                        <a href="{{ asset('about')}}" class="axil-btn btn-fill-primary btn-large">Tell me more</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-thumbnail">
                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_g3dzz0wz.json" background="transparent" speed="1" style="width: 300px; height: 300px;" hover loop></lottie-player>
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
                        <h5 class="title"> <a href="{{ url('digital')}}">Digital</a></h5>
                        <p>We transform your business into a digital system. From registering your domain to productive web systems and apps.</p>
                        <a href="{{ url('digital')}}" class="more-btn">Find out more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                <div class="services-grid">
                    <div class="thumbnail">
                        <img src="media/icon/icon-1.png" alt="icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> <a href="{{ url('branding')}}">Branding</a></h5>
                        <p>We help to make you recognizable and memorable. We create informative yet attractive designs. </p>
                        <a href="{{ url('branding')}}" class="more-btn">Find out more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="services-grid">
                    <div class="thumbnail">
                        <img src="media/icon/icon-5.png" alt="icon">
                    </div>
                    <div class="content">
                        <h5 class="title"> <a href="#">Solutions</a></h5>
                        <p>Through research and experience we have some ready-made web solutions to cater for your various needs.</p>
                        <a href="#" class="more-btn">Find out more</a>
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


<section class="section bg-color-light section-padding">
    <div class="container">
        <div class="section-heading mb-0">
            <span class="subtitle">Looking for a domain name?</span>
            <h2 class="title">Register your domain</h2>
        </div>
        <div class="domain-search-container">
            <form action="http://tekleoweb.com/whmcshost/cart.php?a=add&domain=register" method="post">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search domain">
                    <button class="subscribe-btn" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="section-heading mb-0">
            <span class="subtitle">Affordable website hosting in Tanzania</span>
            <h2 class="title">Our Hosting Packages</h2>
            <p>Flexible pricing options for everyone</p>
        </div>

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
    <ul class="shape-group-3 list-unstyled">
        <li class="shape shape-1"><img src="media/others/line-1.png" alt="shape"></li>
        <li class="shape shape-2"><img src="media/others/bubble-4.png" alt="shape"></li>
        <li class="shape shape-3"><img src="media/others/hand-1.png" alt="shape"></li>
    </ul>
</section>

<section class="section section-padding-2">
    <div class="container">
        <div class="section-heading heading-left mb--40">
            <h2 class="title">Some of our <br> latest work.</h2>
        </div>
        <div class="axil-isotope-wrapper">
            <div class="row row-35 isotope-list">

                <div class="col-md-6 project mobile">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://hotelseacliff.com">
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
                            <h4 class="title"><a href="https://zahrawater.co.tz">Zahra Water</a></h4>
                            <span class="subtitle">Website, UI/Ux</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project branding">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://uniworld.co.tz">
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
                            <h4 class="title"><a href="https://kodon.co.tz">Kodon Construction</a></h4>
                            <span class="subtitle">Website, Wordpress</span>
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


@endsection