<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Segunda via de Boleto e NF</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  @include('partials._css')
	<link href="{{ asset('template/css/financeiro.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="blog-v2-columns">
	<!-- Images Loader -->

	@include('partials._header')

	<div class="page-content page-via"
	style="
			background-image: url(site/images/about-us-bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;">


		<!-- Blog Section -->

		<section class="blog-v1-section blog-v2-section section-box container align-items-center justify-content-center" style="min-height:600px;">
			<div class="d-flex flex-column">
				<div class="d-flex flex-column w-50">
					<h3 class="my-3">Digite seu CPF ou CNPJ</h3>
					<div>
						<input name="search" id="search" class="inputVia" placeholder="Insira seu cpf ou cnpj">
						<div class="my-2 ml-1 text-danger wrong-message d-none">
							<span>CPF ou CNPJ inserido incorretamente.</span>
						</div>
					</div>
						<button id="MyButton" class=" btn btn-primary my-2" style="background-color:#14186c">Consultar</button>
				</div>
			</div>

			<div id="accordion" class="table-segundavia tableVias" >


			</div>
		</section>


		@include('partials._footer')

		@include('partials._scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" type="text/javascript"></script>

		<script>




$(document).ready(function(){

	const wrongMessage = document.querySelector('.wrong-message');
	const tableVias = document.querySelector('.tableVias')
  var cpfMascara = function (val) {
   return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009';
 },
 cpfOptions = {
   onKeyPress: function(val, e, field, options) {
      field.mask(cpfMascara.apply({}, arguments), options);
   }
 };

 $('#search').mask(cpfMascara, cpfOptions);
	if ($('#search').val() != ""){

		fetch_customer_data();
	}

 function fetch_customer_data(query = '')
 {
  $.ajax({
    url:"{{ route('buscar') }}",
    method:'GET',
    data:{query:query},
    dataType:'json',
    success:function(data)
    {

				wrongMessage.classList.add("d-none")
			$('div.tableVias').html(data.table_data);
				tableVias.classList.add('d-block');

				tableVias.classList.remove('d-none');
			// console.log("data");
    },
		error:function (xhr, status) {
			wrongMessage.classList.remove("d-none");
			tableVias.classList.add('d-none');

			tableVias.classList.remove('d-block');
		}
  })
}
   $('#MyButton').click(function() {

     var query = $("#search").val();

     fetch_customer_data(query);

   });


});
// const inputVia = document.querySelector('.inputVia')
// const segundaVia = document.querySelector('#segunda-via')
//
// segundaVia.addEventListener('click',()=>{
//
// 	if(!validaCpfCnpj(inputVia.value)){
//
// 		return
// 	}
//
//
// 	console.log("CLICADO")

// })
</script>
	</div>

	<!-- Back To Top Button -->
	<a href="#" id="back-to-top">
		<i class="la la-arrow-up"></i>
	</a>
	<!-- End Back To Top Button -->

</body>
</html>
