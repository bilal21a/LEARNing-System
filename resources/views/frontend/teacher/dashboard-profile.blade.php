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
                                    <h2>Profile</h2>
                                </div>
                                <form class="form-3" action="http://httpbin.org/post" method="post" enctype="multipart/form-data">
                                    <div class="row row-sm">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                            <div class="el-avatar">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url(../../..//assets/images/people/default.jpg);">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                            <div class="pr-15">
                                                <div class="form-item">
                                                    <label for="input-name" class="form-label">Name</label>
                                                    <input name="name" type="text" id="input-name">
                                                </div>
                                                <div class="form-item">
                                                    <label for="input-lastname" class="form-label">Last Name</label>
                                                    <input name="" type="text" id="input-lastname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-mobile" class="form-label">Mobile</label>
                                                <input name="" type="text" id="input-mobile" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-email" class="form-label">E-Mail</label>
                                                <input name="" type="email" id="input-email" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-gender" class="form-label">Gender</label>
                                                <div class="input-select">
                                                    <select id="input-gender" class="el-select2-gender-empty">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-item">
                                                <label for="input-username" class="form-label">Username</label>
                                                <input name="" type="text" id="input-username" class="text-left">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-item">
                                                <label for="input-description" class="form-label">Description</label>
                                                <textarea name="" id="input-description" cols="30" rows="10"></textarea>
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
