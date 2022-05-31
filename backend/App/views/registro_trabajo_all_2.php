<?php echo $header; ?>

<body>
	<div class="body">

		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 70}">
			<div class="header-body">
				<div class="header-container">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-logo px-3">
								<a href="/Inicio/">
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
												<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Inicio/">
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
												<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Contacto">
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
					&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="font-weight-bold  text-center text-white text-ameg-size">REGISTRO DE TRABAJO</h1>
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
			<section class="section bg-white text-center section-text-overlay">
			<!-- <section class="section bg-white text-center section-text-overlay" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;"> -->
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
								<div class="row" <?=$permiso_form?>>
								<div style="margin: auto; display:flex; justify-content: center; width:100%; min-width: 325px;">
									<div class="col-md-9 text-center ameg-shadow-box-ins bg-white">
										<div class="col-md-12 text-center">
											<div class="row text-center">
												<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3" style="color: #42787e !important;">REGISTRO DE TRABAJO</h2>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">


												<div class="col-md-12">
												<form class="form-horizontal" id="update_form" action="/RegistroTrabajo/trabajosAdd" method="POST" enctype="multipart/form-data" >

														
													<div class="card-body pt-0">
														<div class="row">
															
															<input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION['id_usuario']; ?>">
															<div class="col-12 col-lg-4">

																<label class="form-label">Categoria * </label>

																<select class="form-control" style="cursor: pointer;" name="categoria_id" id="categoria_id" tabindex="-1" data-choice="active" required>
																	<option value="0" selected>Seleccione una Opción</option>
																	<?php echo $selectCategoria; ?>
																</select>


															</div>

															<div class="col-12 col-lg-4">

																<label class="form-label">Especialidad * </label>

																<select class="form-control" style="cursor: pointer;" name="especialidad_id" id="especialidad_id" tabindex="-1" data-choice="active" required>
																	<option value="0" selected>Seleccione una Opción</option>
																	<?php echo $selectEspecialidad; ?>
																</select>


															</div>

															<div class="col-12 col-lg-4">
																
																<label class="form-label">Título Corto *</label>
																<div class="input-group">
																	<input id="titulo_corto" name="titulo_corto" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>

															<div class="col-12 col-lg-4">
																
																<label class="form-label">Título Ingles *</label>
																<div class="input-group">
																	<input id="titulo_en" name="titulo_en" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>

															<div class="col-12 col-lg-4">
																
																<label class="form-label">Título Español *</label>
																<div class="input-group">
																	<input id="titulo_es" name="titulo_es" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>

															<!-- Adjunto -->

															<div class="col-12 col-lg-4">
																
																<label class="form-label">Adjunto Resumen *</label>
																<div class="input-group">
																<input type="file" class="form-control" id="adjunto" name="adjunto" required>
																</div>
															</div>
														

															<!-- Adjunto Extenso -->

															<div class="col-12 col-lg-4" id="cont-adjunto-ext">
																
																<label class="form-label">Adjunto Extenso</label>
																<div class="input-group">
																<input type="file" class="form-control" id="adjunto_extenso" name="adjunto_extenso">
																</div>															

															</div>

																	<input id="resumen" name="resumen" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="hidden" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">

															
															<div class="col-12 col-lg-4">
																
																<label class="form-label">Autor *</label>
																<div class="input-group">
																	<input id="autor" name="autor" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
															
															<div class="col-12 col-lg-4">
																
																<label class="form-label">Coautores *</label>
																<div class="input-group">
																	<input id="coautores" name="coautores" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>

															<div class="col-12 col-lg-4">
																
																<label class="form-label">Postula Trabajo *</label>
																<div class="input-group">
																	<input id="postulatrabajo" name="postulatrabajo" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>

															<!-- <div class="col-12 col-lg-4">
																
																<label class="form-label">Revisión Trabajo *</label>
																<div class="input-group">
																	<input id="revisiontrabajo" name="revisiontrabajo" maxlength="45" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="" required="" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div> -->

															<div class="col-sm-4 col-12">

																<label class="form-label">Enviar Revista * </label>

																<select class="form-control" style="cursor: pointer;" name="envio_revista" id="envio_revista" tabindex="-1" data-choice="active" required>
																	<option value="0" selected>Seleccione una Opción</option>
																	<option value="1" >SI</option>
																	<option value="2" >NO</option>
																	
																</select>


															</div>
															
															<div class="col-sm-4 col-12" id="cont-url">																

															</div>
															
															<div class="col-12 col-lg-12" id="cont-button-desc">																
																
															</div>

															<div class="col-12 col-lg-12" id="cont-leyenda">																
																
															</div>



															
														</div>
														<div class="row">
																<div class="button-row d-flex justify-content-centergit  mt-4 col-12">
																	<!-- <a class="btn bg-gradient-light mb-0 js-btn-prev" href="/Register" title="Prev">Regresar</a> -->
																	<button class="btn btn-primary btn-lg" type="submit" title="Next">Enviar</button>
																</div>
															</div>
													</form>
												</div>
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
	</section> 

	<hr class="my-0">

	</div>
	</div>

</body>

</html>
<?php echo $footer; ?>
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

 <script>
        $(document).ready(function(){


			$("#categoria_id").on("change",function(){
				var categoria = $("option:selected", this).text();

				if(categoria == "Cartel"){
					$("#cont-adjunto-ext").css("display", "none");
					$("#cont-adjunto-ext").html(`<label class="form-label">Formato</label>
													<div class="input-group">
													<a href="#" class="btn btn-primary w-100" id="formato" name="formato">Descargar</a>
													</div>`);
					$("#cont-url").html(``);
					$("#cont-button-desc").html(`<label class="form-label">Formato</label>
													<div class="input-group">
													<a href="#" class="btn btn-primary w-100 d-flex justify-content-center" id="formato" name="formato"><span >Descargar</span></a>
													</div>`);
					$("#cont-leyenda").html(``);

				}else if(categoria == "Video"){
					$("#cont-adjunto-ext").css("display", "none");
					$("#cont-url").html(``);
					$("#cont-button-desc").html(``);
					$("#cont-leyenda").html(`<p class="mt-3 bg-success text-white">Favor de mandar el link del video al correo : videosameg@grupolahe.com</p>`);

					// $("#cont-url").html(`<label class="form-label">URL * </label>
					// 						<input id="url_video" name="url_video" maxlength="150"  class="form-control" type="text" placeholder="" required="">`);
				}else{
					$("#cont-adjunto-ext").css("display", "block");
					$("#cont-adjunto-ext").html(`<label class="form-label">Adjunto Extenso *</label>
													<div class="input-group">
													<input type="file" class="form-control" id="adjunto_extenso" name="adjunto_extenso" required>
													</div>`);
					$("#cont-url").html(``);
					$("#cont-button-desc").html(``);
					$("#cont-leyenda").html(``);
				}
				// alert($("#categoria_id option:selected").text());
				// console.log($(this+"option:selected").text());
				
			});
        });
          
</script> 


