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
        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
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

    public function Usuario() {
    
        $modalEdit = '';
        foreach (GeneralDao::getAllColaboradoresByName() as $key => $value) {
            $modalEdit .= $this->generarModalEditUser($value);
        }



        $especialidades = EspecialidadesDao::getAll();
        $optionEspecialidad = '';

        foreach($especialidades as $key => $value){
            $optionEspecialidad .= <<<html
                <option value="{$value['nombre']}">{$value['nombre']}</option>
html;
        }

        $paises = UsuariosDao::getPais();
        $optionPais = '';
        foreach($paises as $key => $value){
            $optionPais .= <<<html
                    <option value="{$value['id_pais']}">{$value['pais']}</option>
html;
        }

        View::set('asideMenu',$this->_contenedor->asideMenu());
        View::set('optionEspecialidad', $optionEspecialidad);
        View::set('optionPais', $optionPais);
        View::set('tabla', $this->getAllColaboradoresAsignadosByName());
        View::set('modalEdit',$modalEdit);
        View::render("usuarios_all");
    }


    public function generarModalEditUser($datos){
        $modal = <<<html
            <div class="modal fade" id="editar-usuario{$datos['id_registrado']}" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Editar Usuario
                    </h5>

                    <span type="button" class="btn bg-gradient-danger" data-dismiss="modal" aria-label="Close">
                        X
                    </span>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px">A continuación ingrese los datos del usuario.</p>
                    <hr>
                    <form method="POST" enctype="multipart/form-data" class="form_datos_edit">
                        <div class="form-group row">
                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="nombre">Nombre <span class="required">*</span></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{$datos['nombre']}" require>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="apellidop">Apellido Paterno <span class="required">*</span></label>
                                <input type="text" class="form-control" id="apellidop" name="apellidop" placeholder="Apellido Paterno" value="{$datos['apellidop']}" require>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="apellidom">Apellido Materno <span class="required">*</span></label> 
                                <input type="text" class="form-control" id="apellidom" name="apellidom" placeholder="Apellido Materno" value="{$datos['apellidom']}" require>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="email">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{$datos['email']}" require readonly>
                                <span id="msg_email" style="font-size: 0.75rem; font-weight: 700;margin-bottom: 0.5rem;"></span>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="prefijo">Prefijo <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="prefijo" id="prefijo" required>
                                <option value="" selected disabled>Seleciona una opción</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Dra.">Dra.</option>
                                <option value="Sr.">Sr.</option>
                                <option value="Sra.">Sra.</option>                          
                                
                                </select>
                            </div>

                           

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="telefono">Telefono <span class="required">*</span></label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{$datos['telefono']}" require>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="pais">País <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="pais" id="pais_edit" required>
html;

        foreach(UsuariosDao::getPais() as $key => $value){
            $selectedPais = ($value['id_pais'] == $datos['id_pais']) ? 'selected' : '';
            $modal .= <<<html
                                            <option value="{$value['id_pais']}" $selectedPais>{$value['pais']}</option>
html;
        }
        $modal .= <<<html
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="estado">Estado <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="estado" id="estado_edit" required>
html;


        foreach(UsuariosDao::getStateByCountry($datos['id_pais']) as $key => $value){
            $selectedEstado = ($value['id_estado'] == $datos['id_estado']) ? 'selected' : '';
            $modal .= <<<html
                                            <option value="{$value['id_estado']}" $selectedEstado>{$value['estado']}</option>
html;
        }

        $modal .= <<<html

                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn bg-gradient-success" id="btn_upload" name="btn_upload">Aceptar</button>
                                <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
                </div>
            </div>
html;

        return $modal;
    }

    public function getAllColaboradoresAsignadosByName(){

        $html = "";
        foreach (GeneralDao::getAllColaboradoresByName() as $key => $value) {


            $value['apellidop'] = utf8_encode($value['apellidop']);
            $value['apellidom'] = utf8_encode($value['apellidom']);
            $value['nombre'] = utf8_encode($value['nombre']);

            // if (empty($value['img']) || $value['img'] == null) {
            //     $img_user = "/img/user.png";
            // } else {
            //     $img_user = "https://registro.foromusa.com/img/users_musa/{$value['img']}";
            // }

            $estatus = '';
            if ($value['activo'] == 1) {
                $estatus .= <<<html
                <span class="badge badge-success">Activo</span>
html;
            } else {
                $estatus .= <<<html
                <span class="badge badge-success">Inactivo</span>
html;
            }


            $html .= <<<html
            <tr>
                <td>
                    <div class="d-flex px-3 py-1">
                        
                        <div class="d-flex flex-column justify-content-center text-black">
                    
                            
                                <h6 class="mb-0 text-sm text-move text-black">
                                    <span class="fa fa-user-md" style="font-size: 13px"></span> {$value['nombre']} {$value['apellidop']} {$value['apellidom']}
                                    <hr>
                                    <span>{$value['email']}</span>
                                </h6>
                        </div>
                    </div>
                </td>
         
                <td style="text-align:left; vertical-align:middle;"> 
                    
                    <span>{$value['nombre_especialidad']}</span>

                </td>

                <td>
                     <button class="btn bg-gradient-primary mb-0 btn-icon-only" type="button" title="Editar Usuario" data-toggle="modal" data-target="#editar-usuario{$value['id_registrado']}"><i class="fa fa-edit" aria-hidden="true"></i></button>
                     <a href="/Usuarios/abrirpdfGafete/{$value['clave']}/{$value['ticket_virtual']}" class="btn mb-0 bg-pink btn-icon-only morado-musa-text" title="Imprimir Gafetes" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Imprimir Gafetes" target="_blank"><i class="fas fa-print"> </i></a>
                </td>
        </tr>
html;
        }

        return $html;
    }
}
