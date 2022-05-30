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
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Registro/">
                                                        REGISTRO DE USUARIO
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Contacto/">
														CONTACTO
													</a>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Login/">
														<i class="fa fa-user"></i>
														&nbsp;
														LOGIN
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								
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

			<div role="main" class="main">
				<section class="section bg-white section-text-overlay">
				<!-- <section class="section bg-white section-text-overlay" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;"> -->
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
										<div class="row" style="margin: 0px auto; display:flex; justify-content: center; width:60%; min-width: 325px;">
											<div class="col">
													<h4 class="font-weight-bold text-center align-items-center" style="margin: 35px;">Recupera tu contraseña, 
														<b class="font-weight-bold text-color-dblue">
															ingresa tu correo electrónico
														</b>
													</h4>
												<div class="card-body">
                                                    <form role="form" class="text-start text-center" id="email_form_recovery_pass" action="/Register/verifyCodePass" method="POST" class="form-horizontal">
                                                        <label style="font-weight:bold; font-size: 15px;">Correo electrónico</label>
														<div style="margin: 0px auto; display:flex; justify-content: center;">
                                                            <input type="email" name="usuario" id="usuario" class="form-control text-center" placeholder="usuario@grupolahe.com" aria-label="Email" required="required" style="text-align: center; background-color: #ebafff; width:60%;">
                                                        </div>
														<br><br>
													<button type="submit" class="btn btn-danger btn-lg" id="btn_registro_email" name="btn_upload">Recupera mi contraseña</button>
														<br><br>
													<a href="/Login/">
														<button class="btn btn-primary btn-lg">Regresar</button>
													</a>
														<br><br>
													<h4> Correo electrónico de
                                                        <b class="font-weight-bold text-color-dblue">
															soporte:
														</b>
                                                        <a href="mailto: contactoejemplo@soporte.com" class="font-weight-bold text-color-aqua">
															contactoejemplo@soporte.com
														</a>
													</h4>
                                                    </form>
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