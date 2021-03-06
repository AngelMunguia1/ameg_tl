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
                                        <!--<li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Inicio/">
                                                INICIO
                                            </a>
                                        </li>-->
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
                                                REGISTROS DE TRABAJOS
                                            </a>
                                        </li>
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
                                        <!--<li class="dropdown dropdown-mega dropdown-mega-style-2">
                                            <a class="dropdown-item dropdown-toggle" style="color:#70C7D2;" href="/Login/">
                                                <i class="fa fa-user"></i>
                                                &nbsp;
                                                LOGIN
                                                &nbsp;
                                                <i class="fa-solid fa-angle-down"></i>
                                            </a>
                                        </li>-->
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

        <section class="section bg-light-5">
            <img src="/img/poster_ameg_h_1.png"
                 style="background-size: auto 100%; background-repeat: no-repeat;
					max-width: 100%; background-position: center;">
        </section>
        <br>
        <section class="section" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;">
            <h2 class="font-weight-bold text-center">
                Los trabajos que se presentar??n durante el congreso se dividen en 4 categor??as principales
            </h2>
            <br><br>
            <div class="container container-lg-custom align-content-center pb-lg-5 mb-lg-4">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <a href="#">
                            <div class="ameg-shadow-box-btn bg-white text-center">
                                <h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos de ingreso</h2>
                                <img width="70" src="/vendor/iconos/mesa1.png"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            <div class="ameg-shadow-box-btn bg-white icon-box-info text-center">
                                <h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajo libre oral</h2>
                                <img width="70" src="/vendor/iconos/mesa2.png"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            <div class="ameg-shadow-box-btn bg-white icon-box-info text-center">
                                <h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos en cartel</h2>
                                <img width="70" src="/vendor/iconos/mesa3.png"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            <div class="ameg-shadow-box-btn bg-white text-center">
                                <h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos en video</h2>
                                <img width="70" src="/vendor/iconos/mesa4.png"/>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="" class="bg-dark-4 text-center">
            <div class="text-center">
                <div class="px-lg-3 pb-3 mb-4 text-center">
                    <br>
                    <h1 class="text-center text-white">FECHAS DE RECEPCI??N</h1>
                </div>
            </div>
        </section>

        <hr class="my-0">

    </div>
</body>



<?php echo $footer; ?>
