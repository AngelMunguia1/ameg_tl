<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Home AS HomeDao;
use \App\models\General as GeneralDao;
use \App\models\Asistentes as AsistentesDao;
use \App\models\Especialidades as EspecialidadesDao;
use \App\models\Usuarios as UsuariosDao;
use \App\models\Cursos as CursosDao;
use \App\controllers\Contenedor;
use \Core\Controller;

class Trabajos extends Controller{
    private $_contenedor;

    public function index() {
        $extraHeader =<<<html
        <!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Sistema de trabajo libres de AMEG</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="EZY - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <!--ICONO PESTAÑA-->
        <link rel="icon" type="image/vnd.microsoft.icon" href="../../../img/transfer.png">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.css">
		<link rel="stylesheet" href="/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/vendor/linear-icons/css/linear-icons.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="/master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/css/theme.css">
		<link rel="stylesheet" href="/css/theme-elements.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/css/custom.css">

		<!-- Head Libs -->
		<script src="/vendor/modernizr/modernizr.min.js"></script>
        
html;
        $extraFooter =<<<html
        <footer id="footer" class="mt-0">
				<div class="footer-copyright bg-light mt-0">
					<div class="container mt-3">
						<div class="row text-center">
							<div class="col">
								<p>GRUPO LAHE. © 2022. All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

            <!-- Vendor -->
            <script src="/vendor/jquery/jquery.min.js"></script>
            <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
            <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
            <script src="/vendor/jquery.cookie/jquery.cookie.js"></script>
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="/vendor/common/common.min.js"></script>
            <script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
            <script src="/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
            <script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
            <script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
            <script src="/vendor/isotope/jquery.isotope.min.js"></script>
            <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script src="/vendor/vide/jquery.vide.min.js"></script>
            <script src="/vendor/vivus/vivus.min.js"></script>
            <script src="/master/style-switcher/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
            
            <!-- Theme Base, Components and Settings -->
            <script src="/js/theme.js"></script>
            
            <!-- Current Page Vendor and Views -->
            <script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
            <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
            
            <!-- Theme Custom -->
            <script src="/js/custom.js"></script>
            
            <!-- Theme Initialization Files -->
            <script async src="/js/theme.init.js"></script>
            
            <!-- Examples -->
            <script src="/js/examples/examples.landing.js"></script>


        <script>
            $(document).ready(function(){
                $.validator.addMethod("checkUserName",function(value, element) {
                  var response = false;
                    $.ajax({
                        type:"POST",
                        async: false,
                        url: "/Login/isUserValidate",
                        data: {usuario: $("#usuario").val()},
                        success: function(data) {
                            if(data=="true"){
                                $('#btnEntrar').attr("disabled", false);
                                response = true;
                            }else{
                                $('#btnEntrar').attr("disabled", true);
                            }
                        }
                    });

                    return response;
                },"The user is not registered in our database");

                $("#login").validate({
                    rules:{
                        usuario:{
                            required: true,
                            checkUserName: true
                        }
                    },
                    messages:{
                        usuario:{
                            required: "This field is required",
                        }
                    }
                });

                $("#btnEntrar").click(function(){
                    $.ajax({
                        type: "POST",
                        url: "/Login/verificarUsuario",
                        data: $("#login").serialize(),
                        success: function(response){
                            if(response!=""){
                                var usuario = jQuery.parseJSON(response);
                                if(usuario.nombre!=""){
                                    $("#login").append('<input type="hidden" name="autentication" id="autentication" value="OK"/>');
                                    $("#login").append('<input type="hidden" name="nombre" id="nombre" value="'+usuario.nombre+'"/>');
                                    $("#login").submit();
                            }else{
                                alertify.alert("Error de autenticación <br> El usuario o contraseña es incorrecta");
                            }
                            }else{
                                alertify.alert("Error de autenticación <br> El usuario o contraseña es incorrecta");
                            }
                        }
                    });
                });

            });
        </script>

        
html;

    $trabajos_libres = '';
    $tabla = '';
    $trabajos_libres =  GeneralDao::getAllTrabajosByName($_SESSION['id']);
    //echo("total registros i".count($trabajos_libres_i));

    foreach ($trabajos_libres as $key => $value) {

    $tabla.= <<<html
            <tr>
                <td style="text-align:left; vertical-align:middle;"> 
                        
                    #<span>{$value['id']}</span>

                </td>

                <td style="text-align:left; vertical-align:middle;"> 
                        
                    #<span>{$value['usuario_id']}</span>

                </td>
         
                <td style="text-align:left; vertical-align:middle;"> 
                    
                    <span>{$value['titulo_corto']}</span>

                </td>

                <td style="text-align:left; vertical-align:middle;">        
                        <span class="fa fa-user-md" style="font-size: 13px"></span> {$value['autor']}
                </td>

                <td style="text-align:left; vertical-align:middle;">        
                        <span class="fa fa-user-md" style="font-size: 13px"></span> {$value['coautores']}
                </td>

                <td style="text-align:left; vertical-align:middle;">        
                        <span>{$value['institucion']}</span>
                </td>

                <td style="text-align:left; vertical-align:middle;">        
                        <span>{$value['categoria']}</span>
                </td>

                <td style="text-align:left; vertical-align:middle;">        
                        <span>{$value['especialidad']}</span>
                </td>

                <td style="text-align:left; vertical-align:middle;">        
                        <span>{$value['postulatrabajo']}</span> 
                </td>

                <td style="text-align:left; vertical-align:middle;">
                <div data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">         
                    <a " 
                        class="btn btn-primary w-100 d-flex justify-content-center iframe">
                        <span>Abrir resumen
                        </span>
                    </a>
                </div>
                </td>

                <td style="text-align:left; vertical-align:middle;">
                <div data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">        
                    <a " 
                        class="btn btn-primary w-100 d-flex justify-content-center">
                        <span>Abrir extenso
                        </span>
                    </a>
                </div>
                </td>

                <!--<td style="text-align:left; vertical-align:middle;">        
                    <a href="/file_ing_carta_rec_uno/{$value['ing_carta_rec_uno']}" 
                        class="btn btn-primary w-100 d-flex justify-content-center" id="formato_solicitud" name="formato_solicitud">
                        <span>Abrir carta
                        </span>
                    </a>
                </td>

                <td style="text-align:left; vertical-align:middle;">        
                    <a href="/file_ing_carta_rec_dos/{$value['ing_carta_rec_dos']}" 
                        class="btn btn-primary w-100 d-flex justify-content-center" id="formato_solicitud" name="formato_solicitud">
                        <span>Abrir carta
                        </span>
                    </a>
                </td> -->  
        </tr>
    html;
    }

        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::set('tabla',$tabla);
        View::render("trabajos_all");
    }

    public function isUserValidate(){
        echo (count(HomeDao::getUser($_POST['usuario']))>=1)? 'true' : 'false';
    }

    public function verificarUsuario(){
        $usuario = new \stdClass();
        $usuario->_usuario = MasterDom::getData("usuario");
        $usuario->_password = MD5(MasterDom::getData("password"));
        $user = HomeDao::getById($usuario);
        if (count($user)>=1) {
            $user['nombre'] = utf8_encode($user['nombre']);
            echo json_encode($user);
        }
    }

    public function crearSession(){
        $usuario = new \stdClass();
        $usuario->_usuario = MasterDom::getData("usuario");
        $user = HomeDao::getById($usuario);
        session_start();
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['nombre'] = $user['nombre'];
        header("location: /Home/");
    }

    public function cerrarSession(){
        unset($_SESSION);
        //session_unset();
        session_destroy();
        header("Location: /Login/");
    }
    
}