<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Serenity Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{  asset('assetss/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{  asset('assetss/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{  asset('assetss/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{  asset('assetss/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{  asset('assetss/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{  asset('assetss/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{  asset('assetss/css/style.css')}}" rel="stylesheet">

        <style>
            .comment {
                border: 1px solid #ccc;
                padding: 3px;
            }
            .link {
                padding-left: 10px;
                font-size: 14px;
                text-decoration:none;
                color: gray;

            }
            .link:hover {
                color: cadetblue;
            }
            .link1 {
                font-size: 15px;
                text-decoration:none;
                color: rgb(54, 52, 52);
            }
            .link1:hover {
                color: cadetblue;
            }
            .link2 {
                text-decoration:none;
                color: rgb(49, 47, 47);
            }
            .link2:hover {
                color: cadetblue;
            }
            a.navbar-brand{
                font-size: 30px;
                font-family:'Times New Roman', Times, serif;
            }
            h1.fw-bolder {
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            p.lead {
                font-size: 35px;
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div  class="container d-flex align-items-center justify-content-between">
        
              <div class="logo">
                <h1 class="text-light"><a href="index.html">E M A</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{  asset('assetss/img/logo.png')}}" alt="" class="img-fluid"></a>-->
              </div>
        
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="" href="{{asset('home')}}">Home</a></li>
                  <li><a href="{{asset('contact')}}"">Contact</a></li>
                  <li><a href="{{asset('posts')}}"">Blog</a></li>
                  @if(Auth::check() )
                    <li style="padding-left: 30px" class="nav-item dropdown open">
                    <a class="nav-link">User : {{ Auth::user()->name }}</a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/logout')}}">Logout</a>
                    </li>
        
                    @else
        
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/login')}}">Login</a>
                    </li>
        
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
            </div>
          </header><!-- End Header -->
        <br><br><br>
        
        @yield('content')


       <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>E M A</h3>
            <p>The search for the largest companies in the world has become popular among researchers, so we offer these huge data on the most successful companies around the world.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{asset('home')}}">Home</a></li>
              <li><a href="{{asset('contact')}}">Contact Us</a></li>
              <li><a href="{{asset('posts')}}">Our Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                El Meror Street <br>
                Egypt <br>
              <strong>Phone:</strong> 01099167408<br>
              <strong>Email:</strong> coder.eslam0@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{  asset('assetss/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{  asset('assetss/vendor/aos/aos.js')}}"></script>
  <script src="{{  asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{  asset('assetss/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{  asset('assetss/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{  asset('assetss/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{  asset('assetss/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{  asset('assetss/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{  asset('assetss/js/main.js')}}"></script>

</body>

</html>