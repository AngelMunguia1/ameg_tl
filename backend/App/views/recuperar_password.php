<?php
echo $header;
?>
    <body class="">

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

    <main class="main-content mt-0 ps">
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0 row ameg-shadow-box-ins-tl">
                            <div class="card-header text-center pt-4">
                                <h4 class="font-weight-bold text-center align-items-center" style="margin: 35px;">Recupera tu contraseña, 
									<b class="font-weight-bold text-color-dblue">
										ingresa tu correo electrónico
									</b>
								</h4>
                            </div>
                            <div class="card-body pt-1">
                                <form class="form-horizontal" id="email_form_recovery_pass" action="/Register/verifyCodePass" method="POST">
                                    <div class="mb-3 form-group">
                                        <label style="font-weight:bold; font-size: 15px">Correo eléctronico institucional *</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Ej. usuario@asofarma.com.mx" aria-label="Correo Eléctronico" required="required">
                                    </div>
                                    <!-- <div class="mb-3 form-group">
                                        <label style="font-weight:bold; font-size: 15px">Escribe nuevamente tu correo  *</label>
                                        <input type="email" id="confirm_email" name="confirm_email" class="form-control" placeholder="Ej. usuario@asofarma.com.mx" aria-label="Confirmar tu Correo Eléctronico" required="required">
                                    </div> -->
                                    <div class="form-group text-center">
                                        <button class="btn btn-danger btn-lg" type="submit" id="btn_registro_email">Verificar</button>
                                    </div>
                                    
                                </form>
                                <div class="text-center">
                                    <a class="btn btn-primary btn-lg" href="/Login/">Regresar</a>
                                </div>
                                <br><br>
								    <h4> Correo electrónico de
                                        <b class="font-weight-bold text-color-dblue">
								    		soporte:
								    	</b>
                                        <a href="mailto: contactoejemplo@soporte.com" class="font-weight-bold text-color-aqua">
								    		contactoejemplo@soporte.com
								    	</a>
								    </h4>
                            </div>

                            
                        </div>
                </div>
            </div>
        </div>
        <br>
    </main>
    </body>

<?php echo $footer; ?>