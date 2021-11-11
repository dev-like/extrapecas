<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Blog V2 8</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicon
  ================================================== -->
  	<link rel="shortcut icon" href="favicon.png" />
	<!-- Font
  ================================================== -->
  	<link rel="stylesheet" type="text/css" href="site/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="site/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="site/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="site/css/lato-font.css">
	<link rel="stylesheet" type="text/css" href="site/css/source-sans-pro-font.css">
	<!-- CSS
  ================================================== -->
	<!-- Bootrap -->
	<link rel="stylesheet" href="site/vendor/bootrap/css/bootstrap.min.css"/>
	<!-- Owl Carousel 2 -->
	<link rel="stylesheet" href="site/vendor/owl/css/owl.carousel.min.css">
	<link rel="stylesheet" href="site/vendor/owl/css/owl.theme.default.min.css">
	<!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="site/vendor/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="site/vendor/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="site/vendor/revolution/css/navigation.css">
    <!-- noUiSlider Library -->
    <link rel="stylesheet" type="text/css" href="site/vendor/nouislider/css/nouislider.css">
    <!-- fancybox-master Library -->
    <link rel="stylesheet" type="text/css" href="site/vendor/fancybox-master/css/jquery.fancybox.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="site/css/style.css"/>
	<!-- Miriad Pro Font -->
	<link rel="stylesheet" type="text/css" href="site/fonts/myriad-pro/style.css">
	<!-- Heavitas Font -->
	<link rel="stylesheet" type="text/css" href="site/fonts/heavitas/style.css">
	<!-- Inter Font -->
	<link rel="stylesheet" type="text/css" href="site/fonts/inter/style.css">
</head>

