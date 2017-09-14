<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PataBoma') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto" href="#">Gra<span>freez</span></a>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"> <a class="nav-link" href="#myCarousel">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="#benefits">Benefits</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#about">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#gallery">Image Gallery</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a> </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Swiper Silder
    ================================================== -->
<!-- Slider main container -->
<div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-bg-position" style="background:url('http://grafreez.com/wp-content/temp_demos/burnout/img/1.jpg')" data-hash="slide1">
            <h2>It is health that is real wealth and not pieces of gold and silver</h2>
        </div>
        <div class="swiper-slide slider-bg-position" style="background:url('http://grafreez.com/wp-content/temp_demos/burnout/img/3.jpg')" data-hash="slide2">
            <h2>Happiness is nothing more than good health and a bad memory</h2>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
</div>

<!-- Benefits
    ================================================== -->
<section class="service-sec" id="benefits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2><small>Benefits of Exercise</small>To enjoy the glow of good health, you must exercise</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-plus" aria-hidden="true"></i>
                        <h3>Better Sleep</h3>
                        <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                    </div>
                    <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-leaf" aria-hidden="true"></i>
                        <h3>Reduces Weight</h3>
                        <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                    </div>
                    <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-leaf" aria-hidden="true"></i>
                        <h3>Improves Mood</h3>
                        <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                    </div>
                    <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-bell" aria-hidden="true"></i>
                        <h3>Boosts Energy</h3>
                        <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"> <img src="http://grafreez.com/wp-content/temp_demos/burnout/img/side-01.jpg" class="img-fluid" /> </div>
        </div>
        <!-- /.row -->
    </div>
</section>

<!-- About
    ================================================== -->
<section class="about-sec parallax-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2><small>Who We Are</small>About<br>
                    Our Blog</h2>
            </div>
            <div class="col-md-4">
                <p>To enjoy good health, to bring true happiness to one's family, to bring peace to all, one must first discipline and control one's own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him.</p>
                <p>Saving our planet, lifting people out of poverty, advancing economic growth... these are one and the same fight. We must connect the dots between climate change, water scarcity, energy shortages, global health, food security and women's empowerment. Solutions to one problem must be solutions for all.</p>
            </div>
            <div class="col-md-4">
                <p>Our greatest happiness does not depend on the condition of life in which chance has placed us, but is always the result of a good conscience, good health, occupation, and freedom in all just pursuits.</p>
                <p>Being in control of your life and having realistic expectations about your day-to-day challenges are the keys to stress management, which is perhaps the most important ingredient to living a happy, healthy and rewarding life.</p>
                <p><a href="#" class="btn btn-transparent-white btn-capsul">Explore More</a></p>
            </div>
        </div>
    </div>
</section>

<section class="action-sec">
    <div class="container">
        <div class="action-box text-center"><h2>GET FULL FREE VERSION HERE </h2><a class="btn btn-success" href="http://grafreez.com/394/fitness-website-template/" target="_blank">Free Bootstrap Templates</a></div>
    </div>
</section>

@yield('content')

{{--JS--}}


    <script src="{{ asset('js/custom.js') }}"></script>


</body>
</html>

