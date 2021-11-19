
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Extra Peças - na estrada com você!</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicon
  ================================================== -->
  	@include('partials._css')
</head>
<body class="homepages-1">
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

		<!-- Slider Revolution Section -->
		<section class="home-slider style-home-slider-hp-1">
			<div class="rev_slider_wrapper fullscreen-container" >
	        	<!-- the ID here will be used in the inline JavaScript below to initialize the slider -->
	       		<div id="rev_slider_1" class="rev_slider fullscreenbanner" data-version="5.4.5">
		            <ul>


						<!-- BEGIN SLIDE 2 -->
						@foreach($banner as $banners)
		                <li data-transition="boxslide">
		                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
		                    <img src="uploads/banners/{!!$banners->image!!}" alt="slide-1" class="rev-slidebg">

		                    <!-- BEGIN LAYER -->
		                    <div class="tp-caption tp-resizeme title-container slide-caption-title-1 font-type-1 font-weight-bold"
		                        data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
                        		data-fontsize="['50', '50', '40', '40']"
                        		data-lineheight="['50', '50', '50', '50']"
                        		data-color="#fff"
                        		data-textAlign="['center', 'center', 'center', 'center']"
		                        data-x="['center','center','center','center']"
		                        data-y="['middle','middle','middle','middle']"
		                        data-hoffset="['0', '0', '0', '0']"
								data-voffset="['-87', '-75', '-85', '-80']"
								data-width="['1200', '770', '800', '800']"
								data-whitespace="normal"
								data-basealign="slide"
								data-responsive_offset="off" >
								{{$banners->title}}

		                	</div>
		                    <div class="tp-caption tp-resizeme slide-caption-title-2 font-type-1 font-weight-normal"
		                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
		                        data-fontsize="['15', '17', '22', '25']"
		                        data-lineheight="['27', '30', '40', '50']"
								data-color="#f2f2f2"
                        		data-textAlign="['center', 'center', 'center', 'center']"
		                        data-x="['center','center','center','center']"
		                        data-y="['middle','middle','middle','middle']"
		                        data-hoffset="['0', '0', '0', '0']"
								data-voffset="['-16', '-2', '0', '-10']"
								data-width="['700', '700', '650', '550']"
								data-whitespace="normal"
								data-basealign="slide"
								data-responsive_offset="off" >
								{{$banners->sub_title}}
		                	</div>
		                	<a href="#" target="_self" class="tp-caption tp-resizeme au-btn btn-small-1 btn-resize-slider-1"
		                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:20px;opacity:0;","ease":"Power3.easeInOut"}]'
		                        data-x="['center','center','center','center']"
		                        data-y="['middle','middle','middle','middle']"
		                        data-hoffset="['0', '0', '0', '0']"
								data-voffset="['73', '100', '108', '90']"
								data-basealign="slide"
								data-responsive_offset="off" >
								Saiba Mais
			          		</a>
			          		<!-- END LAYER -->
		                </li>
						@endforeach
		                <!-- END SLIDE 2 -->

		            </ul>
    			</div>
			</div>
		</section>

		<section class="welcome-section section-box js-waypoint" id="quemsomos" style="
			background-image: url(site/images/about-us-bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;"
		>
			<div class="container"  >
				<div class="column">

					<div class="welcome-content">
						<h2 class="special-heading" style="color:#121968;">QUEM SOMOS</h2>
					</div>
					<div class="row container-description ">
						<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 row">
							<div class="welcome-content-description ">
									{!!$quemSomos->quemsomos!!}
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 row ">

							<div class="welcome-image">
								<img class="bg-danger" src="site/images/hp-1-welcome.jpg" alt="welcome" style="border-radius: 10px;">
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Welcome Section -->

		<!-- Our Services Section -->
		<section class="services-section section-box" style="background-image: url(site/images/values-section-bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;">
			<div
			class="container">
				<div id="services-hp-1" class="owl-carousel owl-theme">
					<!-- Services-1 -->
					<div class="services-content" >
						<div class="services-bg">
							<a href="#"><img src="site/images/icons/hp-1-services-1.png" alt="services-1"  class="services-image" ></a>
						</div>
						<div class="services-text">
							<span class="objectives-title">Missão</span>
							<p class="font-type-1">{{$quemSomos->missao}}</p>
						</div>
					</div>

					<!-- Services-2 -->
					<div class="services-content">
						<div class="services-bg">
							<a href="#"><img src="site/images/icons/hp-1-services-2.png" alt="services-1"  class="services-image" ></a>
						</div>
						<div class="services-text">
							<span class="objectives-title">Visão</span>
							<p class="font-type-1">{{$quemSomos->visao}}</p>
						</div>
					</div>
					<!-- Services-3 -->
					<div class="services-content">
						<div class="services-bg">
							<a href="#"><img src="site/images/icons/hp-1-services-3.png" alt="services-1"  class="services-image" ></a>
						</div>
						<div class="services-text">
							<span class="objectives-title">Valores</span>
							<p class="font-type-1">{{$quemSomos->valores}}</p>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- End Our Services Section -->



  <!-- Our Services Section -->
	<section class="services-section section-box" id="parceiros" >
		<div
		class="container">
		<h2 class="special-heading" style="color:#1b2076">PARCEIROS</h2>
			<div id="partners" class="owl-carousel owl-theme">
				<!-- Services-1 -->
				@foreach($parceiros as $parceiro)
				<div class="row">

					<div >
						<div class="partner-content">
							<figure>
								<img src="uploads/parceiros/{{$parceiro->logo}}" alt="parner-3">
							</figure>
						</div>
					</div>

				</div>
				@endforeach


			</div>
		</div>
	</section>
	<!-- End Our Services Section -->

		<!-- Statistics Section -->
		<section class="banner-box"
		style="background-image: url(site/images/cta-banner.png);
			background-repeat: no-repeat;
			background-size: cover;"
		>
			<div class="container py-5">
				<div class="banner-content font-type-2" >
					<h2  class="banner-title ">PEDIDOS E ENCOMENDAS</h2>
					<div class="row">
						<h3  class="banner-title mb-1 ml-3 ddd-number font-type-2">(99)</h2>
						<h1  class="banner-title ml-3 phone-number font-type-2 ">98102-5131</h2>
					</div>
					<div class="row  mt-5">
						<button class="our-whatsapp">
							NOSSO ZAP
						</button>
						<button class="our-whatsapp">
							<img src="site/images/whatsapp.png"/>
						</button>
					</div>
				</div>
			</div>
		</section>
		<!-- End Statistics Section -->

	<!-- Our Services Section -->


  <!-- Our Services Section -->
	<section class="services-section section-box" style="background-color:white">
		<div
		class="container">
		<h2 class="special-heading" style="color:#1b2076">NOTÍCIAS</h2>
			<div id="news" class="owl-carousel owl-theme">
				<!-- Services-1 -->
					<div >
					@foreach(\App\Models\Eventos::all() as $evento)
						<div class="card-news">
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
							<span class="font-weight-bold" style="font-size:16px;">Saiba mais</span>
							</div>
							</a>

						@endforeach
				</div>


			</div>
		</div>
	</section>
	<!-- End Our Services Section -->

  <!-- End Our Services Section -->


	<!-- News Section -->
	<section class="services-section section-box">
		<div
		class="container">
		<h2 class="special-heading" style="color:#1b2076">SIGA-NOS</h2>
			<div id="follow-us" class="owl-carousel owl-theme">
				<!-- Services-1 -->
				@foreach($instagram as $post)
					<div >
						<a href="{{post->url}}">
							<img src="{{post->image}}"/>
						</a>
					</div>
				@endforeach




			</div>
		</div>
	</section>
	<!-- News Section -->

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
