@extends('index')
@section('content')
    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-departements">
    <!--Hero-->
    <section class="section section-hero section-hero-1">
        <figure class="section-shape shape-1">
            <img class="img-fluid" src="assets/images/shapes/1.svg" alt="Image Description" />
        </figure>
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
        </figure>
        <div class="hero-image hero-image-1">
            <img src="assets/images/hero/2.svg" alt="alt" />
        </div>
        <div class="display-center">
            <div class="container">
                <div class="hero-content">
                    <h1>
                        Education is the
                        <br />
                        Power of
                        <div class="text-border"><span>Humanity</span></div>
                    </h1>
                    <p>Study any topic, anytime.<br /> Explore thousands of courses for the lowest price ever!</p>
                    <a href="page-teachers.html" class="button button-md button-primary">
                        <span class="wave-hover"></span>
                        <span class="text">List of Teachers!</span>
                    </a>
                    <a href="page-start.html" class="button button-md button-secondary">
                        <span class="wave-hover"></span>
                        <span class="text">Let's get started</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Call-To-Action-->
    <div class="section el-cta el-cta-1 overlay-color bg-animation-2">
        <div class="display-center">
            <div class="container">
                <div class="heading">
                    <h2>Learn a new language<br/>with an online tutor</h2>
                    <p>Let's work together. We can help to develop your business. <br />We provide the best service that comes with the best results.</p>
                    <a href="page-start.html" class="button button-md button-light">
                        <span class="wave-hover"></span>
                        <span class="text text-primary">Let's get started.</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/-->
    <!--Courses-->
<section class="section section-courses">
    <figure class="section-shape shape-2">
        <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
    </figure>
    <figure class="section-shape shape-3">
        <img src="assets/images/shapes/3.svg" alt="Image Description" />
    </figure>
    <div class="display-spacing">
        <div class="container">
            <header class="el-heading center">
                <h2>What we Learn on <span class="text-primary">Eduline</span></h2>
                <p>We provide the best service that comes with the best results.</p>
                <div class="divider divider-line"></div>
            </header>
            <div class="cards">
                <!--Card-->
                <div class="el-card card-course">
                    <div class="item d-flex align-items-center">
                        <div class="card-image">
                            <img src="assets/images/courses/1.svg" alt="alt" />
                        </div>
                        <div class="card-title">
                            <h3>
                                <a href="page-course.html">
                                    <span>Standard English</span>
                                    <span class="subtitle">Lessons:<span class="text-color">600</span></span>
                                </a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="card-links">
                            <a href="page-course.html" class="button button-md button-line-primary">
                                <span class="text">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/-->
                <!--Card-->
                <div class="el-card card-course">
                    <div class="item d-flex align-items-center">
                        <div class="card-image">
                            <img src="assets/images/courses/1.svg" alt="alt" />
                        </div>
                        <div class="card-title">
                            <h3>
                                <a href="page-course.html">
                                    <span>Travelers Course</span>
                                    <span class="subtitle">Lessons:<span class="text-color">600</span></span>
                                </a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="card-links">
                            <a href="page-course.html" class="button button-md button-line-primary">
                                <span class="text">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/-->
                <!--Card-->
                <div class="el-card card-course">
                    <div class="item d-flex align-items-center">
                        <div class="card-image">
                            <img src="assets/images/courses/1.svg" alt="alt" />
                        </div>
                        <div class="card-title">
                            <h3>
                                <a href="page-course.html">
                                    <span>Portuguese Course</span>
                                    <span class="subtitle">Lessons:<span class="text-color">600</span></span>
                                </a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="card-links">
                            <a href="page-course.html" class="button button-md button-primary">
                                <span class="text">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/-->
                <!--Card-->
                <div class="el-card card-course">
                    <div class="item d-flex align-items-center">
                        <div class="card-image">
                            <img src="assets/images/courses/4.svg" alt="alt" />
                        </div>
                        <div class="card-title">
                            <h3>
                                <a href="page-course.html">
                                    <span>Standard Spanish</span>
                                    <span class="subtitle">Lessons:<span class="text-color">600</span></span>
                                </a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="card-links">
                            <a href="page-course.html" class="button button-md button-secondary">
                                <span class="text">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/-->
            </div>
            <div class="el-read-more div-center text-center">
                <a href="page-courses.html" class="el-popover">
                    <p class="button button-circle-lg button-circle button-primary">
                        <span class="fa fa-refresh"></span>
                    </p>
                    <p class="el-popover-title">
                        <span>More Courses?</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
