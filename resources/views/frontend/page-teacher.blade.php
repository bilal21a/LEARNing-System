@extends('index')
@section('content')

    <!--Wrapper-->
    <div class="app-wrapper">
<div class="page page-teacher">
    <!--Teacher Profile-->
    <section class="section section-teacher">
        <figure class="section-shape shape-2">
            <img class="img-fluid" src="assets/images/shapes/2.svg" alt="Image Description" />
        </figure>
        <div class="display-spacing display-spacing-plus">
            <div class="container">
                <div class="row mb--30">
                    <aside class="col-lg-4 col-xl-4 order-lg-2">
                        <div class="sticky-sidebar">
                            <div class="el-panel el-panel-teacher-widget">
                                <div class="el-panel-body">
                                    <div class="teacher">
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/uk.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="avatar">
                                            <img src="assets/images/people/1.jpg" alt="teacher avatar">
                                        </div>
                                        <h1 class="title">Miranda Fox</h1>
                                        <h2 class="excerpt">Hello, I'm Miranda and I'm from Manchester.</h2>
                                    </div>
                                    <div class="el-panel-line">
                                        <div class="row row-0">
                                            <div class="col-6">
                                                <span class="label">1 Lesson:</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="title">$24.00</span>
                                                <span class="subtitle">‌‌(per hour) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="el-panel-line">
                                        <div class="row row-0">
                                            <div class="col-6">
                                                <span class="label">5 Lesson:</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="title">$21.00</span>
                                                <span class="subtitle">‌‌(per hour) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="el-panel-line">
                                        <div class="row row-0">
                                            <div class="col-6">
                                                <span class="label">Trial Lesson:</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button class="button button-xs button-radius button-secondary">
                                                    <span class="text">Free</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="widget-calendar-reserved" class="el-panel-line">
                                        <span class="label">reserved:</span>
                                        <ul class="reserved">
                                        </ul>
                                    </div>
                                    <form id="form-calendar-time" action="#" method="">
                                        <button class="button button-md button-block button-primary">
                                            <span class="text">Book Now</span>
                                        </button>
                                        <input type="hidden" name="tutor_id" value="1">
                                        <input type="hidden" name="course_id" value="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-8 col-xl-8 order-lg-1">
                        <div class="el-panel el-panel-teacher-info">
                            <div class="el-responsive-video">
                                <iframe src="https://www.youtube.com/embed/tDS0GezECkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="el-panel-body">
                                <div class="teacher-summary">
                                    <div class="el-panel-title">
                                        <h3>About Me</h3>
                                    </div>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Teacher Stats</h3>
                                </div>
                                <div class="teacher-stats teacher-stats-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="assets/images/icons/stats-1.svg" alt="stats icon">
                                                </div>
                                                <h3 class="title">Response Time</h3>
                                                <h4 class="subtitle">a few hours</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="assets/images/icons/stats-2.svg" alt="stats icon">
                                                </div>
                                                <h3 class="title">Joined Eduline</h3>
                                                <h4 class="subtitle">4 years ago</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="assets/images/icons/stats-3.svg" alt="stats icon">
                                                </div>
                                                <h3 class="title">Attendance Rate</h3>
                                                <h4 class="subtitle">100%</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="assets/images/icons/stats-4.svg" alt="stats icon">
                                                </div>
                                                <h3 class="title">Total Lessons</h3>
                                                <h4 class="subtitle">210</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="assets/images/icons/stats-5.svg" alt="stats icon">
                                                </div>
                                                <h3 class="title">Lessons per Student</h3>
                                                <h4 class="subtitle">18 lesson average</h4>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="item">
                                                <div class="stats-icon">
                                                    <img src="assets/images/icons/stats-6.svg" alt="stats icon">
                                                </div>
                                                <h3 class="title">Average Rating</h3>
                                                <h4 class="subtitle">5</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-calendar">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Schedule</h3>
                                </div>
                            </div>
                            <div id="afra-calendar" class="el-calendar el-calendar-week">
                                <div class="el-calendar-slider">
                                    <div class="el-calendar-slider-prev disabled">
                                        <span class="fa fa-angle-left"></span>
                                    </div>
                                    <div class="el-calendar-slider-next">
                                        <span class="fa fa-angle-right"></span>
                                    </div>
                                    <div class="el-calendar-slider-wrapper">
                                        <!--Slide (Week)-->
                                        <div class="el-calendar-slider-item el-calendar-slider-item-1 active" data-id="1">
                                            <div class="el-calendar-tabs">
                                                <!--Week Days-->
                                                <ul class="week-days el-calendar-tabs-links">
                                                    <!--Day 1-->
                                                    <li class="day deactive" data-filter="Saturday">
                                                        <p>
                                                            <span class="week-day-name">Sat</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">1</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Day 2-->
                                                    <li class="day deactive" data-filter="Sunday">
                                                        <p>
                                                            <span class="week-day-name">Sun</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">2</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Day 3-->
                                                    <li class="day deactive" data-filter="Monday">
                                                        <p>
                                                            <span class="week-day-name">Mon</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">3</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Day 4-->
                                                    <li class="day active" data-filter="Tuesday">
                                                        <p>
                                                            <span class="week-day-name">Tue</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">4</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Day 5-->
                                                    <li class="day" data-filter="Wednesday">
                                                        <p>
                                                            <span class="week-day-name">Wed</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">5</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Day 6-->
                                                    <li class="day" data-filter="Thursday">
                                                        <p>
                                                            <span class="week-day-name">Thu</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">6</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Day 7-->
                                                    <li class="day" data-filter="Friday">
                                                        <p>
                                                            <span class="week-day-name">Fri</span>
                                                        </p>
                                                        <p>
                                                            <span class="week-day-date">7</span>
                                                            <span class="week-day-date">May</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                </ul>
                                                <!--/Week Days-->
                                                <!--Saturday-->
                                                <ul class="day-hours el-calendar-tabs-items" data-filter="Saturday">
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
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="10:00" data-calendar-end="11:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>10:00</span>
                                                            <span> - </span>
                                                            <span>11:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="11:00" data-calendar-end="12:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>11:00</span>
                                                            <span> - </span>
                                                            <span>12:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="14:00" data-calendar-end="15:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>14:00</span>
                                                            <span> - </span>
                                                            <span>15:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="17:00" data-calendar-end="18:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>17:00</span>
                                                            <span> - </span>
                                                            <span>18:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="18:00" data-calendar-end="19:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>18:00</span>
                                                            <span> - </span>
                                                            <span>19:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="19:00" data-calendar-end="20:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>19:00</span>
                                                            <span> - </span>
                                                            <span>20:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="20:00" data-calendar-end="21:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>20:00</span>
                                                            <span> - </span>
                                                            <span>21:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                </ul>
                                                <!--/Saturday-->
                                                <!--Sunday-->
                                                <ul class="day-hours el-calendar-tabs-items" data-filter="Sunday">
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
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>09:00</span>
                                                            <span> - </span>
                                                            <span>10:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>10:00</span>
                                                            <span> - </span>
                                                            <span>11:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>11:00</span>
                                                            <span> - </span>
                                                            <span>12:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>14:00</span>
                                                            <span> - </span>
                                                            <span>15:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>17:00</span>
                                                            <span> - </span>
                                                            <span>18:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>18:00</span>
                                                            <span> - </span>
                                                            <span>19:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>19:00</span>
                                                            <span> - </span>
                                                            <span>20:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>20:00</span>
                                                            <span> - </span>
                                                            <span>21:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                </ul>
                                                <!--/Sunday-->
                                                <!--Monday-->
                                                <ul class="day-hours el-calendar-tabs-items" data-filter="Monday">
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
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>09:00</span>
                                                            <span> - </span>
                                                            <span>10:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>10:00</span>
                                                            <span> - </span>
                                                            <span>11:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>11:00</span>
                                                            <span> - </span>
                                                            <span>12:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>14:00</span>
                                                            <span> - </span>
                                                            <span>15:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>17:00</span>
                                                            <span> - </span>
                                                            <span>18:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>18:00</span>
                                                            <span> - </span>
                                                            <span>19:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>19:00</span>
                                                            <span> - </span>
                                                            <span>20:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour reserved">
                                                        <p class="day-cell">
                                                            <span>20:00</span>
                                                            <span> - </span>
                                                            <span>21:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
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
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 2" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>08:00</span>
                                                            <span> - </span>
                                                            <span>09:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 2" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>09:00</span>
                                                            <span> - </span>
                                                            <span>10:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 2" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>10:00</span>
                                                            <span> - </span>
                                                            <span>11:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 2" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>11:00</span>
                                                            <span> - </span>
                                                            <span>12:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 2" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>14:00</span>
                                                            <span> - </span>
                                                            <span>15:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 2" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>17:00</span>
                                                            <span> - </span>
                                                            <span>18:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>18:00</span>
                                                            <span> - </span>
                                                            <span>19:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>19:00</span>
                                                            <span> - </span>
                                                            <span>20:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>20:00</span>
                                                            <span> - </span>
                                                            <span>21:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                </ul>
                                                <!--/Wednesday-->
                                                <!--Thursday-->
                                                <ul class="day-hours el-calendar-tabs-items" data-filter="Thursday">
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>08:00</span>
                                                            <span> - </span>
                                                            <span>09:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>09:00</span>
                                                            <span> - </span>
                                                            <span>10:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>10:00</span>
                                                            <span> - </span>
                                                            <span>11:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>11:00</span>
                                                            <span> - </span>
                                                            <span>12:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>14:00</span>
                                                            <span> - </span>
                                                            <span>15:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>17:00</span>
                                                            <span> - </span>
                                                            <span>18:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>18:00</span>
                                                            <span> - </span>
                                                            <span>19:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>19:00</span>
                                                            <span> - </span>
                                                            <span>20:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>20:00</span>
                                                            <span> - </span>
                                                            <span>21:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                </ul>
                                                <!--/Thursday-->
                                                <!--Friday-->
                                                <ul class="day-hours el-calendar-tabs-items" data-filter="Friday">
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>08:00</span>
                                                            <span> - </span>
                                                            <span>09:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>09:00</span>
                                                            <span> - </span>
                                                            <span>10:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>10:00</span>
                                                            <span> - </span>
                                                            <span>11:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>11:00</span>
                                                            <span> - </span>
                                                            <span>12:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>14:00</span>
                                                            <span> - </span>
                                                            <span>15:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>17:00</span>
                                                            <span> - </span>
                                                            <span>18:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>18:00</span>
                                                            <span> - </span>
                                                            <span>19:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>19:00</span>
                                                            <span> - </span>
                                                            <span>20:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                    <!--Step-->
                                                    <li data-calendar-time="2020-01-01 06:00:00" data-calendar-start="08:00" data-calendar-end="09:00" data-calendar-date="May 1" data-calendar-weekday="Sat" class="hour">
                                                        <p class="day-cell">
                                                            <span>20:00</span>
                                                            <span> - </span>
                                                            <span>21:00</span>
                                                        </p>
                                                    </li>
                                                    <!--/-->
                                                </ul>
                                                <!--/Friday-->
                                            </div>
                                        </div>
                                        <!--/-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-teacher-posts">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Latests Posts</h3>
                                </div>
                                <div class="el-excerpt-posts">
                                    <ul class="row row-xs">
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">Blogging for business? Here’s everything you need to know.</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">The benefits of blogging for business and marketing.</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">5 powerful benefits of blogging for your small business.</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xl-6">
                                            <div class="item">
                                                <h4>
                                                    <a href="page-single-post.html" target="_blank">
                                                        <span class="text">How many blog posts should your business publish each month?</span>
                                                    </a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <a href="page-single-post.html" class="button button-sm">
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-comments">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Leave a comment</h3>
                                </div>
                                <div class="el-comments">
                    <div class="comments-form">
                        <div class="comments-body">
                            <form class="form form-3">
                                <div class="form-item">
                                    <label for="input-message" class="form-label">Your Message</label>
                                    <textarea id="input-message"></textarea>
                                </div>
                                <div class="form-item">
                                    <button class="button button-md button-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                        <div class="el-panel el-panel-comments">
                            <div class="el-panel-body">
                                <div class="el-panel-title">
                                    <h3>Comments</h3>
                                </div>
                                <div class="el-comments">
    <div class="comments-list">
        <div class="comments-head">
        </div>
        <div class="comments-body">
            <ul class="comments-ul row row-xs">
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/1.jpg" alt="Relevant textual alternative to the person-1 image">
                            </div>
                            <h5 class="author">Miranda Fox</h5>
                            <span class="opacity">3 lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">Score</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/2.jpg" alt="Relevant textual alternative to the person-1 image">
                            </div>
                            <h5 class="author">James Maxwell</h5>
                            <span class="opacity">3 lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">Score</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/3.jpg" alt="Relevant textual alternative to the person-3 image">
                            </div>
                            <h5 class="author">John Woo</h5>
                            <span class="opacity">3 Lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">
                        <div class="comment-body">
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/4.jpg" alt="Relevant textual alternative to the person-4 image">
                            </div>
                            <h5 class="author">Emily Thompson</h5>
                            <span class="opacity">3 Lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">

                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/5.jpg" alt="Relevant textual alternative to the person-3 image">
                            </div>
                            <h5 class="author">Robert Fox</h5>
                            <span class="opacity">3 Lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xl-6">
                    <div class="comment el-card">

                        <div class="comment-body">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        </div>
                        <div class="comment-head">
                            <div class="avatar">
                                <img src="assets/images/people/6.jpg" alt="Relevant textual alternative to the person-3 image">
                            </div>
                            <h5 class="author">Ava Taylor</h5>
                            <span class="opacity">3 lessons</span>
                            <span class="date">May 1, 2020</span>
                            <div class="score">
                                <span class="title">امتیاز</span>
                                <ul class="el-stars">
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="col-xl-6">
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="el-pagination">
                <li class="active"><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
            </ul>
        </div>
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
    <!--Teachers-->
