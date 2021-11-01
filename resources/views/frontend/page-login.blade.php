@extends('index')
@section('content')
    <!--Header-->
    <header class="app-header app-header-default">
        <a href="index.html" class="button button-md button-arrow button-go-back">
            <span class="icon-arrow arrow-right"></span>
        </a>
    </header>
    <!--/-->
    <!--Wrapper-->
    <div class="app-wrapper">
        <div class="page page-auth">
            <!--Login-->
            <section class="section section-auth">
                <div class="auth-form">
                    <div class="display-spacing display-spacing-plus">
                        <div class="container">
                            <header class="el-heading center">
                                <h2>Sign in to Edu-Line</h2>
                                <h3>
                                    <a href="page-register.html">Not a member? Sign up now.</a>
                                </h3>
                            </header>
                            <form class="form-3 max-w-576">
                                <div class="form-item">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="">
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="">
                                </div>
                                <div class="form-item form-input-q">
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-checkbox">
                                                <label class="checkbox-wrap">
                                                    <span class="checkbox-label">Remember Me</span>
                                                    <input type="checkbox" name="remember">
                                                    <span class="checkbox-mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="input-fp">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item mb-0">
                                    <a href="teacher/dashboard.html" class="button button-md button-block button-primary text-center">
                                        <span class="text text-center">Sign in to Edu-Line</span>
                                    </a>
                                </div>
                                <div class="form-item">
                                    <button class="button button-md button-block button-gmail button-primary" type="button">
                                        <span class="text">Sign in with Google</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="auth-image overlay-image" style="background-image: url(assets/images/auth/auth-login.jpg);"></div>
            </section>
            <!--/-->
        </div>
    </div>
@endsection
