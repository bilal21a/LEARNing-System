@extends('index')
@section('inline_css')
    <style>
        #accordion:hover {
            cursor: pointer;
        }

        .custom-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 40px;
            padding: 5px 38px 5px 16px;
            background: rgb(255, 255, 255) url("select-arrows.svg") no-repeat right 16px center;
            background-size: 10px;
            transition: border-color .1s ease-in-out, box-shadow .1s ease-in-out;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .custom-select:hover {
            border: 1px solid rgb(153, 153, 153);
        }

        .custom-select:focus {
            border: 1px solid #999;
            box-shadow: 0 3px 5px 0 rgba(0, 0, 0, .2);
            outline: none;
        }

        /* remove default arrow in IE */
        select::-ms-expand {
            display: none;
        }

        /* DEMO STYLING */

        .custom-select {
            font-family: "Source Sans Pro", sans-serif;
            font-size: 1rem;
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
                                        <p>Please update your profile, such as avatar and you recommend personal
                                            information.</p>
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
                                            <a href="http://../student/dashboard-wallet.html"
                                                class="button button-md button-radius button-block button-light">
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
                                        @if (isset($free_trails[0]))
                                            <div id="accordion">
                                                @foreach ($free_trails as $free_trail)
                                                    <h5>Free Trail Requested from <span
                                                            style="color: #5c70fa">{{ $free_trail->StdName }}</span> </h5>
                                                    <div>
                                                        <form method="POST" action="{{ route('approve_trail') }}">
                                                            @csrf

                                                            <input type="hidden" name="student_id"
                                                                value="{{ $free_trail->student_id }}" />

                                                            <label for="custom-select">Select time for
                                                                {{ $free_trail->StdName }} :</label>
                                                            <select class="custom-select" name="time_assigned">
                                                                <option disabled selected>Select Time</option>
                                                                <option value="12:00 am to 01:00 am">12:00 am to 01:00 am
                                                                </option>
                                                                <option value="01:00 am to 02:00 am">01:00 am to 02:00 am
                                                                </option>
                                                                <option value="02:00 am to 03:00 am">02:00 am to 03:00 am
                                                                </option>
                                                                <option value="03:00 am to 04:00 am">03:00 am to 04:00 am
                                                                </option>
                                                                <option value="04:00 am to 05:00 am">04:00 am to 05:00 am
                                                                </option>
                                                                <option value="05:00 am to 06:00 am">05:00 am to 06:00 am
                                                                </option>
                                                                <option value="06:00 am to 07:00 am">06:00 am to 07:00 am
                                                                </option>
                                                                <option value="07:00 am to 08:00 am">07:00 am to 08:00 am
                                                                </option>
                                                                <option value="08:00 am to 09:00 am">08:00 am to 09:00 am
                                                                </option>
                                                                <option value="09:00 am to 10:00 am">09:00 am to 10:00 am
                                                                </option>
                                                                <option value="10:00 am to 11:00 am">10:00 am to 11:00 am
                                                                </option>
                                                                <option value="11:00 am to 12:00 pm">11:00 am to 12:00 pm
                                                                </option>
                                                                <option value="12:00 pm to 01:00 pm">12:00 pm to 01:00 pm
                                                                </option>
                                                                <option value="01:00 pm to 02:00 pm">01:00 pm to 02:00 pm
                                                                </option>
                                                                <option value="02:00 pm to 03:00 pm">02:00 pm to 03:00 pm
                                                                </option>
                                                                <option value="03:00 pm to 04:00 pm">03:00 pm to 04:00 pm
                                                                </option>
                                                                <option value="04:00 pm to 05:00 pm">04:00 pm to 05:00 pm
                                                                </option>
                                                                <option value="05:00 pm to 06:00 pm">05:00 pm to 06:00 pm
                                                                </option>
                                                                <option value="06:00 pm to 07:00 pm">06:00 pm to 07:00 pm
                                                                </option>
                                                                <option value="07:00 pm to 08:00 pm">07:00 pm to 08:00 pm
                                                                </option>
                                                                <option value="08:00 pm to 09:00 pm">08:00 pm to 09:00 pm
                                                                </option>
                                                                <option value="09:00 pm to 10:00 pm">09:00 pm to 10:00 pm
                                                                </option>
                                                                <option value="10:00 pm to 11:00 pm">10:00 pm to 11:00 pm
                                                                </option>
                                                                <option value="11:00 pm to 12:00 am">11:00 pm to 12:00 am
                                                                </option>
                                                            </select>

                                                            <div>
                                                                <button class="button button-sm button-primary"
                                                                    style="margin-top:5px">
                                                                    Send Mail
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                @endforeach

                                            </div>
                                        @else
                                            No Free Trail Request
                                        @endif

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
    <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
@endsection

@section('js_after')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion({
                collapsible: true
            });
        });
    </script>
@endsection
