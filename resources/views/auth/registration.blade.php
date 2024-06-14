<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Custom User Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <style type="text/css">
        body {
            background: transparent;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            height: 150%;
            width: 100%;
            background: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url('3682410.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            z-index: -1;
        }

        .custom-form-container {
            width: 600px;
            /* Adjust the width as needed */
            padding: 10px;
            height: 870px;

        }

        .custom-form-control {
            height: 20px;
            /* Adjust the height of form inputs as needed */
        }
    </style>
</head>

<body>
    <div class="background-image"></div>
    <section class="py-3 py-md-5" style="margin-top: -4rem; margin-left: -4rem; background-color: transparent;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="custom-form-container card border border-light-subtle rounded-3 shadow-sm mt-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <a href="#!">
                                    <img src="{{ asset('pngtree-online-course-banner-sticker-png-image_6356847.png') }}"
                                        alt="BootstrapBrain Logo" width="250">
                                </a>
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign up to your account</h2>
                            <form method="POST" action="{{ route('register.post') }}">
                                @csrf

                                @session('error')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $value }}
                                    </div>
                                @endsession

                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" id="name" placeholder="name@example.com" required>
                                            <label for="name" class="form-label">{{ __('Name') }}</label>
                                        </div>
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                id="email" placeholder="name@example.com" required>
                                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        </div>
                                        @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password" value="" placeholder="Password" required>
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                        </div>
                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" id="password_confirmation" value=""
                                                placeholder="password_confirmation" required>
                                            <label for="password_confirmation"
                                                class="form-label">{{ __('Confirm Password') }}</label>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg"
                                                type="submit">{{ __('Register') }}</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="m-0 text-secondary text-center">Have an account? <a
                                                href="{{ route('login') }}"
                                                class="link-primary text-decoration-none">Sign in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
