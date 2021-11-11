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
  @include('partials._css')
  
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
	<div class="page-content page-via"
	style="
			background-image: url(site/images/about-us-bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;"
			>

		
		<!-- Blog Section -->
		<section class="blog-v1-section blog-v2-section section-box container align-items-center justify-content-center"
		
		>
			<div class="d-flex flex-column  ">
				<div class="d-flex flex-column w-50">
					<h3 class="my-3">Digite seu CPF ou CNPJ</h3>
					<div>
						
						<input class="inputVia" placeholder="Insira seu cpf ou cnpj">
						<div class="my-2 ml-1 text-danger wrong-message d-none">
							<span>CPF ou CNPJ inserido incorretamente.</span>
						</div>
					</div>
					
						<button id="segunda-via" class=" btn btn-primary my-2" style="background-color:#14186c">Consultar</button>
				</div>
			</div>
			
			<div id="accordion" class="table-segundavia tableVias" >
				<h3 class="my-2 mx-1">Italo Silva</h3>
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							09429492
							</button>
							
						</h5>

						<div>
							<a href="#" class="my-1">
								<i class="fas fa-receipt" style="font-size:20px;"></i>
								<span>Baixar Nota Fiscal</span>
							</a>
						</div>
							

					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<table class="table table-hover">
							<thead>
								<tr>
								  <th  scope="col">Vencimento</th>
								  <th  scope="col" ></th>
								  <th  scope="col" ></th>
								  <th scope="col" >Baixar Boleto</th>
								</tr>
							</thead>
							<tbody>
							  <tr>
								<td >02/03/2020</td>
								<td ></td>
								<td ></td>
								<td ><a href="#"><i class="fas fa-download" style="font-size:20px;"></i></a></td>
							  </tr>
							 
							</tbody>
						</table>
					</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Collapsible Group Item #2
						</button>
					</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						
					</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Collapsible Group Item #3
						</button>
					</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
					</div>
				</div>
			</div>
		</section>

		<script>
			const inputVia = document.querySelector('.inputVia')
			const segundaVia = document.querySelector('#segunda-via')
			const tableVias = document.querySelector('.tableVias')
			const wrongMessage = document.querySelector('.wrong-message')
			
			function validaCpfCnpj(val) {
				val = val.trim();
				val = val.replace(/\./g, '');
				val = val.replace('-', '');
				if (val.length == 11) {
					var cpf = val
					
					var v1 = 0;
					var v2 = 0;
					var aux = false;
					
					for (var i = 1; cpf.length > i; i++) {
						if (cpf[i - 1] != cpf[i]) {
							aux = true;   
						}
					} 
					
					if (aux == false) {
						return false; 
					} 
					
					for (var i = 0, p = 10; (cpf.length - 2) > i; i++, p--) {
						v1 += cpf[i] * p; 
					} 
					
					v1 = ((v1 * 10) % 11);
					
					if (v1 == 10) {
						v1 = 0; 
					}
					
					if (v1 != cpf[9]) {
						return false; 
					} 
					
					for (var i = 0, p = 11; (cpf.length - 1) > i; i++, p--) {
						v2 += cpf[i] * p; 
					} 
					
					v2 = ((v2 * 10) % 11);
					
					if (v2 == 10) {
						v2 = 0; 
					}
					
					if (v2 != cpf[10]) {
						return false; 
					} else {   
						return true; 
					}
				} else if (val.length == 14) {
					var cnpj = val
					
					cnpj = cnpj.replace(/\./g, '');
					cnpj = cnpj.replace('-', '');
					cnpj = cnpj.replace('/', ''); 
					cnpj = cnpj.split(''); 
					
					var v1 = 0;
					var v2 = 0;
					var aux = false;
					
					for (var i = 1; cnpj.length > i; i++) { 
						if (cnpj[i - 1] != cnpj[i]) {  
							aux = true;   
						} 
					} 
					
					if (aux == false) {  
						return false; 
					}
					
					for (var i = 0, p1 = 5, p2 = 13; (cnpj.length - 2) > i; i++, p1--, p2--) {
						if (p1 >= 2) {  
							v1 += cnpj[i] * p1;  
						} else {  
							v1 += cnpj[i] * p2;  
						} 
					} 
					
					v1 = (v1 % 11);
					
					if (v1 < 2) { 
						v1 = 0; 
					} else { 
						v1 = (11 - v1); 
					} 
					
					if (v1 != cnpj[12]) {  
						return false; 
					} 
					
					for (var i = 0, p1 = 6, p2 = 14; (cnpj.length - 1) > i; i++, p1--, p2--) { 
						if (p1 >= 2) {  
							v2 += cnpj[i] * p1;  
						} else {   
							v2 += cnpj[i] * p2; 
						} 
					}
					
					v2 = (v2 % 11); 
					
					if (v2 < 2) {  
						v2 = 0;
					} else { 
						v2 = (11 - v2); 
					} 
					
					if (v2 != cnpj[13]) {   
						return false; 
					} else {  
						return true; 
					}
				} else {
					return false;
				}
			}

			segundaVia.addEventListener('click',()=>{
				console.log(validaCpfCnpj(inputVia.value))
				if(!validaCpfCnpj(inputVia.value)){
					wrongMessage.classList.remove("d-none")
					return
				}

				wrongMessage.classList.add("d-none")
				
				console.log("CLICADO")
				tableVias.classList.add('d-block')
			})


		</script>
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
