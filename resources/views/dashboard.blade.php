<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Custom Dashboard - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <div class="row">
                    <div class="col-md-11">
                        <a href="#!">
                            <img src="{{ asset('pngtree-online-course-banner-sticker-png-image_6356847.png') }}"
                                alt="BootstrapBrain Logo" width="250">
                        </a>
                    </div>
                    <div class="col-md-1 ">
                        <a class="dropdown-item bg-primary btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"
                            style="border: 1px solid; padding:10px; ">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">

                    @session('success')
                        <div class="alert alert-success" role="alert">
                            {{ $value }}
                        </div>
                    @endsession

                    <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
                    <p class="col-md-15 fs-13 text-right">"Welcome to our course platform!

                        Explore our wide range of courses in Artificial Intelligence, Cybersecurity, Data Science, Cloud
                        Computing, and Web
                        Development. Whether you're a beginner or an experienced professional, there's something here
                        for everyone.
                        <br>
                        Start your learning journey today and unlock your potential with our expertly crafted courses.

                        Happy learning!"
                    </p>
                    <a href="{{ route('course.dashboard') }}" class="btn btn-primary btn-lg">COURSES</a>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
