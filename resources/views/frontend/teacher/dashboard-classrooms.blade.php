@extends('index')

@section('css')
@endsection

@section('inline_css')
<style></style>
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
                    <div class="el-alert alert-success">
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
                                        <h2>Weekly Schedule</h2>
                                    </div>
                                    <form class="form-3" action="" method="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="form-details-of-classrooms">
                                                    <ul>
                                                        <li>
                                                            <h4>Monday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="mon_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->mon_start ? 'selected' : '' }} >{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="mon_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->mon_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Tuesday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="tue_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->tue_start ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="tue_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->tue_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Wednesday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="wed_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->wed_start ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="wed_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->wed_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Thursday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="thu_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->thu_start ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="thu_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->thu_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Friday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="fri_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->fri_start ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="fri_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->fri_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Saturday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="sat_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->sat_start ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="sat_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->sat_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Sunday</h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Start</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="sun_start">
                                                                            <select class="el-select2-select-hour hour_time " name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->sun_start ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <input type="hidden" class="form-control" value="sun_end">
                                                                            <select class="el-select2-select-hour hour_time" name="hour_time" required>
                                                                                @foreach ($time_all_day as $time)
                                                                                    <option value="{{ $time['value'] }}" {{ $time['value'] == $schedule->sun_end ? 'selected' : '' }}>{{ $time['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
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
    </div>
</div>
@endsection
@section('js_before')
    <script src="{{asset('frontend/assets/js/dashboard.js')}}"></script>
@endsection
@section('js_after')
<script>


    $( document ).ready(function() {
        $(".hour_time").change(function(){
            var field = $(this).prev('input').val();
            var time = $( this ).val();
            console.log('time: ', time);
            console.log('field: ', field);

            $.ajax({

            type:"GET",
            url:"{{url('schedule_save')}}/"+field+"/"+time,
            success: function(data) {
                console.log(data);
                Toast.fire({
                    icon: 'success',
                    title: data
                })
            }
            });

    });
    });

</script>
@endsection
