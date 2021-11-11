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
  	<link rel="stylesheet" type="text/css" href="../site/fonts/font-awesome-5/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../site/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../site/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../site/css/lato-font.css">
	<link rel="stylesheet" type="text/css" href="../site/css/source-sans-pro-font.css">
	<!-- CSS
  ================================================== -->
	<!-- Bootrap -->
	<link rel="stylesheet" href="../site/vendor/bootrap/css/bootstrap.min.css"/>
	<!-- Owl Carousel 2 -->
	<link rel="stylesheet" href="../site/vendor/owl/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../site/vendor/owl/css/owl.theme.default.min.css">
	<!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="../site/vendor/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="../site/vendor/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="../site/vendor/revolution/css/navigation.css">
    <!-- noUiSlider Library -->
    <link rel="stylesheet" type="text/css" href="../site/vendor/nouislider/css/nouislider.css">
    <!-- fancybox-master Library -->
    <link rel="stylesheet" type="text/css" href="../site/vendor/fancybox-master/css/jquery.fancybox.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../site/css/style.css"/>
	<!-- Miriad Pro Font -->
	<link rel="stylesheet" type="text/css" href="../site/fonts/myriad-pro/style.css">
	<!-- Heavitas Font -->
	<link rel="stylesheet" type="text/css" href="../site/fonts/heavitas/style.css">
	<!-- Inter Font -->
	<link rel="stylesheet" type="text/css" href="../site/fonts/inter/style.css">
