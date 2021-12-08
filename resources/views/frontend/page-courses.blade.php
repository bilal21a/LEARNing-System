@extends('index')
@section('content')
    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-teachers">
    <!--Courses-->
    <section class="section section-courses">
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
        </figure>
        <figure class="section-shape shape-3">
            <img src="assets/images/shapes/3.svg" alt="Image Description" />
        </figure>
        <div class="display-spacing display-spacing-double">
            <div class="container">
                <header class="el-heading center">
                    <h2>What We Learn on <span class="text-primary">Eduline</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    <div class="divider divider-line"></div>
                </header>
                <div class="mb-30">
                    <div class="section-navbar">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-sortination">
                                    <p>
                                        <span class="fa fa-sort"></span>
                                        <span class="title">Sort by:</span>
                                    </p>
                                    <ul>
                                        <li class="active">Featured</li>
                                        <li>Newest</li>
                                        <li>Oldest</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <ul class="el-pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li>...</li>
                                    <li><span>23</span></li>
                                    <li><span>Next</span><span class="fa fa-caret-right"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <a href="page-course.html" class="button button-md button-line-primary">
                                    <span class="text">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/-->
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
                            <p>© 2020 All Rights Reserved</p>
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
