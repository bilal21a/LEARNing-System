@extends('index')
@section('content')

    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-dashboard page-dashboard-student">
    <!--Section-->
    <section class="section section-dashboard section-dashboard-student">
        <div class="container">
            <div class="display-spacing display-spacing-plus">
                <!--Alert-->
                <div class="el-alert alert-info">
                    <div class="container">
                        <div class="alert-flex d-flex align-items-center">
                            <div class="alert-icon">
                                <div class="icon">
                                    <i class="fa fa-question"></i>
                                </div>
                            </div>
                            <div class="alert-content">
                                <p>Please update your profile, such as avatar and you recommend personal information.</p>
                            </div>
                            <div class="alert-links">
                                <a href="http://../teacher/dashboard-profile.html" class="button button-md">
                                    <span class="text">Edit Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/-->
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
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Resume & Skills</h2>
                                </div>
                                <form class="form-3" action="#" method="">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-item">
                                                <label for="input-type" class="form-label">Select your language</label>
                                                <div class="input-select">
                                                    <select class="el-select2-teacher-languages" name="flag">
                                                        <option value="">&nbsp;</option>
                                                        <option value="uk">English</option>
                                                        <option value="france">French</option>
                                                        <option value="spain">Spanish</option>
                                                        <option value="germany">German</option>
                                                        <option value="italy">Italian</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-item">
                                                <label for="input-classroom-name" class="form-label">Response Time</label>
                                                <input type="text" name="cname">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-item">
                                                <label class="form-label">Summary</label>
                                                <textarea name="excerpt" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 pt-15">
                                            <div class="form-item">
                                                <label class="form-label">Embed Code</label>
                                                <textarea name="video" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-item mb-0">
                                                <button class="button button-md button-block button-primary" type="submit">
                                                    <span class="text">Save</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
