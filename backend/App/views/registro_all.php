<?php echo $header; ?>
	<body>
		<div class="body">

			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 70}">
				<div class="header-body">
					<div class="header-container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo px-3">
									<a href="/Login">
										<img src="img/logo_ameg.png" width="210" height="100" alt="" />
									</a>
								</div>
							</div>
							<div class="header-column justify-content-center">
								<div class="header-nav justify-content-lg-center">
									<div class="header-nav-main header-nav-main-dark header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav flex-column flex-lg-row" id="mainNav">
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Login">
														INICIO
													</a>
												</li>
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Convocatoria">
														CONVOCATORIA
													</a>
												</li>
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" data-toggle="modal" data-target="#doc_programa">
														INSTRUCCIONES PARA AUTORES
													</a>
												</li>
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Registro">
														REGISTROS DE TRABAJO
													</a>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="#">
														<i class="fa fa-user"></i>
														&nbsp;
														INICIA SESIÓN
														&nbsp;
														<i class="fa-solid fa-angle-down"></i>
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Contacto">
														CONTACTO
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

		<div class="modal" id="doc_programa" role="dialog" aria-labelledby="doc_programaLabel" aria-hidden="true" >
            <div class="modal-dialog modal-size-2" role="document" style="max-width: 990px;">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title text-center" id="doc_programaLabel">Instrucciones para autores</h5>
                        <button type="button" class="btn bg-gradient-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://www.flipbookpdf.net/web/site/c3869f9ba5e8f296eb96629df8d314af1b1c8886FBP19835591.pdf.html" frameborder="0" style="width: -webkit-fill-available;
    					max-width: -webkit-fill-available; height:700px;"></iframe>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

			<section id="" class="bg-dark-4 text-left">
				<div class="text-left">
					<div class="px-lg-3 pb-3 mb-4 text-left">
						&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="text-center text-white">REGISTRO</h1>
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
				<section class="section bg-white section-text-overlay">
					<!-- <span class="text-background font-primary font-weight-bold text-color-light appear-animation" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="500" data-plugin-options="{'accY': 100}">EASY AS 123</span> -->
					<!-- <h3 class="text-center">Los trabajos que se presentarán durante el congreso se dividen en 3 categorías principales</h3> -->
					<div class="container container-lg-custom align-content-center pb-lg-5 mb-lg-4">
						<div class="row align-items-center">
							
							<div class="container">
								<!-- <div class="icon-box icon-box-style-1 flex-column flex-lg-row appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300"> -->
									<!-- <div class="icon-box-icon pr-3">
										<img width="42" src="vendor/linear-icons/screen.svg" alt="" data-icon data-plugin-options="{'color': '#FFF', 'animated': true, 'delay': 600}" />
									</div> -->
									<div class="container text-center">
										<div class="row">
											<div class="col">
												<div class="row">
							
													<div class="col-md-10 bg-ameg">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">INSTRUCCIONES</h2>
															<h3 class="text-left text-color-dark text-4 mb-3">PARA REGISTRAR TU TRABAJO</h3>
															<p class="text-justify">1. Registra tus datos</p>
															<p class="text-justify">2. Ingresa a la plataforma</p>
															<p class="text-justify">3. Sube tus datos</p>
															<p class="text-justify">Si ya tienes cuenta inicia sesión dando clic en el botón superior derecho del menú principal</p>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-10 bg-ameg">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">ATENCIÓN</h2>
															<h3 class="text-left text-color-dark text-4 mb-3">URGENTE</h3>
															<p class="text-justify">Trabajos de ingreso: favor de considerar...</p>
													</div>
												</div>	
											</div>
											
											
											<div class="col-md-7 ameg-shadow-box-tre ">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-6">
															<a href="#">
																<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">Registro para trabajos de ingreso</h2>
															</a>
														</div>
														<div class="col-md-6">
															<a href="#">
																<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">Registro para trabajos libres y en video</h2>
															</a>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-3">
															<br>
															<p>Datos de acceso a la plataforma OBLIGATORIO*</p>
															<br><br><br><br>
															<p>Datos personales OBLIGATORIO*</p>
														</div>
														<div class="col-md-9">
														<form class="form-horizontal" method="post">
															<fieldset>
																<legend class="text-center header"></legend>
										
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="fname" name="name" type="text" placeholder="Email" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="lname" name="name" type="text" placeholder="Contraseña" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<br><br>
										
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="email" name="email" type="text" placeholder="Nombre" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
										
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="phone" name="phone" type="text" placeholder="Apellido paterno" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="phone" name="phone" type="text" placeholder="Apellido materno" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="phone" name="phone" type="text" placeholder="Lugar de nacimiento" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="phone" name="phone" type="text" placeholder="Fecha de nacimiento" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="phone" name="phone" type="text" placeholder="edad" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
																<div class="form-group">
																	
																	<div class="col-md-8">
																		<input id="phone" name="phone" type="text" placeholder="sexo" class="form-control ameg-shadow-box-two">
																	</div>
																</div>
										
										
																<div class="form-group">
																	<div class="col-md-12 text-center">
																		<button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
        $( document ).ready(function() {

            $("#form_paymet_ticket").on("submit",function(event){
                event.preventDefault();
                
                    var formData = new FormData(document.getElementById("form_paymet_ticket"));
                    console.log(formData);
                    $.ajax({
                    url:"/Home/uploadTicket",
                    type: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        console.log("Procesando....");

                    
                    },
                    success: function(respuesta){
                        
                        
                        if(respuesta == 'success'){
                           // $('#modal_payment_ticket').modal('toggle');
                            Swal.fire(
                                'OK',
                                'Se ha guardado tu ticket correctamente!!',
                                'success'
                            )

                            setTimeout(() => {
                                window.location.reload();
                            }, 100);
                            
                            
                        }
                        
                        console.log(respuesta);

                    },
                    error:function (respuesta)
                    {
                        console.log(respuesta);
                    }

                });
            });

        });
         
    
    </script>

<?php echo $footer; ?>