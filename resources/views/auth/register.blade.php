<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>BT-Register</title>
    <script src="https://kit.fontawesome.com/2c685a62ec.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Table Style-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>

<body style="background: black;">

    <!-- ======= Contact Section ======= -->
    <section class="contact " style="padding: 0; padding-top:20px;">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Register with us</h2>
                <p style="color: white;">registration</p>
            </div>


            <div class="row ">



                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{ route('register') }}" method="POST" role="form" class="bg-white"
                        style="padding: 20px;">
                        @csrf

                        {{-- Name and Username --}}
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name" class="font-weight-bold text-black">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="name" placeholder="Your Name" required autofocus>
                                @error('name')
                                    <div>
                                        <small class="text-danger">
                                            {{ $message }}</small>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="username" class="font-weight-bold text-black">Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="{{ old('username') }}" id="username" placeholder="Your Username" required
                                    autofocus>

                                @error('username')
                                    <div>
                                        <small class="text-danger">
                                            {{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="font-weight-bold text-black">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                id="email" placeholder="Your Email" required autofocus>
                            @error('email')
                                <div>
                                    <small class="text-danger">
                                        {{ $message }}</small>
                                </div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-group mt-3">
                            <label for="password" class="font-weight-bold text-black">Password</label>
                            <input type="password" class="form-control" name="password"
                                value="{{ old('password') }}" id="password" placeholder="Your Password" required
                                autofocus>
                            @error('password')
                                <div>
                                    <small class="text-danger">
                                        {{ $message }}</small>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password" class="font-weight-bold text-black">Password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" id="password_confirmation"
                                placeholder="Your Password Confirmation" required autofocus>
                            @error('password_confirmation')
                                <div>
                                    <small class="text-danger">
                                        {{ $message }}</small>
                                </div>
                            @enderror
                        </div>

                        <div class="text-left"><button class="btn btn-warning" type="submit">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
