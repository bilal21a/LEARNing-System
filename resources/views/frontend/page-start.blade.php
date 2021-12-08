@extends('index')
@section('content')

    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-start">
    <!--Hero-->
    <section class="section section-stepper section-stepper-2">
        <figure class="section-shape shape-1">
            <img class="img-fluid" src="assets/images/shapes/1.svg" alt="Image Description" />
        </figure>
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
        </figure>
        <div class="display-spacing">
            <div class="container">
                <!--Stepper-->
                <div class="el-stepper">
                    <form action="#" method="GET" id="form-stepper" class="form-3">
                        <div id="wizard" class="stepper-wizard">
                            <!--Step-->
                            <h3 class="stepper-head">Step 1</h3>
                            <div class="stepper-body">
                                <h3>Which language you want to learn?</h3>
                                <ul class="el-radio-option el-radio-option-icon">
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/uk.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="1">
                                        <label for="I need it for school">English</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/italy.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="2">
                                        <label for="I need it for school">Italian</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/france.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="3">
                                        <label for="I need it for school">French</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/germany.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="4">
                                        <label for="I need it for school">German</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/spain.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="5">
                                        <label for="I need it for school">Spacnish</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/turkey.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="6">
                                        <label for="I need it for school">Turkish</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/russia.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="7">
                                        <label for="I need it for school">Russian</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/arabic.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="8">
                                        <label for="I need it for school">Arabic</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/spain.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="9">
                                        <label for="I need it for school">Spanish</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/iran.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="10">
                                        <label for="I need it for school">Persian</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/china.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="11">
                                        <label for="I need it for school">Mandarin</label>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/flags/japan.svg" alt="Flag">
                                        </div>
                                        <input name="question1" type="radio" required class="required" value="12">
                                        <label for="I need it for school">Japanese</label>
                                    </li>
                                </ul>
                            </div>
                            <!--/-->
                            <!--Step-->
                            <h3 class="stepper-head">Step 1</h3>
                            <div class="stepper-body">
                                <h3>Why are you learning This Language?</h3>
                                <ul class="el-radio-option el-radio-option-text">
                                    <li>
                                        <input name="question2" type="checkbox" required class="required" value="a1">
                                        <label for="I need it for school">I need it for my career</label>
                                    </li>
                                    <li>
                                        <input name="question2" type="checkbox" required class="required" value="a2">
                                        <label for="I need it for my career">To connect with family / friends</label>
                                    </li>
                                    <li>
                                        <input name="question2" type="checkbox" required class="required" value="a2">
                                        <label for="I need it for my career">I need it for school</label>
                                    </li>
                                    <li>
                                        <input name="question2" type="checkbox" required class="required" value="a6">
                                        <label for="Other">Other</label>
                                    </li>
                                </ul>
                            </div>
                            <!--/-->
                            <!--Step-->
                            <h3 class="stepper-head">Step 1</h3>
                            <div class="stepper-body">
                                <h3>What's your most recent experience?</h3>
                                <ul class="el-radio-option el-radio-option-text">
                                    <li>
                                        <input name="question3" type="radio" required class="required" value="b1">
                                        <label for="I need it for school">I've had a private tutor</label>
                                    </li>
                                    <li>
                                        <input name="question3" type="radio" required class="required" value="b2">
                                        <label for="I need it for my career">I've taken a grade school class</label>
                                    </li>
                                    <li>
                                        <input name="question3" type="radio" required class="required" value="b3">
                                        <label for="I want to do it as a brain exercise">I've used another language app</label>
                                    </li>
                                    <li>
                                        <input name="question3" type="radio" required class="required" value="b4">
                                        <label for="I want to do it as a brain exercise">I've taken a college class</label>
                                    </li>
                                    <li>
                                        <input name="question3" type="radio" required class="required" value="b6">
                                        <label for="Other">Other</label>
                                    </li>
                                </ul>
                            </div>
                            <!--/-->
                        </div>
                    </form>
                    <div class="el-stepper-error"></div>
                </div>
                <!--/-->
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
