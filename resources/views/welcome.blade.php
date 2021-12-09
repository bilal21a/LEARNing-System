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
                                    <a href="teacher/dashboard-profile.html" class="button button-md">
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
                            <a href="teacher/dashboard.html">
                                <i class="fa fa-cog"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="teacher/dashboard-profile.html">
                                <i class="fa fa-cog"></i>
                                <span class="text">Your Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="teacher/dashboard-skills.html">
                                <i class="fa fa-cog"></i>
                                <span class="text">Your Skills</span>
                            </a>
                        </li>
                        <li>
                            <a href="teacher/dashboard-courses.html">
                                <i class="fa fas fa-book"></i>
                                <span class="text">Courses</span>
                            </a>
                        </li>
                        <li>
                            <a href="teacher/dashboard-classrooms.html">
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
                    <a href="student/dashboard-wallet.html" class="button button-md button-radius button-block button-light">
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
                                        <h2>Add new Lesson</h2>
                                    </div>
                                    <form class="form-3" action="" method="">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-9">
                                                <div class="form-item">
                                                    <label for="input-classroom-name" class="form-label">Name</label>
                                                    <input type="text" name="cname" id="input-classroom-name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-3">
                                                <div class="form-item">
                                                    <label class="form-label">Counts</label>
                                                    <div class="quantity">
                                                        <input type="number" name="count" id="input-add-classrooms" min="1" max="15" step="1" value="1">
                                                        <div class="quantity-nav">
                                                            <div id="button-append-classroom" class="quantity-button quantity-up">+</div>
                                                            <div id="button-delete-classroom" class="quantity-button quantity-down">-</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-item">
                                                    <label class="form-label">Price</label>
                                                    <input type="number" name="price" min="1000" max="1000000" step="1000" value="0" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-12">
                                                <div id="form-details-of-classrooms">
                                                    <ul>
                                                        <li>
                                                            <h4>Lesson <span>1</span></h4>
                                                            <div class="row row-sm">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label class="form-label">Start</label>
                                                                        <input type="text" name="date[]" class="input-datepicker" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="form-item">
                                                                        <label for="input-type" class="form-label">End</label>
                                                                        <div class="input-select">
                                                                            <select class="el-select2-select-hour" name="hour[]" required>
                                                                                <option value="">&nbsp;</option>
                                                                                <option value="7">07:00</option>
                                                                                <option value="8">08:00</option>
                                                                                <option value="9">09:00</option>
                                                                                <option value="10">10:00</option>
                                                                                <option value="11">11:00</option>
                                                                                <option value="12">12:00</option>
                                                                                <option value="13">13:00</option>
                                                                                <option value="14">14:00</option>
                                                                                <option value="15">15:00</option>
                                                                                <option value="16">16:00</option>
                                                                                <option value="17">17:00</option>
                                                                                <option value="18">18:00</option>
                                                                                <option value="19">19:00</option>
                                                                                <option value="20">20:00</option>
                                                                                <option value="21">21:00</option>
                                                                                <option value="22">22:00</option>
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
                                                <hr>
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
