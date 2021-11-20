<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>{{$evento->titulo}}</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicon
  ================================================== -->

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
			background-size: cover;">

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

										<span class="blog-socials-inner">
											<a href="#">
												<i class="la la-clock-o"></i>
												{{date_format($evento->data_evento,'d-m-Y')}}
											</a>
										</span>

									</div>
									{!!$evento->descricao!!}


								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
							<div class="blog-left-sidebar widget-area">
								<!-- Search  -->

								<!-- Blog Categories -->

								<!-- Latest News -->
								<div class="latest-news">
									<h3>ÚLTIMAS NOTÍCIAS</h3>

									@foreach(\App\Models\Eventos::all() as $evento)

										<div class="latest-news-inner">
											<a href="{{ route('evento.list', ['slug' => $evento->slug]) }}">
												<img src="{{ asset('uploads/eventos/'.$evento->foto) }}" alt="latest-news-1">
											</a>
											<div class="latest-news-text">
												<a href="{{ route('evento.list', ['slug' => $evento->slug]) }}"><span>{!!$evento->titulo!!}</span></a>
												<span class="day">{{date_format($evento->data_evento,'d-m-Y')}}</span>
											</div>
										</div>
									@endforeach


								</div>
								<!-- Most Viewed -->


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
