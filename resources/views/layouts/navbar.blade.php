<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @if(Route::currentRouteName() == 'welcome')
        <title>  Welcome | Anidaso Farms</title>
    @elseif (Route::currentRouteName() == 'our-team')
        <title> Team | Anidaso Farms</title>
    @elseif (Route::currentRouteName() == 'our-core-values')
        <title> Core Values | Anidaso Farms</title>
    @elseif (Route::currentRouteName() == 'about-us')
        <title> About Us | Anidaso Farms</title>
    @elseif (Route::currentRouteName() == 'portfolio')
        <title> Portfolio | Anidaso Farms</title>
    @elseif (Route::currentRouteName() == 'contact-us')
        <title> Contact Us | Anidaso Farms</title>
    @endif
  
  <meta content="Anidaso farms is a commercial poultry farm that produces and sells 
  high-quality, healthy and nutritious eggs and chicken to households and corporate businesses" name="description">
  <meta content="poultry | farms | eggs | chicken" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template/assets/img/anidaso-logo.ico') }}" rel="icon">
  <link href="{{ asset('template/assets/img/anidaso-logo.ico') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">
 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:anidaso.farms21@gmail.com">anidaso.farms21@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+233 504489207</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/anidasofarms" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/anidaso_farms/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
       
        <a href="index.php"><img src="{{ asset('template/assets/img/anidaso-logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a @if (Route::currentRouteName() == 'welcome') class="active" @endif href="{{ route('welcome') }}">Home</a></li>
          <li><a @if (Route::currentRouteName() == 'about-us') class="active" @endif href="{{ route('about-us') }}">About</a></li>
          <li><a @if (Route::currentRouteName() == 'products') class="active" @endif href="{{ route('products') }}">Products</a></li>
          <li><a @if (Route::currentRouteName() == 'portfolio') class="active" @endif href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a @if (Route::currentRouteName() == 'our-team') class="active" @endif href="{{ route('our-team') }}">Team</a></li>
          <li><a @if (Route::currentRouteName() == 'our-core-values') class="active" @endif href="{{ route('our-core-values') }}">Core Values</a></li>
          <li><a href="blog.php">Blog</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
        
            </ul>
          </li>-->
          <li><a @if (Route::currentRouteName() == 'contact-us') class="active" @endif href="{{ route('contact-us') }}">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="{{ route('our-shop')}}" class="get-started-btn scrollto">Our Shop</a>
    </div>
  </header><!-- End Header -->