</head>
<body class="blog-detail">
	<!-- Images Loader -->
	<div class="images-preloader">
	    <div id="preloader_1" class="rectangle-bounce">
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
	</div>
	<header class="header">
		<!-- Show Desktop Header -->
		<div class="show-desktop-header header-hp-1">

			<div id="js-navbar-fixed" class="menu-desktop">
				<div class="container menu-desktop-inner">
					<!-- Logo -->
					<div class="logo d-flex align-items-center ">
						<img class="logoimgheader" src="../site/images/icons/logo-black.png">
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
		<section class="breadcrumb-blog-v2-columns breadcrumb-section section-box "
		 style="
			background-image: url(../site/images/truck-news-banner.png);
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
		<section class="blog-detail-section blog-left-section blog-right-section blog-v1-section blog-v2-section section-box">
			<div class="container">
				<div class="woocommerce">
					<div class="row">
						<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="blog-left-detail">
								<!-- Blog 1 -->
								<div class="blog-detail">
									<a href="blog-detail.html"><img src="../uploads/eventos/{{$evento->foto}}" alt="blog-1"></a>
									<h3>{{$evento->titulo}}</h3>
									<div class="blog-socials">
										<!-- <span class="blog-socials-inner">
											<a href="#">
												<i class="la la-user"></i>
												by George Vaughn
											</a>
										</span> -->
										<span class="blog-socials-inner">
											<a href="#">
												<i class="la la-clock-o"></i>
												{{date_format($evento->data_evento,'d-m-Y')}}
											</a>
										</span>
										<!-- <span class="blog-socials-inner">
											<a href="#">
												<i class="la la-comments"></i>
												02 Comments
											</a>
										</span> -->
										<!-- <span class="blog-socials-inner">
											<a href="#">
												<i class="la la-tags"></i>
												Repair, Development
											</a>
										</span> -->
									</div>
									{!!$evento->descricao!!}
									<!-- <p>Aliquam quis feugiat nisl, et accumsan mauris. Phasellus feugiat risus a efficitur blandit. Praesent placerat quam vitae le ornare, vulputate semper dui ullamcorper. Aliquam ut auctor elit. Praesent tincidunt, risus et rhoncus luctus, arcu magna comm ipsum, blandit blandit massa sapien quis turpis. Sed dignissim, justo sed ultricies varius, est neque dapibus ante, at lacinia elit leo vel risus. Morbi est eros, hendrerit et varius eu, cursus quis sapien. Maecenas id dui in libero vehicula rutrum.</p>
									<p>Curabitur non placerat nunc. Sed lacinia neque ut metus pretium vehicula. Morbi bibendum iaculis est, non maximus lectus fermentum eget. Aliquam viverra pretium erat quis laoreet.</p>
									<div class="quote">
										<i class="la la-quote-left"></i>
										<p>Vestibulum purus augue, lacinia vel lacus sed, ultrices pulvinar turpis. Sed nunc augue, cursus ege est sed, sollicitudin pulvinar nibh. Donec eleifend feugiat fermentum. Morbi vitae ornare lacus, vitae fermentum ipsum. Ut facilisis dolor euismod elit efficitur venenatis.</p>
									</div>
									<p>Praesent placerat quam vitae leo ornare, vulputate semper dui ullamcorper. Aliquam ut auctor elit. Praesent tincidunt, rhoncus luctus, arcu magna commodo ipsum, blandit blandit massa sapien quis turpis. Sed dignissim, justo sed ultricies varius, neque dapibus ante, at lacinia elit leo vel risus. Morbi est eros, hendrerit et varius eu, cursus quis sapien. Maecenas id dui in libero vehicula rutrum et at neque.</p> -->
									<!-- <div class="author">
										<img src="images/blog-detail-2.jpg" alt="author">
										<div class="author-detail">
											<span><span class="name-author">George Vaughn</span> <span class="line">-</span> (Author)</span>
											<p>Vestibulum purus augue, lacinia vel lacus sed, ultrices pulvinar turpis. Sed nunc augue, cursus eget est sed, sollicitudin pulvinar nibh.</p>
										</div>
									</div> -->
									
									
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
							<div class="blog-left-sidebar widget-area">
								<!-- Search  -->
								<div class="widget_search-1 widget_search">
									<form class="search-form" method="get" role="search">
										<input type="search" name="search" class="search-field" placeholder="Pesquisa">
										<button class="search-submit" type="submit">
											<i class="la la-search"></i>
										</button>
									</form>
								</div>
								<!-- Blog Categories -->
								<div class="categories widget_product_categories">
									<h3>CATEGORIAS</h3>
									<ul class="categories-inner product-categories">
										<li class="cat-item cat-parent">
											<a href="#"><span>Transmisson</span></a>
											<a href="#"><span>(21)</span></a>
										</li>
										<li class="cat-item cat-parent">
											<a href="#"><span>Heating</span></a>
											<a href="#"><span>(02)</span></a>
										</li>
										<li class="cat-item cat-parent">
											<a href="#"><span>Engine Repair</span></a>
											<a href="#"><span>(10)</span></a>
										</li>
										<li class="cat-item cat-parent">
											<a href="#"><span>Belts</span></a>
											<a href="#"><span>(06)</span></a>
										</li>
										<li class="cat-item cat-parent">
											<a href="#"><span>Diagnostics</span></a>
											<a href="#"><span>(08)</span></a>
										</li>
										<li class="cat-item cat-parent">
											<a href="#"><span>Battery Car</span></a>
											<a href="#"><span>(08)</span></a>
										</li>
										<li class="cat-item cat-parent">
											<a href="#"><span>Oils</span></a>
											<a href="#"><span>(03)</span></a>
										</li>
									</ul>
								</div>
								<!-- Latest News -->
								<div class="latest-news">
									<h3>ÚLTIMAS NOTÍCIAS</h3>
									
									@foreach(\App\Models\Eventos::all() as $evento)
										
										<div class="latest-news-inner">
											<a href="{{ route('evento.list', ['slug' => $evento->slug]) }}">
												<img src="{{ asset('uploads/eventos/'.$evento->foto) }}" alt="latest-news-1">
											</a>
											<div class="latest-news-text">
												<a href="blog-detail.html"><span>{!!$evento->titulo!!}</span></a>
												<span class="day">{{date_format($evento->data_evento,'d-m-Y')}}</span>
											</div>
										</div>
									@endforeach

									
								</div>
								<!-- Most Viewed -->
								<div class="most-viewed">
									<h3>NOTÍCIAS RELACIONADAS</h3>
									@foreach($eventosRelacionados as $evento)
										<div class="most-viewed-inner">
											<a href="#">
												<img src="../uploads/eventos/{{$evento->foto}}" alt="most-viewed-1">
											</a>
											<div class="most-viewed-text">
												<a href="#"><span>{{$evento->titulo}}</span></a>
												<span class="viewer">250 Viewer</span>
											</div>
										</div>
									@endforeach

								</div>
								
							</div>
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

	<!-- Jquery -->
    <script src="../site/vendor/jquery/dist/jquery.min.js"></script>
	<!-- Bootrap -->
	<script src="../site/vendor/bootrap/js/bootstrap.min.js"></script>
	<script src="../site/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- Owl Carousel 2 -->
  	<script src="../site/vendor/owl/js/owl.carousel.min.js"></script>
  	<script src="../site/vendor/owl/js/OwlCarousel2Thumbs.min.js"></script>
  	<!-- Slider Revolution core JavaScript files -->
    <script src="../site/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../site/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../site/vendor/matchHeight/dist/jquery.matchHeight-min.js"></script>
    <!-- Isotope Library-->
	<script type="text/javascript" src="../site/js/isotope.pkgd.min.js"></script>
	<script src="../site/js/imagesloaded.pkgd.min.js"></script>
	<!-- Masonry Library -->
	<script type="text/javascript" src="../site/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="../site/js/masonry.pkgd.min.js"></script>
	<!-- noUiSlider Library -->
	<script type="text/javascript" src="../site/vendor/nouislider/js/nouislider.js"></script>
	<!-- fancybox-master Library -->
	<script type="text/javascript" src="../site/vendor/fancybox-master/js/jquery.fancybox.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
	<script src="../site/js/theme-map.js"></script>
	<script  type="text/javascript" src="../site/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script  type="text/javascript" src="../site/vendor/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- Form -->
    <script src="../site/vendor/sweetalert/sweetalert.min.js"></script>
	<script src="../site/js/config-contact.js"></script>
	<!-- Main Js -->
	<script src="../site/js/custom.js"></script>
</body>
</html>
