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
                                        <h2>Add new Schedule</h2>
                                    </div>
                                    <form class="form-3" action="{{ route('schedule_save') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-item">
                                                    <label for="input-classroom-name" class="form-label">Schedule Name</label>
                                                    <input type="text" name="cname" id="input-classroom-name" />
                                                </div>
                                            </div>

                                            {{--
                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-item">
                                                    <label class="form-label">Price</label>
                                                    <input type="number" name="price" min="1000" max="1000000" step="1000" value="0" required />
                                                </div>
                                            </div>
                                            --}}
                                            <div class="col-12">
                                                <hr />
                                            </div>
                                            <div class="col-12">
                                                <div id="form-details-of-classrooms">
                                                    <ul>
                                                        <li>
                                                            <h4>Lesson <span>1</span></h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Year</label>
                                                                        <div class="input-select">
                                                                            <select class="el-select2-select-hour" name="year" required>
                                                                                <option selected disabled>Select Year</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
                                                                                <option value="2026">2026</option>
                                                                                <option value="2027">2027</option>
                                                                                <option value="2028">2028</option>
                                                                                <option value="2029">2029</option>
                                                                                <option value="2030">2030</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Month</label>
                                                                        <div class="input-select">
                                                                            <select class="el-select2-select-hour" name="month" required>
                                                                                <option selected disabled>Select Month</option>
                                                                                <option value="01">January</option>
                                                                                <option value="02">February</option>
                                                                                <option value="03">March</option>
                                                                                <option value="04">April</option>
                                                                                <option value="05">May</option>
                                                                                <option value="06">June</option>
                                                                                <option value="07">July</option>
                                                                                <option value="08">August</option>
                                                                                <option value="09">September</option>
                                                                                <option value="10">October</option>
                                                                                <option value="11">November</option>
                                                                                <option value="12">December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Days</label>
                                                                        <div class="input-select">
                                                                            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" name="days[]" class="selectpicker w-100">
                                                                                <option selected disabled>Select Days</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                                <option value="16">16</option>
                                                                                <option value="17">17</option>
                                                                                <option value="18">18</option>
                                                                                <option value="19">19</option>
                                                                                <option value="20">20</option>
                                                                                <option value="21">21</option>
                                                                                <option value="22">22</option>
                                                                                <option value="23">23</option>
                                                                                <option value="24">24</option>
                                                                                <option value="25">25</option>
                                                                                <option value="26">26</option>
                                                                                <option value="27">27</option>
                                                                                <option value="28">28</option>
                                                                                <option value="29">29</option>
                                                                                <option value="30">30</option>
                                                                                <option value="31">31</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">Available Time</label>
                                                                        <div class="input-select">
                                                                            <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" name="available_time[]" class="selectpicker w-100">
                                                                                <option selected disabled>Select Available time</option>
                                                                                <option value="0">12:00 am</option>
                                                                                <option value="1">1:00 am</option>
                                                                                <option value="2">2:00 am</option>
                                                                                <option value="3">3:00 am</option>
                                                                                <option value="4">4:00 am</option>
                                                                                <option value="5">5:00 am</option>
                                                                                <option value="6">6:00 am</option>
                                                                                <option value="7">7:00 am</option>
                                                                                <option value="8">8:00 am</option>
                                                                                <option value="9">9:00 am</option>
                                                                                <option value="10">10:00 am</option>
                                                                                <option value="11">11:00 am</option>
                                                                                <option value="12">12:00 pm</option>
                                                                                <option value="13">1:00 pm</option>
                                                                                <option value="14">2:00 pm</option>
                                                                                <option value="15">3:00 pm</option>
                                                                                <option value="16">4:00 pm</option>
                                                                                <option value="17">5:00 pm</option>
                                                                                <option value="18">6:00 pm</option>
                                                                                <option value="19">7:00 pm</option>
                                                                                <option value="20">8:00 pm</option>
                                                                                <option value="21">9:00 pm</option>
                                                                                <option value="22">10:00 pm</option>
                                                                                <option value="23">11:00 pm</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr />
                                            </div>
                                            <div class="col-12">
                                                <button class="button button-md button-block button-primary" type="submit">
                                                    <span class="text">Add new Lesson</span>
                                                </button>
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
@endsection @section('js_before')
<script src="{{asset('frontend/assets/js/dashboard.js')}}"></script>
@endsection @section('js_after')

<script></script>
@endsection
