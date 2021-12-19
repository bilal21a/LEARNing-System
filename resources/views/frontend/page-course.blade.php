@extends('index')
@section('inline_css')
<style>
.container ul {
  list-style-type: none;
}
/* Using a background image */
.list-1 li {
  background: url(http://ts1.mm.bing.net/th?&id=JN.zbFVGGFnENhsLdbnqmoY5w&w=300&h=300&c=0&pid=1.9&rs=0&p=0&r=0) left center no-repeat;
  padding-left: 3em;
}
/* Using the pseudo element before to hold a border-triangle */

/* Using the pseudo element before to hold a cirlce */
.list-3 li:before {
  content: "";
  display: inline-block;
  background-color: blue;
  height: 6px;
  width: 6px;
  border-radius: 3px;
  margin: 0 .5em 1px 0;
}
/* Adding the error class to the li changes the color of the bullet this must be after the normal color is set */
.error + li:before {
  background-color: red;
}

</style>
@endsection
@section('content')

    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-course">
    <!--Course-->
    <section class="section section-course">
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
        </figure>
        <div class="display-spacing display-spacing-plus">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-lg-8 col-xl-8 order-lg-1">
                        <div class="el-panel el-panel-course-info">
                            <div class="el-responsive-video">
                                <iframe src="https://www.youtube.com/embed/tDS0GezECkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="el-panel-body">
                                <div class="course-summary">
                                    <div class="el-panel-title">
                                        <h1>About this course</h1>
                                    </div>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-calendar">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Schedule</h2>
                                </div>
                                @if (!$schedules->isEmpty())

                                <div class="row row-xs">
                                    @if (($count['mon_start'] != 0) && ($count['mon_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Monday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->mon_start_val != 'no time') && ($schedule->mon_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->mon_start_val }} - {{ $schedule->mon_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (($count['tue_start'] != 0) && ($count['tue_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Tuesday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->tue_start_val != 'no time') && ($schedule->tue_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->tue_start_val }} - {{ $schedule->tue_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (($count['wed_start'] != 0) && ($count['wed_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Wednesday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->wed_start_val != 'no time') && ($schedule->wed_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->wed_start_val }} - {{ $schedule->wed_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (($count['thu_start'] != 0) && ($count['thu_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Thursday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->thu_start_val != 'no time') && ($schedule->thu_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->thu_start_val }} - {{ $schedule->thu_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (($count['fri_start'] != 0) && ($count['fri_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Friday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->fri_start_val != 'no time') && ($schedule->fri_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->fri_start_val }} - {{ $schedule->fri_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (($count['sat_start'] != 0) && ($count['sat_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Saturday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->sat_start_val != 'no time') && ($schedule->sat_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->sat_start_val }} - {{ $schedule->sat_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (($count['sun_start'] != 0) && ($count['sun_end'] != 0))
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="item">
                                            <div class="row row-xs">
                                                <div class="col" style="position: absolute;top: 40%;">
                                                    <span class="week" >
                                                        <ul class="list-3" style="padding:0">
                                                            <li style="font-weight:bold">Sunday</li>
                                                          </ul>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    @foreach ($schedules as $schedule)
                                                        @if (($schedule->sun_start_val != 'no time') && ($schedule->sun_end_val != 'no time'))
                                                            <span class="hour">{{ $schedule->sun_start_val }} - {{ $schedule->sun_end_val }}</span><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif


                                </div>

                                @else
                                <p>Teacher does not have any active Schedule</p>
                                @endif

                            </div>
                        </div>

                        <div class="el-panel el-panel-calendar">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h2>Free Trail</h2>
                                </div>
                                <div id="afra-calendar" class="el-calendar el-calendar-week">
                                    <div class="el-calendar-slider">
                                        <div class="el-calendar-slider-wrapper">
                                            <!--Slide (Week)-->
                                            <div class="el-calendar-slider-item el-calendar-slider-item-1 active" data-id="1">
                                                <div class="el-calendar-tabs">
                                                    <!--Week Days-->
                                                    <ul class="week-days el-calendar-tabs-links">
                                                        <!--Day 1-->
                                                        <li class="day deactive" data-filter="Monday">
                                                            <p>
                                                                <span class="week-day-name">Mon</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Day 2-->
                                                        <li class="day active" data-filter="Tuesday">
                                                            <p>
                                                                <span class="week-day-name">Tue</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Day 3-->
                                                        <li class="day" data-filter="Wednesday">
                                                            <p>
                                                                <span class="week-day-name">Wed</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Day 4-->
                                                        <li class="day" data-filter="Thursday">
                                                            <p>
                                                                <span class="week-day-name">Thu</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Day 5-->
                                                        <li class="day" data-filter="Friday">
                                                            <p>
                                                                <span class="week-day-name">Fri</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Day 6-->
                                                        <li class="day deactive" data-filter="Saturday">
                                                            <p>
                                                                <span class="week-day-name">Sat</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Day 7-->
                                                        <li class="day deactive" data-filter="Sunday">
                                                            <p>
                                                                <span class="week-day-name">Sun</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                    </ul>
                                                    <!--/Week Days-->
                                                    <!--Saturday-->
                                                    <ul class="day-hours el-calendar-tabs-items" data-filter="Saturday">

                                                    </ul>
                                                    <!--/Saturday-->
                                                    <!--Sunday-->
                                                    <ul class="day-hours el-calendar-tabs-items" data-filter="Sunday">

                                                    </ul>
                                                    <!--/Sunday-->
                                                    <!--Monday-->
                                                    <ul class="day-hours el-calendar-tabs-items" data-filter="Monday">

                                                    </ul>
                                                    <!--/Monday-->
                                                    <!--Tuesday-->
                                                    <ul class="day-hours el-calendar-tabs-items active" data-filter="Tuesday">
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                            <p class="day-cell">
                                                                <span>08:00</span>
                                                                <span> - </span>
                                                                <span>09:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="09:00" data-calendar-end="10:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                            <p class="day-cell">
                                                                <span>09:00</span>
                                                                <span> - </span>
                                                                <span>10:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="10:00" data-calendar-end="11:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour inactive">
                                                            <p class="day-cell">
                                                                <span>10:00</span>
                                                                <span> - </span>
                                                                <span>11:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="11:00" data-calendar-end="12:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                            <p class="day-cell">
                                                                <span>11:00</span>
                                                                <span> - </span>
                                                                <span>12:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="14:00" data-calendar-end="15:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                            <p class="day-cell">
                                                                <span>14:00</span>
                                                                <span> - </span>
                                                                <span>15:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="17:00" data-calendar-end="18:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                            <p class="day-cell">
                                                                <span>17:00</span>
                                                                <span> - </span>
                                                                <span>18:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="18:00" data-calendar-end="19:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                            <p class="day-cell">
                                                                <span>18:00</span>
                                                                <span> - </span>
                                                                <span>19:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="19:00" data-calendar-end="20:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                            <p class="day-cell">
                                                                <span>19:00</span>
                                                                <span> - </span>
                                                                <span>20:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                        <!--Step-->
                                                        <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="20:00" data-calendar-end="21:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                            <p class="day-cell">
                                                                <span>20:00</span>
                                                                <span> - </span>
                                                                <span>21:00</span>
                                                            </p>
                                                        </li>
                                                        <!--/-->
                                                    </ul>
                                                    <!--/Tuesday-->
                                                    <!--Wednesday-->
                                                    <ul class="day-hours el-calendar-tabs-items" data-filter="Wednesday">

                                                    </ul>

                                                </div>
                                            </div>
                                            <!--/-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-4 col-xl-4 order-lg-2">
                        <div class="sticky-sidebar">
                            <div class="el-panel el-panel-course-widget">
                                <div class="el-panel-body">
                                    <div class="teacher">
                                        <div class="avatar">
                                            <ul class="icons">
                                                <li>
                                                    <div class="icon-lang">
                                                        <img src="assets/images/flags/italy.svg" alt="Lang" />
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="page-teacher.html" target="_blank">
                                                <img src="assets/images/people/2.jpg" alt="teacher avatar">
                                            </a>
                                        </div>
                                        <p class="title">
                                            <a href="page-teacher.html" target="_blank">
                                                <span>Miranda Fox</span>
                                            </a>
                                        </p>
                                        <p class="excerpt">Hello, I'm Miranda a experienced teacher<br />and I'm from Manchester.</p>
                                        <ul class="icons icons-center">
                                            <li>
                                                <p class="icon-status bg-success">
                                                    <span>Starter</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="icon-status bg-danger">
                                                    <span>Native</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="el-panel-line">
                                        <div class="row row-0">
                                            <div class="col-6">
                                                <span class="label">1 Lesson:</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="title">$25.00 (per hour)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="el-panel-line">
                                        <div class="row row-0">
                                            <div class="col-6">
                                                <span class="label">5 Lessons:</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="title">$24.00 (per hour)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button button-md button-block button-primary">
                                        <span class="text">Book Now</span>
                                    </button>
                                    <hr>
                                    <button class="button button-md button-block button-secondary">
                                        <span class="text">Free Trail</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </aside>
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
