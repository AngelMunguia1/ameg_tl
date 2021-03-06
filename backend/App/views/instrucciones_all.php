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
											<li class="dropdown dropdown-mega dropdown-mega-style-2">
												<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Login/">
													<i class="fa fa-user"></i>
													&nbsp;
													LOGIN
													&nbsp;
													<i class="fa-solid fa-angle-down"></i>
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Contacto/">
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

		<section id="" class="bg-purple-fecha text-left">
			<div class="text-left">
				<div class="px-lg-3 pb-3 text-left">
					&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="font-weight-bold text-center text-white text-ameg-size">INSTRUCCIONES PARA AUTORES</h1>
				</div>
		</section>

		<div role="main" class="main">
			<input type="hidden" id="get_trabajo" name="get_trabajo" value="<?=$trabajo?>">
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
			<section class="section  section-text-overlay">
			<!-- <section class="section  section-text-overlay" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;"> -->
				<!-- <span class="text-background font-primary font-weight-bold text-color-light appear-animation" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="500" data-plugin-options="{'accY': 100}">EASY AS 123</span> -->
				<!-- <h3 class="text-center">Los trabajos que se presentar??n durante el congreso se dividen en 3 categor??as principales</h3> -->
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
											<div class="col-md-10 " style="background-color:#f0f9fa2e !important ;">
												<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">CATEGOR??AS</h2>
											
												<button style="margin: 10px; background-color: #5C1F69; border-radius: 6px; border: 2px solid #0016b0; font-weight: 600; color: #ffffff; width:90%;"  id="mostrar_trabajo_ingreso">TRABAJOS DE INGRESO</button>
												
												<button style="margin: 10px; background-color: #5C1F69; border-radius: 6px; border: 2px solid #0016b0; font-weight: 600; color: #ffffff; width:90%;" id="mostrar_trabajo_libre_oral">TRABAJO LIBRE ORAL</button>
											
												<button style="margin: 10px; background-color: #5C1F69; border-radius: 6px; border: 2px solid #0016b0; font-weight: 600; color: #ffffff; width:90%;" id="mostrar_trabajo_en_cartel">TRABAJO EN CARTEL</button>

												<button style="margin: 10px; background-color: #5C1F69; border-radius: 6px; border: 2px solid #0016b0; font-weight: 600; color: #ffffff; width:90%;" id="mostrar_trabajo_video">TRABAJO EN V??DEO</button>
												
											
											</div>
										</div>
									</div>


									<div class="col-md-9 ameg-shadow-box-ins">
										<div class="col-md-12">
											<div class="row"   id="trabajos_ingreso" style="display: none;">
												<center>
													<div class="col-md-12">
														<a href="#">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">INSTRUCCIONES PARA TRABAJO DE INGRESO</h2>
														</a>
													</div>
												</center>
												<div style="text-align: justify; margin: 16px;">
													<h4><span style="font-weight: bold;">6.1</span> Enviar el resumen de un trabajo de investigaci??n en el ??rea de endoscop??a en archivo Word de una cuartilla de extensi??n como m??ximo, con letra Arial de 12 puntos, espacio sencillo, a trav??s de la plataforma en la p??gina de la AMEG-CP: www.amegendoscopia.org.mx .<span style="font-weight: bold;"> No se aceptar?? ning??n trabajo despu??s del 30 de junio del a??o curso.</span>
														<h4><span style="font-weight: bold;">6.2</span> El resumen debe incluir:</h4>
														<h4>
															<li>T??tulo completo en espa??ol e ingl??s.</li>
														</h4>
														<h4>
															<li>Nombre completo del autor y coautores.</li>
														</h4>
														<h4>
															<li>Nombre del hospital, servicio, instituci??n, Ciudad y Estado.</li>
														</h4>
														<h4>
															<li>Correo electr??nico y tel??fono del autor.</li>
														</h4>
														<h4>
															<li>El resumen debe incluir 5 secciones: Introducci??n, objetivo, material y m??todos, resultados, conclusiones. En ning??n caso se podr?? se??alar: ???Los resultados se expondr??n en la presentaci??n???.</li>
														</h4>
														<h4><span style="font-weight: bold;">6.3</span> No se aceptar??n casos cl??nicos.</h4>
														<h4><span style="font-weight: bold;">6.4</span> El resumen no deber?? incluir im??genes.</h4>
														<h4><span style="font-weight: bold;">6.5</span> Los res??menes aceptados ser??n publicados en la revista Endoscopia, tal como fueron registrados, es responsabilidad de los autores que no tenga errores de redacci??n, ortograf??a o gram??tica.</h4>
														<h4><span style="font-weight: bold;">6.5</span> Los res??menes aceptados ser??n publicados en la revista Endoscopia, tal como fueron registrados, es responsabilidad de los autores que no tenga errores de redacci??n, ortograf??a o gram??tica.</h4>
														<h4><span style="font-weight: bold;">6.6</span> La presentaci??n del trabajo durante el Congreso ??nicamente podr?? realizarla el solicitante, quien deber?? estar inscrito a la Reuni??n Nacional.</h4>
														<h4><span style="font-weight: bold;">6.7</span> Adem??s del resumen, el solicitante deber?? enviar a la plataforma digital, su trabajo en extenso con las siguientes caracter??sticas:</h4>
														<h4>
															<li>T??tulo completo en espa??ol e ingl??s.</li>
														</h4>
														<h4>
															<li>T??tulo corto en espa??ol e ingl??s.</li>
														</h4>
														<h4>
															<li>Nombre completo del autor y coautores.</li>
														</h4>
														<h4>
															<li>Departamento e instituci??n de procedencia.</li>
														</h4>
														<h4>
															<li>Direcci??n, tel??fono celular y correo electr??nico del autor.</li>
														</h4>
														<h4>
															<li>Resumen en espa??ol e ingl??s.</li>
														</h4>
														<h4>
															<li>Palabras clave en espa??ol e ingl??s.</li>
														</h4>
														<h4>
															<li>El cuerpo del trabajo debe constar de: introducci??n, objetivo, material y m??todo, criterios de inclusi??n y exclusi??n, an??lisis estad??sticos, resultados y discusi??n.</li>
														</h4>
														<h4>
															<li>Las referencias deben ser ordenadas en apego a los lineamientos de la
																Revista Endoscopia (consultar ???Instrucciones para los autores???) en:
																Instrucciones para los autores www.amegendoscopia.org.mx/revista-ameg/
																instrucciones-para-los-autores
															</li>
														</h4>
														<h4>
															<li>??	Las tablas y figuras deber??n estar numeradas secuencialmente y con n??meros ar??bigos, de acuerdo con su aparici??n en el texto. Se deber??n enviar en p??ginas anexas y separadas de las referencias.
															</li>
														</h4>

												</div>
											</div>
										</div>


										<!-- INSTRUCCIONES PARA LOS AUTORES DE TRABAJOS LIBRES -->
										<div class="col-md-12">
											<div class="row" style="display: none;" id="autores_trabajos_libres">
												<center>
													<div class="col-md-12">
														<a href="#">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">7.- INSTRUCCIONES PARA LOS AUTORES DE TRABAJOS LIBRES</h2>
														</a>
													</div>
												</center>
												<div style="text-align: justify; margin: 16px;">
													<h4><span style="font-weight: bold;">7.1</span> Todo miembro de la AMEG-CP tiene derecho de inscribir sus trabajos. Pueden recibirse trabajos de autores no miembros con el aval de un miembro titular y se??alarlo entre los autores con un asterisco.</h4>
														<h4><span style="font-weight: bold;">7.2</span> Debe seguir los lineamientos emitidos en la categor??a anterior.</h4>
														<h4><span style="font-weight: bold;">7.3</span> Hay tres modalidades de presentaci??n para trabajos libres: oral, cartel digital y video. El autor puede solicitar una categor??a de presentaci??n; sin embargo, ser?? el comit?? quien determinar?? la forma de presentaci??n final con base a los criterios de selecci??n.</h4>
														
														
														<h4><span style="font-weight: bold;">7.4</span> No se aceptar??n casos cl??nicos para presentaci??n oral; est??n permitidos en cartel digital o en video.</h4>
														<h4><span style="font-weight: bold;">7.5</span> Los trabajos en cartel no ser??n considerados para concurso.</h4>
														<h4><span style="font-weight: bold;">7.6</span> Los res??menes aceptados ser??n publicados en la revista Endoscopia, tal como fueron registrados; es responsabilidad de los autores la correcta redacci??n, ortograf??a y gram??tica</h4>
														

												</div>
											</div>
										</div>

										<!-- INSTRUCCIONES PARA LA PRESENTACI??N DE TRABAJO ORAL -->
										<div class="col-md-12">
											<div class="row" style="display: none;" id="trabajos_orales">
												<center>
													<div class="col-md-12">
														<a href="#">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">7.7 NSTRUCCIONES PARA LA PRESENTACI??N DE TRABAJO ORAL</h2>
														</a>
													</div>
												</center>
												<div style="text-align: justify; margin: 16px;">
													<h4><span style="font-weight: bold;">7.7.1</span> La presentaci??n del trabajo durante el Congreso la realizar?? el autor; en caso de necesidad y previa notificaci??n al Comit?? de Admisi??n, podr?? hacerlo un coautor quien deber?? estar inscrito a la Reuni??n Nacional.</h4>
														<h4><span style="font-weight: bold;">7.7.2</span> El autor deber?? presentarse 30 minutos antes de la hora programada y estar presente en el tiempo determinado en la carta de aceptaci??n.</h4>
														<h4><span style="font-weight: bold;">7.7.3</span> El t??tulo, autores, adscripci??n, antecedentes, objetivos, m??todos, resultados y conclusiones ser??n expuestos con ayuda de una presentaci??n digital en Power Point.</h4>
														
														
														<h4><span style="font-weight: bold;">7.7.4</span> Si quiere que su trabajo en extenso sea publicado en la Revista Encoscop??a, deber?? mandarlo a los editores de la misma para su aceptaci??n o modificaci??n pertinente.</h4>

												</div>
											</div>
										</div>

												<!-- INSTRUCCIONES PARA LOS AUTORES DE TRABAJO LIBRE EN CARTEL DIGITAL -->
												<div class="col-md-12">
											<div class="row" style="display: none;" id="cartel_digital">
												<center>
													<div class="col-md-12">
														<a href="#">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">8. INSTRUCCIONES PARA LOS AUTORES DE TRABAJO LIBRE EN CARTEL DIGITAL</h2>
														</a>
													</div>
												</center>
												<div style="text-align: justify; margin: 16px;">
													<h4><span style="font-weight: bold;">8.1</span> La elecci??n de presentaci??n de trabajo libre en cartel ser?? decisi??n del Comit?? de Admisi??n. </h4>
														<h4><span style="font-weight: bold;">8.2</span> El cartel deber?? ser compatible para su proyecci??n en pantalla HD de 1896 pixeles (67 cm) de alto por???1035 pixeles (36.5 cm) de ancho. Deber??n ser registrados en formato PDF. No se aceptar??n carteles impresos para su presentaci??n. </h4>
														<h4><span style="font-weight: bold;">8.3</span> Una vez aceptado su cartel y en caso de que se le haya solicitado realizar alguna modificaci??n, deber?? enviarlo a m??s tardar el 15 de agosto del a??o en curso con las especificaciones solicitadas a la direcci??n  videosameg@grupolahe.com., el t??tulo del cartel deber?? ser igual al que fue registrado. </h4>
														
														
														<h4><span style="font-weight: bold;">8.4</span> Incluir los nombres completos del autor seguido de los coautores; nombre oficial de la instituci??n donde fue efectuado, marcar con un asterisco el miembro titular que lo avala, cuando as?? sea necesario.</h4>
														<h4><span style="font-weight: bold;">8.5</span> Requisitos de contenido: antecedentes, resumen cl??nico y conclusiones o antecedentes, objetivos, material y m??todos, resultados, conclusiones y bibliograf??a, seg??n corresponda.</h4>
														<h4><span style="font-weight: bold;">8.6</span> Puede incluir fotograf??as, gr??ficas, cuadros y esquemas.</h4>
														<h4><span style="font-weight: bold;">8.7</span> El tama??o de la letra empleada en el texto deber?? ser de tama??o suficiente para ser le??da con facilidad a un metro de distancia.</h4>
														<h4><span style="font-weight: bold;">8.8</span> El autor deber?? presentarse 30 minutos antes de la hora programada y estar presente en el tiempo determinado en la carta de aceptaci??n.</h4>
														<h4><span style="font-weight: bold;">8.9</span> Los trabajos en cartel no ser??n considerados para concurso.</h4>

												</div>
											</div>
										</div>

										<!-- INSTRUCCIONES PARA LOS AUTORES DE TRABAJO LIBRE EN VIDEO -->
										<div class="col-md-12">
											<div class="row" style="display: none;" id="trabajo_en_video">
												<center>
													<div class="col-md-12">
														<a href="#">
															<h2 class="font-weight-bold text-left text-color-dark text-4 mb-3">9. INSTRUCCIONES PARA LOS AUTORES DE TRABAJO LIBRE EN VIDEO</h2>
														</a>
													</div>
												</center>
												<div style="text-align: justify; margin: 16px;">
													<h4><span style="font-weight: bold;">9.1</span>  Deber??n ser videos originales, editados o continuos, obtenidos por el propio autor con duraci??n m??xima de 5 minutos. </h4>
														<h4><span style="font-weight: bold;">9.2</span>  El video deber?? contener una introducci??n con informaci??n cl??nica, seguida por una explicaci??n y una conclusi??n; es decir, debe ser autoexplicable.   </h4>
														<h4><span style="font-weight: bold;">9.3</span>  El video deber??  enviarse  en  formato  mpg o mp4  a  la  direcci??n  videosameg@grupolahe.com mediante WE-TRANSFER  (http://www.wetransfer.com) para que puedan ser integrados a la plataforma para su revisi??n. </h4>
														
														
														<h4><span style="font-weight: bold;">9.4</span> Los videos enviados deber??n contener en un archivo de texto en el que se incluyan los nombres completos del autor seguido de los coautores; nombre oficial de la instituci??n donde fue efectuado, marcar con asterisco el miembro titular que lo avala (cuando sea necesario), el t??tulo del video y una vi??eta cl??nica o un resumen estructurado de acuerdo a las instrucciones de la categor??a anterior. </h4>
														<h4><span style="font-weight: bold;">9.5</span> Los videos ser??n donados a la AMEG-CP, quien reconocer?? la autor??a.</h4>
														<h4><span style="font-weight: bold;">9.6</span> No se aceptar??n videos que no cumplan con las caracter??sticas especificadas.</h4>
														<h4><span style="font-weight: bold;">9.7</span> Una vez aceptado su video y en caso de que se le haya solicitado realizar alguna modificaci??n, deber?? enviarlo a m??s tardar el 15 de agosto del a??o en curso con las especificaciones solicitadas, el t??tulo del video deber?? ser igual al que fue registrado.</h4>
														<h4><span style="font-weight: bold;">9.8</span> Al momento de la presentaci??n en sitio no se admitir??n cambio alguno. Los videos no ser??n considerados para concurso. </h4>
														

												</div>
											</div>
										</div>










										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3">


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
	$(document).ready(function(){

		var trabajo = $("#get_trabajo").val();
		if(trabajo==""){
			$("#trabajos_ingreso").css("display", "block");
		}else{
			$("#"+trabajo).css('display','block');
		}

		

		$("#mostrar_trabajo_ingreso").click(function(){			
	 
			$("#cartel_digital").css("display", "none");
			$("#trabajo_en_video").css("display", "none");
			$("#trabajos_ingreso").css("display", "block");
			
		 });
		$("#mostrar_trabajo_libre_oral").click(function(){			
			$("#trabajos_ingreso").css("display", "none");
			$("#cartel_digital").css("display", "none");
			$("#trabajo_en_video").css("display", "none");
			$("#trabajos_orales").css("display", "block");
		 });
		 $("#mostrar_trabajo_video").click(function(){			
			$("#trabajos_orales").css("display", "none");
			$("#trabajos_ingreso").css("display", "none");
			$("#cartel_digital").css("display", "none");
			$("#trabajo_en_video").css("display", "block");
			
		 });

		 $("#mostrar_trabajo_en_cartel").click(function(){			
			$("#trabajos_orales").css("display", "none");
			$("#trabajos_ingreso").css("display", "none");
			$("#cartel_digital").css("display", "none");
			$("#cartel_digital").css("display", "block");
			
		 });
		
	});


	$(document).ready(function() {

		$("#form_paymet_ticket").on("submit", function(event) {
			event.preventDefault();

			var formData = new FormData(document.getElementById("form_paymet_ticket"));
			console.log(formData);
			$.ajax({
				url: "/Home/uploadTicket",
				type: "POST",
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					console.log("Procesando....");


				},
				success: function(respuesta) {


					if (respuesta == 'success') {
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
				error: function(respuesta) {
					console.log(respuesta);
				}

			});
		});

	});
</script>

<?php echo $footer; ?>