<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$settings->title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('images/settings/'.$settings->favicon)}}" rel="icon">
  {{-- <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0">
        <a href="{{url('/')}}">
          <img src="{{asset('images/settings/'.$settings->logo)}}" alt="logo" class="img-fluid">
        </a>
      </h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link {{'/'==request()->path()?'active':''}}" class="active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link {{'about'==request()->path()?'active':''}}" href="{{url('/about')}}">About</a></li>
          <li><a class="nav-link {{'blog'==request()->path()?'active':''}}" href="{{url('/blog')}}">Blog</a></li>
          <li><a class="nav-link {{'service'==request()->path()?'active':''}}" href="{{url('/service')}}">Services</a></li>
          <li><a class="nav-link {{'contact'==request()->path()?'active':''}}" href="{{url('/contact')}}">Contact</a></li>

          @auth()
          <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
          @else
          <li><a href="{{url('/login')}}">Login</a></li>
          @endauth

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        @if ($settings->tuter)
          <a href="{{$settings->tuter}}" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        @endif
        @if ($settings->facebook)
        <a href="{{$settings->facebook}}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        @endif
        @if ($settings->instragram)
        <a href="{{$settings->instragram}}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        @endif
        @if ($settings->linkdin)
        <a href="{{$settings->linkdin}}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
        @endif
      </div>

    </div>

  </header><!-- End Header -->
@yield('catecorise')

@yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>..</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="{{url('/')}}">SadiaAkter</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>