<section class="section section-teachers section-teachers-slider">
    <div class="display-spacing">
        <div class="container">
            <header class="el-heading center">
                <h2>Our professional teachers</h2>
                <p>We provide the best service that comes with the best results.</p>
                <div class="divider divider-line"></div>
            </header>
            <div class="el-slider">
                <div class="swiper-container swiper-teachers">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/1.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Miranda Fox</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/russia.svg" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/icons/graduation.svg" alt="Is experienced" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/2.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>James Maxwell</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/germany.svg" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/icons/language-exhange.svg" alt="language exhange" />
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="icons icons-right">
                                            <li>
                                                <p class="icon-status bg-danger">
                                                    <span>Native</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/3.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>John Woo</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/italy.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/4.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Emily Thompson</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/uk.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="icons icons-right">
                                            <li>
                                                <p class="icon-status bg-secondary">
                                                    <span>Starter</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/5.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Robert Fox</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/india.svg" alt="Lang" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card el-card">
                                <a href="page-teacher.html">
                                    <div class="inner">
                                        <div class="avatar">
                                            <img src="assets/images/people/6.jpg" alt="alt" />
                                        </div>
                                        <div class="details">
                                            <h3>Ava Taylor</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                        <div class="other">
                                            <p class="price">
                                                <span>Price</span>
                                                <span class="text-color new-price">$20.00</span>
                                                <span class="text-color old-price">$25.00</span>
                                            </p>
                                        </div>
                                        <ul class="icons icons-left">
                                            <li>
                                                <div class="icon-lang">
                                                    <img src="assets/images/flags/france.svg" alt="Lang" />
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-off">
                                                    <span>%20</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="icons icons-right">
                                            <li>
                                                <p class="icon-status bg-danger">
                                                    <span>Native</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="el-read-more div-center text-center">
                <a href="page-teachers.html" class="el-popover">
                    <p class="button button-circle-lg button-circle button-primary">
                        <span class="fa fa-refresh"></span>
                    </p>
                    <p class="el-popover-title">
                        <span>More Teachers?</span>
                    </p>
                </a>
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
