<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME | GESTION FORMATION</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        {{-- links --}}
        <link href="{{ asset('admin/images/logo-mini.png') }}" rel="icon">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="asset('welcome/lib/animate/animate.min.css')" rel="stylesheet">
        <link href="{{ asset('welcome/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">Our Team</a>
                        <a href="#" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
                @if (Route::has('login'))
                    @auth
                        <a 
                            href="{{ url('/home') }}" 
                            class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
                        >
                            Home
                            <i class="fa fa-arrow-right ms-3"></i></a>
                        </a>
                        @else
                        <a 
                            href="{{ route('login') }}" 
                            class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
                        >
                            Log in
                            <i class="fa fa-arrow-right ms-3"></i></a>
                        </a> 
                    @endauth
                @endif     
            </div>
    </nav>
    <!-- Navbar End -->

    <h1>Welcome page !</h1>

        {{-- scripts linked --}}
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('welcome/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('welcome/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('welcome/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('welcome/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('welcome/js/main.js') }}"></script>
    </body>
</html>
