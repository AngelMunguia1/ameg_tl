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
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Contacto">
														CONTACTO
													</a>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="#">
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

			<div role="main" class="main">
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
									<div class="ameg-shadow-box-tre container text-center">
										<div class="row">
											<div class="col">
													<h2 class="font-weight-bold text-center" style="margin: 55px;">Informes: 
														<b class="font-weight-bold text-color-dblue">
															Tel. 5523-5204
														</b>  Contacto: 
														<a href="#" class="font-weight-bold text-color-aqua">
															asociados@amegendoscopia.org.mx
														</a>
													</h2>
													<h4 class="font-weight-bold text-center" style="margin: 55px;">
														<a href="#" class="font-weight-bold text-color-purple" data-toggle="modal" data-target="#doc_programa">
															(link) CONSULTE EL REGLAMENTO DE ADMISION Y DE EVALUACIÓN DE TRABAJOS
														</a>
													</h4>
										
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