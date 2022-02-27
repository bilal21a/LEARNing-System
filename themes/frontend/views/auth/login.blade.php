<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teachestan</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css') }}" />
</head>

<body>

    <header class="app-header app-header-default">
        <a href="{{ url('/') }}" class="button button-md button-arrow button-go-back">
            <span class="icon-arrow arrow-right"></span>
        </a>
    </header>


    <div class="app-wrapper">
        <div class="page page-auth">


            <section class="section section-auth">
                <div class="auth-form">
                    <div class="display-spacing display-spacing-plus">
                        <div class="container">
                            <header class="el-heading center">
                                <h2>{{ __('Login') }} to Edu-Line</h2>
                                <h3>
                                    <a href="{{ route('register') }}">Not a member? Sign up now.</a>
                                </h3>
                            </header>
                            <form class="form-3 max-w-576" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-item">
                                    <label class="form-label">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-item form-input-q">
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-checkbox">
                                                <label class="checkbox-wrap">
                                                    <span class="checkbox-label">Remember Me</span>
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
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
                                    <button class="button button-md button-block button-primary" type="submit">
                                        <span class="text">Sign in to Edu-Line</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="auth-image overlay-image"
                    style="background-image: url(frontend/assets/images/auth/auth-login.jpg);">
                </div>
            </section>

        </div>
    </div>
    <script src="frontend/assets/js/jquery.min.js"></script>
    <script src="frontend/assets/js/plugins.min.js"></script>
    <script src="frontend/assets/js/main-scripts.js"></script>
</body>

</html>