<body class="blog-v2-columns">
	<!-- Images Loader -->
	
	<header class="header">
		<!-- Show Desktop Header -->
		<div class="show-desktop-header header-hp-1">

			<div id="js-navbar-fixed" class="menu-desktop">
				<div class="container menu-desktop-inner">
					<!-- Logo -->
					<div class="logo d-flex align-items-center ">
						<img class="logoimgheader" src="site/images/icons/logo-black.png">
					</div>
					<!-- Main Menu -->
					<nav class="main-menu">
						<ul>
							<li class="menu-item">
								<a href="index.html" class="font-weight-bold">
								QUEM SOMOS
								<!-- <span class="icon-down"><i class="la la-angle-down"></i></span> -->
								</a>
								<!-- <ul class="menu-dropdown">
									<li><a href="index.html">Homepages 1</a></li>
									<li><a href="index2.html">Homepages 2</a></li>
									<li><a href="index3.html">Homepages 3</a></li>
									<li><a href="index4.html">Homepages 4</a></li>
									<li><a href="index5.html">Homepages 5</a></li>
									<li><a href="index6.html">Homepages 6</a></li>
								</ul> -->
							</li>
							<li class="menu-item">
								<a href="clean-service.html" class="font-weight-bold">
									PARCEIROS
								</a>
							</li>
							<li class="menu-item">
								<a href="{{url('/')}}/noticias" class="font-weight-bold">
									NOTICIAS
								</a>
							</li>
							<li class="menu-item">
								<a href="contact-v1.html" class="font-weight-bold">
									CONTATO
								</a>
							</li>
						</ul>
					</nav>
					<div class="search-button">
						<form class="search-form" method="get" role="search">
							<input type="search" name="search" class="search-field" placeholder="Search">
							
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Show Mobile Header -->
		<div class="show-mobile-header">
			<!-- Logo And Hamburger Button -->
			<div class="mobile-top-header d-flex align-items-center justify-content-between">
				<div class="logo-mobile">
					<a href="index.html"><img src="site/images/icons/logo.png" class="img-logo" alt="logo"></a>
				</div>
				<button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<!-- Au Navbar Menu -->
			<div class="au-navbar-mobile navbar-mobile-1">
				<div class="au-navbar-menu">
				<ul >
							<li class="menu-item">
								<a href="index.html" class="font-weight-bold">
								QUEM SOMOS
								<!-- <span class="icon-down"><i class="la la-angle-down"></i></span> -->
								</a>
								<!-- <ul class="menu-dropdown">
									<li><a href="index.html">Homepages 1</a></li>
									<li><a href="index2.html">Homepages 2</a></li>
									<li><a href="index3.html">Homepages 3</a></li>
									<li><a href="index4.html">Homepages 4</a></li>
									<li><a href="index5.html">Homepages 5</a></li>
									<li><a href="index6.html">Homepages 6</a></li>
								</ul> -->
							</li>
							<li class="menu-item">
								<a href="clean-service.html" class="font-weight-bold">
									PARCEIROS
								</a>
							</li>
							<li class="menu-item">
								<a href="gallery-v1.html" class="font-weight-bold">
									PRODUTOS
								</a>
							</li>
							<li class="menu-item">
								<a href="shop-products.html" class="font-weight-bold">
									NOTICIAS
								</a>
							</li>
							<li class="menu-item">
								<a href="contact-v1.html" class="font-weight-bold">
									CONTATO
								</a>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">

		<!-- Breadcrumb Section -->
		<section class="breadcrumb-blog-v2-columns breadcrumb-section section-box"
		 style="
			background-image: url(site/images/banner-news.png);
			background-repeat: no-repeat;
			background-size: cover;"
		>
		 >
			<div class="container">
				<div class="breadcrumb-inner">
					<h1>VAMOS RODAR</h1>
					<ul class="breadcrumbs">
						<li><p class="breadcrumbs-2">Saiba tudo sobre o mundo da boleia.</p></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb Section -->

		<!-- Blog Section -->
		<section class="blog-v1-section blog-v2-section section-box">
			<div class="container">
				<div class="woocommerce">
					<div class="row">
					@foreach(\App\Models\Eventos::all() as $evento)
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<a href="{{ route('evento.list', ['slug' => $evento->slug]) }}">
							<div class="news-image-content"
								style="background-image:url('{{ asset('uploads/eventos/'.$evento->foto) }}');

								background-repeat: no-repeat;
								background-size: cover;">
								<div class="date-card">
								<span class="news-month-date d-block font-weight-bold">{{date_format($evento->data_evento,'d')}}</span>
								<span class="news-month font-type-3">{{$evento->data_evento->formatLocalized('%B')}}</span>
								</div>
							</div>
							<div class="news-content-text mt-4">
								<span class="news-content-title font-type-1">{!!$evento->titulo!!}</span>
								<p>
								{!!$evento->sub_titulo!!}
								</p>
							</div>
							<span class="font-weight-bold" style="font-size:16px; background-color:#12186a; padding:10px 20px; color:white;">Saiba mais</span>
							</div>
							</a>

							@endforeach

						
						</div>
					</div>
					<div class="blog-pagination woocommerce-pagination">
						<div class="page-numbers">
							<a href="#" class="blog-tabs-inner active page-numbers current">
								<span>01</span>
							</a>
							<a href="#" class="blog-tabs-inner page-numbers">
								<span>02</span>
							</a>
							<a href="#" class="blog-tabs-inner page-numbers">
								<span>03</span>
							</a>
							<a href="#" class="blog-tabs-inner page-numbers next">
								<span><i class="fas fa-chevron-right"></i></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Section -->
	</div>
	<footer class="footer">
		<div class="footer-section section-box" style="background-color:#14186c">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
						<div class="footer-item">
							<a href="index.html"><img src="site/images/icons/logo-white.png" alt="logo"></a>
							<p class="font-type-1">{{$description}}</p>
							<div class="footer-socials">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12">
						<div class="footer-item ">
							<h4><a href="clean-service.html">CONTATO</a></h4>
							<ul class="font-type-4">
								<li>
									<p>
										{!!$quemSomos->endereco_matriz!!}
									</p>
								</li>

								<li>
									<p>
										{!!$quemSomos->telefone!!}<br>
										{!!$quemSomos->telefone2!!}
									</p>
								</li>

								<li>
									<p>
										Email: {!!$quemSomos->email!!}
									</p>
								</li>


							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 " >
						<div class="footer-item">
							<h4><a href="contact-v1.html">SIGA NOS</a></h4>
							<div>
							<div class="footer-socials">
								<a href="{!!$quemSomos->facebook!!}"><i class="fab fa-facebook-f"></i></a>
								<a href="{!!$quemSomos->instagram!!}"><i class="fab fa-whatsapp"></i></a>

							</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<p>Copyright © 2021 Extra Peças. Todos os direitos reservados</p>
		</div>
	</footer>

	<!-- Back To Top Button -->
	<a href="#" id="back-to-top">
		<i class="la la-arrow-up"></i>
	</a>
	<!-- End Back To Top Button -->

	<!--  JS  -->
	<!-- Jquery -->
    <script src="site/vendor/jquery/dist/jquery.min.js"></script>
	<!-- Bootrap -->
	<script src="site/vendor/bootrap/js/bootstrap.min.js"></script>
	<script src="site/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- Owl Carousel 2 -->
  	<script src="site/vendor/owl/js/owl.carousel.min.js"></script>
  	<script src="site/vendor/owl/js/OwlCarousel2Thumbs.min.js"></script>
  	<!-- Slider Revolution core JavaScript files -->
    <script src="site/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="site/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="site/vendor/matchHeight/dist/jquery.matchHeight-min.js"></script>
    <!-- Isotope Library-->
	<script type="text/javascript" src="site/js/isotope.pkgd.min.js"></script>
	<script src="site/js/imagesloaded.pkgd.min.js"></script>
	<!-- Masonry Library -->
	<script type="text/javascript" src="site/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="site/js/masonry.pkgd.min.js"></script>
	<!-- noUiSlider Library -->
	<script type="text/javascript" src="site/vendor/nouislider/js/nouislider.js"></script>
	<!-- fancybox-master Library -->
	<script type="text/javascript" src="site/vendor/fancybox-master/js/jquery.fancybox.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
	<script src="site/js/theme-map.js"></script>
	<script  type="text/javascript" src="site/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script  type="text/javascript" src="site/vendor/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- Form -->
    <script src="site/vendor/sweetalert/sweetalert.min.js"></script>
	<script src="site/js/config-contact.js"></script>
	<!-- Main Js -->
	<script src="site/js/custom.js"></script>
</body>
</html>
