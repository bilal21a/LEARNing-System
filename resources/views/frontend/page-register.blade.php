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
                                <h2>Sign up to Edu-Line</h2>
                                <h3>
                                    <a href="page-login.html">Already a member? Sign In.</a>
                                </h3>
                            </header>
                            <form class="form-3 max-w-576">
                                <div class="form-item">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="text">
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="text">
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Repeat Password</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="form-item mb-0">
                                    <button class="button button-md button-block button-primary" type="submit">
                                        <span class="text">Create Account</span>
                                    </button>
                                </div>
                                <div class="form-item">
                                    <button class="button button-md button-block button-gmail button-primary" type="button">
                                        <span class="text">Register with Google</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="auth-image overlay-image" style="background-image: url(assets/images/auth/auth-register.jpg);"></div>
            </section>
            <!--/-->
        </div>
    </div>
@endsection
