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
.days_block{
    margin-bottom: 6px;
    display:none;
}
.days_single{
    width: 45px;
    height: 30px;
    border-radius: 10px;
    background: #1cc9b7;
    display: inline-block;
    text-align: center;
    color:#fff;
    padding: 6px 6px 0px 6px;
    margin-top: 3px;
    cursor: pointer;
}
.span_break{
    display: none;
}
.green_day{
    background: #1cc9b7 !important;
}
.alt_day{
    background: #384cce !important;
}
.loader_days{ display:none}





@media screen and (min-width: 992px) and (max-width: 1200px) {
  .span_break { display: block; }  /* show it on small screens */
}

@media screen and (min-width: 0px) and (max-width: 991px) {
    .span_break { display: none; }   /* hide it elsewhere */
}
@media screen and (min-width: 1200px)  {
    .span_break { display: none; }   /* hide it elsewhere */
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
                                    <div class="days_block">
                                        <span class="days_single">Mon</span>
                                        <span class="days_single">Tue</span>
                                        <span class="days_single">Thu</span>
                                        <br class="span_break">
                                        <span class="days_single">Fri</span>
                                        <span class="days_single">Sat</span>
                                        <span class="days_single">Sun</span>
                                    </div>

                                    <button class="button button-md button-block button-secondary free_trail_1">
                                        <span class="text">Free Trail</span>
                                    </button>
                                    <input type="hidden" value="{{ $teacher_id }}" name="teacher_id" id="teacher_id">
                                    <input type="hidden" value="{{ auth()->user()->id }}" name="student_id" id="student_id">
                                    <button class="button button-md button-block button-secondary free_trail_2" style="display: none">
                                        <span class="text free_text">Free Trail</span>
                                        <span class="loader_days"><i class="fas fa-spinner fa-spin "></i></span>
                                    </button>


                                    <span class="after_free_trail" style="display: none"></span>
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

@section('js_after')
    <script>
        $( ".free_trail_1" ).click(function() {
            $('.days_block').show(500);
            $('.free_trail_2').show();
            $('.free_trail_1').hide();

        });
        $( ".days_single" ).click(function() {
            $(this).addClass('alt_day');
            $(this).removeClass('green_day');
            $(this).siblings().removeClass('alt_day');
            $(this).siblings().addClass('green_day');

            $( ".free_trail_2" ).off('click').click(function() {

                const day= $('.alt_day').text();
                if (day!='') {


                $('.loader_days').show();
                $('.free_trail_2').attr('disabled', true);
                $('.free_text').text('Loading');

                const teacher_id= $('#teacher_id').val();
                const student_id= $('#student_id').val();

                $.ajax({
                    url: "{{ route('get_free_trail') }}",
                    type:"POST",
                    data:{
                    day:day,
                    teacher_id:teacher_id,
                    student_id:student_id,
                    _token: "{{ csrf_token() }}",
                    },
                    success:function(response){
                    $('.loader_days').hide();
                    $('.free_trail_2').hide();
                    $('.days_block').hide();
                    $('.after_free_trail').show();
                    $('.after_free_trail').text(response);

                    },
                    error: function(error) {
                    $('.loader_days').hide();
                    $('.free_trail_2').attr('disabled', false);
                    $('.free_text').text('Free Trail');
                    }
                });
            }


            });

        });
    </script>
@endsection
