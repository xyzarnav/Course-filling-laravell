<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <style>
        .custom-btn {
            width: 100px;
            /* Adjust as needed */
            height: 50px;
            /* Adjust as needed */
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        body {
            background: transparent;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            height: 140%;
            width: 100%;
            background: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url('\pexels-julia-m-cameron-4145354.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            z-index: -6;
        }

        .footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            /* Adjust z-index to ensure it's above other content */
        }
    </style>
</head>

<style>

</style>

<body>
    <div id="popup"
        style="display: none; position: fixed; z-index: 1000; left: 50%; top: 50%; transform: translate(-50%, -50%); background: #ffffff; padding: 50px; border-radius: 10px; border: 2px solid #000000; width: 300px; text-align: center; font-size: 20px; box-shadow: 0px 0px 10px rgba(0,0,0,0.5);">
        Wait, your request is being processed...
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-custom rounded-navbar mt-3 navbar-custom-width">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">COURSE-SURFER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a href="{{ route('logout.home') }}" class="btn btn-outline-light me-3">
                            HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Link</a>
                    </li>
                </ul>


                @if (Route::has('login'))
                    <div class="d-flex flex-grow-1 justify-content-end auth-links">
                        @auth
                            <a href="{{ url('/dsh') }}" class="btn btn-outline-light me-3">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-3">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light me-3">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
        <h3 style="color: blue; text-decoration:underline solid black">Featured Course <span style="color: black; font-size: 0.6em;">(user can select only one of them)</span></h3>
        <!-- Card deck -->
        <div class="card-deck row">

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                            src="https://curator-production.s3.us.cloud-object-storage.appdomain.cloud/uploads/Introducing%20AI-02.png"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">1 Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <form action="{{ route('register.course') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="1">
                            <button id="registerButton" type="submit" class="btn btn-primary btn-md">Register</button>
                        </form>

                    </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-photo/ai-technology-microchip-background-digital-transformation-concept_53876-124669.jpg?size=626&ext=jpg&ga=GA1.1.1622700747.1717738843&semt=sph"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Artificial Intelligence (AI)</h4>
                        <!--Text-->
                        <p class="card-text">duration 3 months</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <form action="{{ route('register.course') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="2">
                            <button type="submit" id="registerButton" class="btn btn-primary btn-md">Register</button>
                        </form>

                    </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                            src="https://curator-production.s3.us.cloud-object-storage.appdomain.cloud/uploads/Introducing%20AI-02.png"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Cybersecurity</h4>
                        <!--Text-->
                        <p class="card-text">duration 3 months.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <form action="{{ route('register.course') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="3">
                            <button  id="registerButton" type="submit" class="btn btn-primary btn-md">Register</button>
                        </form>

                    </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-photo/robot-handshake-human-background-futuristic-digital-age_53876-129770.jpg?size=626&ext=jpg&ga=GA1.1.1622700747.1717738843&semt=sph"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Data Science</h4>
                        <!--Text-->
                        <p class="card-text">duration 2 months.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <form action="{{ route('register.course') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="4">
                            <button type="submit" class="btn btn-primary btn-md">Register</button>
                        </form>

                    </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                            src="https://curator-production.s3.us.cloud-object-storage.appdomain.cloud/uploads/Introducing%20AI-02.png"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Cloud Computing</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <form action="{{ route('register.course') }}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="5">
                            <button type="submit" class="btn btn-primary btn-md">Register</button>
                        </form>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <!-- Card -->

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Commng Soon</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-primary btn-md">Comming Soon</button>

                    </div>

                </div>
                <!-- Card -->
            </div>





        </div>
        <!-- Card deck -->

    </div>


<div class="container mt-5">
    <a href="{{ route('table.viewer') }}">All Course Dashboard</a>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Course Duration(Months)</th>
                <th>Created At</th>
                <th>OPERATION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->created_at }}</td>
                    <td>
                    <form action="{{ route('register.course') }}" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <button type="submit" class="btn btn-primary btn-md custom-btn">Register</button>
                    </form>
                    <form action="{{route('course.delete', ['userId' => auth()->id(), 'courseId' => $course->id]) }}" method="POST"
                        class="form-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-md custom-btn">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var registerButtons = document.querySelectorAll('button[type="submit"]');
            registerButtons.forEach(function (button) {
                button.addEventListener('click', function (e) {
                    var popup = document.getElementById('popup');
                    popup.style.display = 'block';
                    setTimeout(function () {
                        popup.style.display = 'none';
                    }, 6000);
                });
            });
        });
    $(document).ready(function () {
        $('#registerButton').click(function () {
            $(this).prop('disabled', true);
        });
    });

    </script>
</body>

</html>
