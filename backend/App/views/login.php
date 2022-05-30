<?php
    echo $header;
?>
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
                <div class="font-weight-bold px-lg-3 pb-3 text-left">
                    &nbsp;&nbsp;&nbsp;&nbsp;<h1 class="text-center text-white font-weight-bold text-ameg-size">INICIO DE SESIÓN</h1>
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
            <section class="section bg-white section-text-overlay" style="background-image: url('/img/bg-ameg.jpeg'); background-size: cover;">
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
                                    <!-- <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-10 bg-ameg">
                                                <h2 class="font-weight-bold text-left text-4 mb-3">INSTRUCCIONES</h2>
                                                <h3 class="text-left text-4 mb-3">PARA REGISTRAR TU TRABAJO</h3>
                                                <p class="text-justify">1. Ingresa tus datos</p>
                                                <p class="text-justify">2. Revisa que tus datos sean correctos</p>
                                                <p class="text-justify">3. Ingresa al sistema</p>
                                            </div>
                                        </div>
                                    </div> -->
                                <div style="margin: 0px auto; display:flex; justify-content: center; width:60%; min-width: 325px;">
                                    <div class="col-md-12 ameg-shadow-box-ins" style="background-color: #ffffff61 !important;">
                                        <div class="col-md-12 text-center">
                                            <h3 class="font-weight-bold text-center text-color-dark text-4 mb-3">Ingresa tus datos para iniciar sesión</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card-plain mt-7">
                                                <div class="card-header pb-0 text-start">
                                                    <h5 class="font-weight-bolder text-info text-dark text-center">
                                                        Asociación Mexicana de Endoscopia Gastrointestinal y Colegio de Profesionistas A. C.
                                                    </h5>
                                                    <div id="counter" class="group text-center mt-4">
                                                    </div>
                                                    <p class="mb-0 mt-0 text-center">Introduzca el correo electrónico con el cual usted fue registrado para poder iniciar sesión</p>
                                                </div>
                                                <!-- Button trigger modal -->
                                                <div class="card-body">
                                                    <form role="form" class="text-start text-center" id="login" action="/Login/crearSession" method="POST" class="form-horizontal">
                                                        <label style="font-weight:bold; font-size: 15px;">Correo electrónico</label>
                                                        <div class="mb-5">
                                                            <input type="email" name="usuario" id="usuario" class="form-control text-center" placeholder="usuario@grupolahe.com" aria-label="Email">
                                                        </div>
                                                        <label style="font-weight:bold; font-size: 15px;">Contraseña</label>
                                                        <div class="mb-5">
                                                            <input type="password" name="password" id="password" class="form-control text-center btn-outline-relog" placeholder="•••••••••" aria-label="Password">
                                                        </div>
                                                        <a href="/Recupera/" class="text-center">¿Olvidaste tu contraseña?</a>
                                                        <br><br>
                                                        <div class="text-center">
                                                            <center><button  type="button" id="btnEntrar" class="btn bg-gradient-secondary mt-1 mb-0"><b style="color: #FFFFFF; text-align: center;"><center>INICIAR</center></b></button></center>
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

<?php echo $footer; ?>