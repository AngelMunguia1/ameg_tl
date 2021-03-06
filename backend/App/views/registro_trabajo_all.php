<?php echo $header; ?>

<body>
	<div class="body">

		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 70}">
			<div class="header-body">
				<div class="header-container">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-logo px-3">
								<a href="/Home/">
									<img src="/img/logo_ameg.png" width="210" height="100" alt="" />
								</a>
							</div>
						</div>
						<div class="header-column justify-content-center">
							<div class="header-nav justify-content-lg-center">
								<div class="header-nav-main header-nav-main-dark header-nav-main-effect-1 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav flex-column flex-lg-row" id="mainNav">
											<li class="dropdown dropdown-mega">
												<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Home/">
													INICIO
												</a>
											</li>
											<li class="dropdown dropdown-mega">
												<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Convocatoria/">
													CONVOCATORIA
												</a>
											</li>
											<li class="dropdown dropdown-mega">
												<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Instrucciones/">
													INSTRUCCIONES PARA AUTORES
												</a>
											</li>
											<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/RegistroTrabajo/">
														REGISTRO DE TRABAJOS
													</a>
											</li>
											<!-- <li class="dropdown dropdown-mega dropdown-mega-style-2">
												<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Login/">
													<i class="fa fa-user"></i>
													&nbsp;
													INICIA SESIÓN
													&nbsp;
													<i class="fa-solid fa-angle-down"></i>
												</a>
											</li> -->
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Contacto/">
													CONTACTO
												</a>
											</li>
											<li class="dropdown">
												<a href="/Login/cerrarSession" class="dropdown-item dropdown-toggle" style="color:#70C7D2;">
													<i class="fa fa-power-off"></i>
													&nbsp;
													LOGOUT
												</a>
                                        	</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<!-- <div class="header-button d-none d-sm-flex mx-3">
									<a href="https://themeforest.net/item/ezy-responsive-multipurpose-html5-template/21814871" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1" target="_blank">
										<span class="wrap">
											<span>BUY EZY</span>
											<i class="fas fa-shopping-cart"></i>
										</span>
									</a>
								</div> -->
							<button class="header-btn-collapse-nav mx-3" data-toggle="collapse" data-target=".header-nav-main nav">
								<span class="hamburguer">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="close">
									<span></span>
									<span></span>
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section id="" class=" text-center bg-purple-fecha">
			<div class="text-center">
				<div class="px-lg-3 pb-3 text-center">
					&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="font-weight-bold  text-center text-white">SOLICITUD DE INGRESO</h1>
				</div>
		</section>

		<div role="main" class="main">

			<!-- <section class="section bg-light-5">
					<div class="container-fluid">
						<div class="responsive-images responsive-images-left">
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter">
								<img src="img/landing/desktop-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
							</div>
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="300">
								<img src="img/landing/keyboard-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
							</div>
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="600">
								<img src="img/landing/mouse-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
							</div>
						</div>
						<div class="responsive-images responsive-images-right">
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="">
								<img src="img/landing/elements-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
							</div>
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="200">
								<img src="img/landing/elements-2.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" />
							</div>
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="400">
								<img src="img/landing/mobile-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
							</div>
							<div class="position-absolute z-index-1 d-none d-xl-block appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="600">
								<img src="img/landing/headphone-1.png" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
							</div>
						</div>
						<div class="row justify-content-center text-center text-lg-right py-3 my-3 py-sm-4 my-sm-5">
							<div class="col col-lg-auto px-md-5 px-lg-3">
								<div class="overflow-hidden mb-2 mb-lg-0">
									<span class="d-block text-color-primary font-primary font-weight-semibold text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1100">A NEW WEBSITE MADE</span>
								</div>
								<h1 class="text-color-dark font-weight-bold text-15 resp-text-15 line-height-2 skew-text-bar-1 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500">EASIER THAN YOU THINK</h1>
								<div class="overflow-hidden opacity-8 mb-4 mt-2 mt-lg-0">
									<span class="d-block font-primary font-weight-light line-height-2 text-5 resp-text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1400">Enjoy the flexibility for any design style</span>
								</div>
								<div class="d-flex flex-column align-items-center float-lg-right">
									<a href="#demos" data-hash class="btn btn-dark btn-rounded font-weight-bold btn-v-3 btn-h-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">VIEW DEMOS</a>
									<span class="d-flex align-items-center font-primary font-weight-bold text-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">PURCHASE FOR ONLY <strong class="text-color-dark text-4 ml-2 position-relative">$16</strong></span>
								</div>
							</div>
						</div>
					</div>
				</section> -->
			<section class="section bg-white text-center section-text-overlay" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;">
				<!-- <span class="text-background font-primary font-weight-bold text-color-light appear-animation" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="500" data-plugin-options="{'accY': 100}">EASY AS 123</span> -->
				<!-- <h3 class="text-center">Los trabajos que se presentarán durante el congreso se dividen en 3 categorías principales</h3> -->
				<div class="container container-lg-custom align-content-center text-center">
					<div class="row align-items-center text-center">

						<div class="container text-center">
							<!-- <div class="icon-box icon-box-style-1 flex-column flex-lg-row appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300"> -->
							<!-- <div class="icon-box-icon pr-3">
										<img width="42" src="vendor/linear-icons/screen.svg" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
									</div> -->
							<div class="container text-center">
								<div class="row">
									<div class="col-md-9 text-center ameg-shadow-box-tre bg-white">
										<div class="col-md-12 text-center">
											<div class="row text-center">
												<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3" style="color: #42787e !important;">DOMICILIO PARTICULAR</h2>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">


												<div class="col-md-12">
													<form class="form-horizontal" id="add" action="/Registro/registroAdd" method="POST">

														<fieldset>
															<legend class="text-center header"></legend>

															<div class="form-group">
																<div class="col-md-12 row">
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="calle_numero" name="calle_numero" type="text" placeholder="CALLE Y NÚMERO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="colonia" name="colonia" type="text" placeholder="COLONIA" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>


															<div class="form-group">
																<div class="col-md-12 row">
																	<div class="col-md-4">

																		<input onChange="es_vacio()" id="cp" name="cp" type="text" placeholder="C.P." class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-8">

																		<input onChange="es_vacio()" id="delegacion" name="delegacion" type="text" placeholder="DELEGACIÓN O MUNICIPIO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>


															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-8 ">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="CIUDAD O ESTADO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-4">

																		<input onChange="es_vacio()" id="telefono" name="telefono" maxlength="12" type="text" placeholder="TELÉFONO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-12 ">
																		<p>SI SU DOMICILIO PARTICULAR ES TAMBIÉN FISCAL MARQUE</p>
																		<input type="radio" name="color" value="azul"> SI
																		<input type="radio" name="color" value="azul"> NO
																	</div>

																</div>
															</div>




															<div class="col-md-12 text-center">
																<div class="row text-center">
																	<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3" style="color: #42787e !important;">DOMICILIO DEL CONSULTORIO</h2>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 row">
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="calle_numero" name="calle_numero" type="text" placeholder="CALLE Y NÚMERO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="colonia" name="colonia" type="text" placeholder="COLONIA" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>


															<div class="form-group">
																<div class="col-md-12 row">
																	<div class="col-md-4">

																		<input onChange="es_vacio()" id="cp" name="cp" type="text" placeholder="C.P." class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-8">

																		<input onChange="es_vacio()" id="delegacion" name="delegacion" type="text" placeholder="DELEGACIÓN O MUNICIPIO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>


															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-8 ">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="CIUDAD O ESTADO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-4">

																		<input onChange="es_vacio()" id="telefono" name="telefono" maxlength="12" type="text" placeholder="TELÉFONO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-12 ">
																		<p>SI SU DOMICILIO DE CONSULTORIO ES TAMBIÉN FISCAL MARQUE (EN CASO DE SER OTRO. FAVOR DE PONERLO)</p>
																		<input type="radio" name="color" value="azul"> SI
																		<input type="radio" name="color" value="azul"> NO
																	</div>

																</div>
															</div>




															<div class="col-md-12 text-center">
																<div class="row text-center">
																	<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3" style="color: #42787e !important;">LUGAR DE TRABAJO</h2>
																</div>
															</div>



															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-6 ">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="INSTITUCIÓN O DIVISIÓN" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-3">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="UNIDAD U HOSPITAL" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-3">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="DEPATAMENTO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>


															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-6 ">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="CALLE Y NÚMERO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-3">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="COLONIA" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-3">

																		<input onChange="es_vacio()" id="telefono" name="telefono" type="text" placeholder="C.P." class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>

															
															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-6 ">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="ALCALDÍA O MUNICIPIO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="CIUDAD O ESTADO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
				
																</div>
															</div>




															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-3">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="TELÉFONO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-3">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="CELULAR" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="telefono" name="telefono" type="text" placeholder="EMAIL" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="ESPECIALIDAD" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="HOSPITAL" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
							
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-12 ">
																		<p>¿ES USTED PROFESOR(A) DE ALGUNA INSTITUCIÓN?</p>
																		<input type="radio" name="color" value="azul"> SI
																		<input type="radio" name="color" value="azul"> NO
																	</div>

																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 row ">
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="ciudad_estado" name="ciudad_estado" type="text" placeholder="NOMBRE DE LA INSTITUCIÓN" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
																	<div class="col-md-6">

																		<input onChange="es_vacio()" id="telefono" name="telefono"  type="text" placeholder="NOMBRE DEL CURSO" class="form-control ameg-shadow-box-two" require="required">

																		<p class="hiden" style="color: red ;" id="texto_obligatorio"></p>

																	</div>
							
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12 text-center">
																	<button disabled="disabled" type="submit" class="btn btn-primary btn-lg" id="btn_upload" name="btn_upload">REGISTRAME</button>
																</div>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>

								</div>
								<!-- <span class="top-sub-title text-color-light opacity-6">MULTI PURPOSE CONCEPTS</span> -->
								<!-- <p class="text-color-light opacity-6">EZY comes with tons of design options. Check out all the demos included in the package.</p> -->
							</div>
							<!-- </div> -->
						</div>

					</div>
				</div>
			</section>

		</div>

	</div>
	</section> -->

	<hr class="my-0">

	</div>
	</div>

