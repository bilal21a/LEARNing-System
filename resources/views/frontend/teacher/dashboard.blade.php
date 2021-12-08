@extends('index')
@section('content')

    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-dashboard page-dashboard-student">
    <!--Section-->
    <section class="section section-dashboard section-dashboard-student">
        <div class="container">
            <div class="display-spacing display-spacing-plus">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
    <aside class="sidebar">
        <div class="el-panel el-panel-teacher-widget">
            <div class="el-panel-body">
                <div class="el-panel-title">
                    <h2>Settings</h2>
                </div>
                <ul class="el-list-icon">
                    <li>
                        <a href="http://../teacher/dashboard.html">
                            <i class="fa fa-cog"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://../teacher/dashboard-profile.html">
                            <i class="fa fa-cog"></i>
                            <span class="text">Your Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://../teacher/dashboard-skills.html">
                            <i class="fa fa-cog"></i>
                            <span class="text">Your Skills</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://../teacher/dashboard-courses.html">
                            <i class="fa fas fa-book"></i>
                            <span class="text">Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://../teacher/dashboard-classrooms.html">
                            <i class="fa fas fa-book"></i>
                            <span class="text">Classrooms</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="el-panel el-panel-financial bg-primary">
            <div class="el-panel-body">
                <p class="text-center text-light">Earnings</p>
                <p class="price">
                    <span class="currency">$240.00</span>
                </p>
                <a href="http://../student/dashboard-wallet.html" class="button button-md button-radius button-block button-light">
                    <span class="text text-center text-primary">Set payout account</span>
                </a>
            </div>
        </div>
    </aside>
</div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="el-panel el-panel-admin-status">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Profile Status</h2>
                                    <p class="text-center pt-15">Please Activate Your Account</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-panel el-panel-financial bg-color-2">
                                    <div class="el-panel-body">
                                        <p class="text-center text-light">Lessons per Student</p>
                                        <p class="price">
                                            <span class="value text-light">18</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-panel el-panel-financial bg-color-1">
                                    <div class="el-panel-body">
                                        <p class="text-center text-light">Total Lessons</p>
                                        <p class="price">
                                            <span class="value text-light">33</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-panel el-panel-financial bg-color-4">
                                    <div class="el-panel-body">
                                        <p class="text-center text-light">Average Rating</p>
                                        <p class="price">
                                            <span class="value text-light">4.5</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="el-panel el-panel-financial bg-color-5">
                                    <div class="el-panel-body">
                                        <p class="text-center text-light">Joined Eduline</p>
                                        <p class="price">
                                            <span class="value text-light">4</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
</div>
    </div>
    @endsection
    @section('js_before')
    <script src="{{asset('frontend/assets/js/dashboard.js')}}"></script>
    @endsection