<!--/-->
        <!--Hero-->
        <section class="section section-hero section-hero-5 bg-gradient-180">
            <div class="display-center">
                <div class="container">
                    <div class="hero-content">
                        <h1>Learn a new language<br /> with an online tutor</h1>
                        <p class="text-light">Hold an online language class with your favorite teacher!<br />Find your teacher, choose the time and start learning the language.</p>
                    </div>
                </div>
            </div>
            <div class="el-floating-shapes">
                <span class="shape shape-1">
                    <img src="assets/images/shapes/1.png" alt="--Alternative--">
                </span>
                <span class="shape shape-2">
                    <img src="assets/images/shapes/2.png" alt="--Alternative--">
                </span>
                <span class="shape shape-3">
                    <img src="assets/images/shapes/3.png" alt="--Alternative--">
                </span>
                <span class="shape shape-4">
                    <img src="assets/images/shapes/4.png" alt="--Alternative--">
                </span>
            </div>
        </section>
        <!--/-->
         <!--Features-->
 <section class="section section-features section-features-1">
    <div class="container">
        <div class="row row-xs">
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/uk.svg" alt="alt" />
                            <h3>
                                <span class="text">English</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/spain.svg" alt="alt" />
                            <h3>
                                <span class="text">Spanish</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/germany.svg" alt="alt" />
                            <h3>
                                <span class="text">German</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/italy.svg" alt="alt" />
                            <h3>
                                <span class="text">Italian</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/france.svg" alt="alt" />
                            <h3>
                                <span class="text">French</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/portugal.svg" alt="alt" />
                            <h3>
                                <span class="text">Portuguese</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/russia.svg" alt="alt" />
                            <h3>
                                <span class="text">Russian</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/china.svg" alt="alt" />
                            <h3>
                                <span class="text">Mandarin</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/japan.svg" alt="alt" />
                            <h3>
                                <span class="text">Japanese</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/iran.svg" alt="alt" />
                            <h3>
                                <span class="text">Persian</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/india.svg" alt="alt" />
                            <h3>
                                <span class="text">Hindi</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
            <!--Col-->
            <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                <a href="page-departements.html">
                    <div class="item">
                        <div class="inner">
                            <img src="assets/images/flags/turkey.svg" alt="alt" />
                            <h3>
                                <span class="text">Turkish</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <!--/-->
        </div>
    </div>
</section>
<!--/-->
        <!--Teachers-->
<section class="section section-teachers section-teachers-slider">
    <div class="display-spacing">
        <div class="container">
            <header class="el-heading center">
                <h2>Our professional teachers</h2>
                <p>We provide the best service that comes with the best results.</p>
                <div class="divider divider-line"></div>
            </header>
            <div class="el-slider">
                <div class="swiper-container swiper-teachers">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/1.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Miranda Fox</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/russia.svg" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/icons/graduation.svg" alt="Is experienced" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/2.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>James Maxwell</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/germany.svg" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/icons/language-exhange.svg" alt="language exhange" />
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="icons icons-right">
                                            <li>
                                                <p class="icon-status bg-danger">
                                                    <span>Native</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/3.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>John Woo</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/italy.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/4.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Emily Thompson</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/uk.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="icons icons-right">
                                            <li>
                                                <p class="icon-status bg-secondary">
                                                    <span>Starter</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/5.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Robert Fox</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/india.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/6.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Ava Taylor</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color new-price">$20.00</span>
                                                <span class="text-color old-price">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/france.svg" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-off">
                                                    <span>%20</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="icons icons-right">
                                            <li>
                                                <p class="icon-status bg-danger">
                                                    <span>Native</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="el-read-more div-center text-center">
                <a href="page-teachers.html" class="el-popover">
                    <p class="button button-circle-lg button-circle button-primary">
                        <span class="fa fa-refresh"></span>
                    </p>
                    <p class="el-popover-title">
                        <span>More Teachers?</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
<!--/-->
</div>
        <!--Footer-->
        <footer class="section app-footer app-footer-2">
            <div class="footer-info">
                <div class="container">
                    <div class="el-cta el-cta-4">
                        <h3>What <span class="text-primary">language</span> do you want to learn?</h3>
                        <p>We have teachers in 64 languages! </p>
                        <a href="page-teachers.html" class="button button-md button-secondary">
                            <span class="text text-light">Browse Them Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-widgets">
                <div class="container">
                    <div class="footer-widgets-links">
                        <div class="row row-xl-5">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                <div class="widget widget-links">
                                    <div class="widget-title">
                                        <h4>Quick Access</h4>
                                    </div>
                                    <div class="widget-body">
                                        <ul>
                                            <li>
                                                <a href="page-cooperation.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Apply to Teach</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-teachers.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Search for Teachers</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-courses.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">List of Courses</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Departments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 d-none d-xl-block">
                                <div class="widget widget-links">
                                    <div class="widget-title">
                                        <h4>Languages</h4>
                                    </div>
                                    <div class="widget-body">
                                        <ul>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn Hindi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn Farsi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn Turkish</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn Chinese</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                <div class="widget widget-links">
                                    <div class="widget-title">
                                        <h4>Languages</h4>
                                    </div>
                                    <div class="widget-body">
                                        <ul>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn Spanish</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn German</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-departements.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Learn French</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                <div class="widget widget-links">
                                    <div class="widget-title">
                                        <h4>Teachers</h4>
                                    </div>
                                    <div class="widget-body">
                                        <ul>
                                            <li>
                                                <a href="page-teachers.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">English Tutors</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-teachers.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Spanish Tutors</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-teachers.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">French Tutors</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-teachers.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Japanese Tutors</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                <div class="widget widget-links">
                                    <div class="widget-title">
                                        <h4>Communication</h4>
                                    </div>
                                    <div class="widget-body">
                                        <ul>
                                            <li>
                                                <a href="page-about.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">About Us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-contact.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Contact Us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-faq.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Faq</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-policy.html">
                                                    <span class="icon ti-angle-left"></span>
                                                    <span class="text">Policy</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span class="footer-line"></span>
                    <div class="row">
                        <div class="col-md-8">
                            <p>?? 2020 All Rights Reserved</p>
                        </div>
                        <div class="col-md-4">
                            <ul class="el-social-links">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-google"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
