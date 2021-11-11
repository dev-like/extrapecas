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
	
	@include('partials._css')  
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
	
	@include('partials._header')

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
	<!-- Back To Top Button -->
		<a href="#" id="back-to-top">	
			<i class="la la-arrow-up"></i>
		</a>
	<!-- End Back To Top Button -->
	@include('partials._footer')

	@include('partials._scripts')
</body>
</html>
