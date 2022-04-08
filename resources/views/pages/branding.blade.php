@extends('layouts.app')

@section('content')
<!--=====================================-->
<!--=       Breadcrumb Area Start       =-->
<!--=====================================-->
<div class="breadcrum-area breadcrumb-banner">
    <div class="container">
        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
            <h1 class="title h2">Branding</h1>
            <p> We help to make you recognizable and memorable. We create informative yet attractive designs. Our creative team is ready to work with you to
                first understand your vision, then use that as a baseline for aligning statistics and professional practices to make your brand recognizable, relatable and appealing.
            </p>
        </div>
        <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
            <img class="paralax-image" src="../media/banner/banner-shape-1.png" alt="Illustration">
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
                    <a class="nav-link" href="#section1">Logo & Brand Identity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Social Media Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">Print Design</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Design Service -->
    <div class="section section-padding bg-color-light" id="section1">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">Logo & Brand Identity</h2>

            </div>
            <div class="row">
                <p>We work with you to make sure we create that beautiful brand you have always been thinking of. We understanfd that Branding is not just designing a logo, but rather it is a collection of many more entities.</p>
            </div>
        </div>
    </div>
    <!-- Development Service -->
    <div class="section section-padding" id="section2">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">Social Media Management</h2>

            </div>
            <div class="row">
                <p> It's easy to jump on the social media wagon. But it takes skills, experience and a good understanding of how everything works together to be able to reap the benefits of social media advertising.</p>
                <p> We will work with you to improve your social media presence as well as guide and handle your post creation, scheduling and promotions.</p>
            </div>
        </div>
    </div>
    <div class="section section-padding bg-color-light" id="section3">
        <div class="container">
            <div class="section-heading heading-left">
                <h2 class="title">Print Design </h2>
            </div>
            <div class="row">
                <p>We are creative and professional in the sector of print design. Let us create the perfect designs for your print campaigns like T-shirts, Rollup banners, Posters, Flyers, Brochures and more.</p>
            </div>
        </div>
    </div>

</div>
@endsection