@extends('index')
@section('inline_css')
<style>
#accordion:hover{
    cursor: pointer;
}
</style>
@endsection


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
                                    <h2>Free Trails Request</h2>
                                </div>
                                <div id="accordion">
                                    @foreach ($free_trails as $free_trail)
                                    <h5>Free Trail Requested from <span style="color: #5c70fa">{{ $free_trail->StdName }}</span> </h5>
                                    <div>
                                        <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
                                    </div>
                                    @endforeach

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

    @section('js_after')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
          $( "#accordion" ).accordion({
            collapsible: true
          });
        } );
        </script>
    @endsection
