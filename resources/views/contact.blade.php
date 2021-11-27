<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>EMA</title>
        <!-- Favicon-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon.png')}}">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{  asset('theme/css/styles.css ') }}" rel="stylesheet" />
        <link href="{{  asset('theme/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
        <link href="{{  asset('theme/fontawesome/css/solid.css')}}" rel="stylesheet">
		<link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('theme/assets/img/apple-icon.png')}}">

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

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{  asset('theme/css/style1.css') }}">
	

	</head>
	<body>
		<header id="header" class="fixed-top d-flex align-items-center">
            <div  class="container d-flex align-items-center justify-content-between">
        
              <div class="logo">
                <h1 class="text-light"><a href="index.html">E M A</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{  asset('assetss/img/logo.png')}}" alt="" class="img-fluid"></a>-->
              </div>
        
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="active" href="{{asset('home')}}">Home</a></li>
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

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact US</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span> El Meror Street Egypt</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel://1234567920">01099167408</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="mailto:coder.eslam0@gmail.com">coder.eslam0@gmail.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="#">IslamMohseen?tab=repositories</a></p>
				          </div>
			          </div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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


