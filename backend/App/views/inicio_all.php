<?php echo $header; ?>
<body>
		<div class="body" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;">

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

				<section class="section">
					<img src="/img/poster_ameg_h_1.png" 
					style="background-size: auto 100%; background-repeat: no-repeat; 
					max-width: 100%; background-position: center;">
				</section>
				<br>
				<section class="section">
					<h2 class="font-weight-bold text-center">
						Los trabajos que se presentarán durante el congreso se dividen en 4 categorías principales
					</h2>
					<br><br>
					<div class="container container-lg-custom align-content-center pb-lg-5 mb-lg-4">
						<div class="row align-items-center">
							<div class="col-lg-3">
								<a href="#">
									<div class="text-center">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos de ingreso</h2>
										<img width="70" src="/vendor/iconos/mesa1.png"/>
									</div>
								</a>
							</div>
							<div class="col-lg-3">
								<a href="#">
									<div class="icon-box-info text-center">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajo libre oral</h2>
										<img width="70" src="/vendor/iconos/mesa2.png"/>
									</div>
								</a>
							</div>
							<div class="col-lg-3">
								<a href="#">
									<div class="icon-box-info text-center">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos en cartel</h2>
										<img width="70" src="/vendor/iconos/mesa3.png"/>
									</div>
								</a>
							</div>
							<div class="col-lg-3">
								<a href="#">
									<div class="text-center">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos en video</h2>
										<img width="70" src="/vendor/iconos/mesa4.png"/>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
				<section id="" class="bg-purple-fecha text-center">
					<div class="text-center">
						<div class="px-lg-2 pb-1 mb-3 text-center">
                            <br>
							<h3 class="text-center text-white">FECHAS DE RECEPCIÓN</h3	>
						</div>
					</div>
				</section>
				
				<hr class="my-0">
				
			</div>
	</body>

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