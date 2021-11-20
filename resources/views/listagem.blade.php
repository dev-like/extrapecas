<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Blog Extra Peças</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  @include('partials._css')
</head>

<body class="blog-v2-columns">
	<!-- Images Loader -->

	@include('partials._header')


	<div class="page-content">

		<!-- Breadcrumb Section -->
		<section class="breadcrumb-blog-v2-columns breadcrumb-section section-box"
		 style="
			background-image: url(site/images/banner-news.png);
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
					<!-- <div class="blog-pagination woocommerce-pagination">
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
					</div> -->
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
