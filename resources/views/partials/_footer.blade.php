<!-- Rodapé -->
<footer class="footer">
		<div class="footer-section section-box" style="background-color:#14186c">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
						<div class="footer-item">
							<a href="index.html"><img src="{{url('/')}}/site/images/icons/logo-white.png" alt="logo"></a>
							<p class="font-type-1 mt-4">{{$description}}</p>
							<div class="footer-socials">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12">
						<div class="footer-item ">
							<h4><a href="clean-service.html" id="contato">CONTATO</a></h4>
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