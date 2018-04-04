<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>

    	<!-- meta charec set -->
        <meta charset="utf-8">

		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- Page Title -->
        <title>Arbolado Urbanos - Honda</title>		
		
		<!-- Meta Description -->
        <meta name="description" content="Sistema Arbolado honda ">
        <meta name="keywords" content="geolocalizacion, ubicacion, arbolado">
        <meta name="author" content="Santiago">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="DashboardX/Images/marker.ico" type="image/png">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href=" {{ asset('css/css/font-awesome.min.css') }} "> 

		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href=" {{ asset('css/css/bootstrap.min.css') }} ">
		
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href=" {{ asset('css/css/jquery.fancybox.css') }} ">
		
		<!-- animate -->
        <link rel="stylesheet" href=" {{ asset('css/css/animate.css') }} ">
		
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href=" {{ asset('css/css/main.css') }} ">
		
		<!-- media-queries -->
        <link rel="stylesheet" href=" {{ asset('css/css/media-queries.css') }} ">

		<!-- Modernizer Script for old Browsers -->
        <script src=" {{ asset('js/js/modernizr-2.6.2.min.js') }}"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="/">
						<h1 id="logo">
							<img src="{{ asset('/DashboardX/Images/logo.png') }}" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="" class="nav navbar-nav">
                        <li class="current">
                        	<a href="/">Home</a>
                        </li>  
                        @if(!Auth::check())                      
                        <li>
                        	<a href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        <li>
                        	<a href="{{ route('register') }}">Registrarse</a>
                        </li>
                        @else
                        <li>
                        	<a href="{{ route('dashboard.index') }}">Dashboard</a>
                        </li>
                        @endif

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
								Encuentra<span> Árboles</span>!
							</h2>

						</div>
					</div>
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Agrega<span> Marcadores en el Mapa</span>!</h2>							
														
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Coreducación</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-users fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Usuarios</h3>
								<p>Puedes registrarte y ayudar con el estudio de los árboles</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-map-marker fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Geolocalizar</h3>
								<p>Posiciona los marcadores correspondientes en Google Maps.</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-fire fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Huella de Carbono</h3>
								<p>También puedes crear tu huella de carbono y medir el impacto ambiental que generas a diario.</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		        		
        <!--
        End Our Works
        ==================================== -->
		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>¿Que se espera con el sistema?</h2>
						<div class="devider"><i class="fa fa-tree fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p>El Sistema de Arbolado, permite ubicar en un posición (Latitud - Longitud) un árbol a la vez en el lienzo de un mapa, con el fin de que un usuario pueda consultarlo e ir a visitarlo .</p>
					</div>					
					
				</div>
			</div>
		</section>
		
		
		
		<!--
        Contact Us
        ==================================== -->		
		
		<section id="contact" class="contact">			

			<!-- Google map -->
			<!-- <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> -->
			<!-- End Google map -->
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.377191384373!2d-74.76039848572267!3d5.203267296224491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e40b8745f8fa815%3A0xba408f43d8742245!2sCoreducacion!5e0!3m2!1ses!2sco!4v1519063739218" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

		</section>
		
        <!--
        End Contact Us
        ==================================== -->
		
		
		<footer id="footer" class="footer">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2017. All rights reserved. Designed & developed by Coreducación</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="{{ asset('js/js/jquery-1.11.1.min.js') }}"></script>
		
		<!-- Single Page Nav -->
        <script src="{{ asset('js/js/jquery.singlePageNav.min.js') }}"></script>
		
		<!-- Twitter Bootstrap -->
        <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
		
		<!-- jquery.fancybox.pack -->
        <script src="{{ asset('js/js/jquery.fancybox.pack.js') }}"></script>
		
		<!-- jquery.mixitup.min -->
        <script src="{{ asset('js/js/jquery.mixitup.min.js') }}"></script>
		
		<!-- jquery.parallax -->
        <script src="{{ asset('js/js/jquery.parallax-1.1.3.js') }}"></script>
		
		<!-- jquery.countTo -->
        <script src="{{ asset('js/js/jquery-countTo.js') }}"></script>
		
		<!-- jquery.appear -->
        <script src="{{ asset('js/js/jquery.appear.js') }}"></script>
		
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		
		<!-- jquery easing -->
        <script src="{{ asset('js/js/jquery.easing.min.js') }}"></script>
		
		<!-- jquery easing -->
        <script src="{{ asset('js/js/wow.min.js') }}"></script>
		
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		
		<!-- Custom Functions -->
        <script src="{{ asset('js/js/custom.js') }}"></script>
		
    </body>
</html>