</body>

</html>
<script>
	function es_vacio() {
		var campo1 = document.getElementById("usuario").value;
		var campo2 = document.getElementById("contrasena").value;
		var campo3 = document.getElementById("nombre").value;
		var campo4 = document.getElementById("apellidop").value;
		var campo5 = document.getElementById("apellidom").value;
		var campo6 = document.getElementById("cedula_profesional").value;
		var campo7 = document.getElementById("cedula_especialista").value;
		if (campo1 != "" && campo2 != "" && campo3 != "" && campo4 != "" && campo5 != "" && campo6 != "" && campo7 != "") {
			document.getElementById("btn_upload").removeAttribute('disabled');

		} else {
			document.getElementById("btn_upload").setAttribute('disabled', 'disabled');


		}
	}
</script>

<!-- <script>
            $(document).ready(function(){
              $('#confirm_usuario').attr("disabled", true);
              $.validator.addMethod("checkUserCorreo",function(value, element) {
                var response = false;
                  $.ajax({
                      type:"POST",
                      async: false,
                      url: "/Register/isUserValidateUser",
                      data: {email: $("#email").val()},
                      success: function(data) {
                          if(data=="true"){
                              $('#btn_registro_email').attr("disabled", false);
                              $('#confirm_email').attr("disabled", false);
                              $('#email').attr("disabled", true);

                              response = true;
                          }else{
                              $('#btn_registro_email').attr("disabled", true);
                              $('#confirm_email').attr("disabled", true);
                              document.getElementById("confirm_email").value = "";
                          }
                      }
                  });

                  return response;
              },"<b>Usted ya se encuentra registrado en la plataforma verifique su información.<b>");


              $("#email_form").validate({
                 rules:{
                      email:{
                          required: true,
                          checkUserCorreo: true
                      },
                      confirm_email:{
                          required: true,
                          equalTo:"#email"
                      }
                  },
                  messages:{
                      email:{
                          required: "Este campo es requerido",
                      },
                      confirm_email:{
                          required: "Este campo es requerido",
                          equalTo: "El Correo Eléctronico no coincide",
                      }
                  }
              });
              

          });
          
        </script> -->

<?php echo $footer; ?>