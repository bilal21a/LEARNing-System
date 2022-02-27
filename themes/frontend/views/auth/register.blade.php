<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teachestan</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="frontend/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="frontend/assets/css/styles.css" />
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
                                <h2>Sign up to Edu-Line</h2>
                                <h3>
                                    <a href="{{ route('login') }}">Already a member? Sign In.</a>
                                </h3>
                            </header>
                            <form method="POST" class="form-3 max-w-576" action="{{ route('register') }}">
                                @csrf
                                <div class="form-item">
                                    <label class="form-label">Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-item">
                                    <label class="form-label">Repeat Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-item">
                                    <label for="input-type" class="form-label">Registerd as:</label>
                                    <div class="input-select">
                                        <select class="el-select2-select-hour" name="role" required>
                                            <option value="student">Student</option>
                                            <option value="teacher">Teacher</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-item mb-0">
                                    <button class="button button-md button-block button-primary" type="submit">
                                        <span class="text">Create Account</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="auth-image overlay-image"
                    style="background-image: url(frontend/assets/images/auth/auth-register.jpg);">
                </div>
            </section>

        </div>
    </div>
    <script src="frontend/assets/js/jquery.min.js"></script>
    <script src="frontend/assets/js/plugins.min.js"></script>
    <script src="frontend/assets/js/main-scripts.js"></script>
</body>

</html>
