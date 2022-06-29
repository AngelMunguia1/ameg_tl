<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Home AS HomeDao;
use \App\models\General as GeneralDao;
use \App\models\Registro as RegistroDao;
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

    $modalEdit = '';
    foreach (GeneralDao::getAllTrabajosByName() as $key => $value) {
        $modalEdit .= $this->generarModalEditUser($value);
    }

    $trabajos_libres = '';
    $tabla = '';
    $trabajos_libres =  GeneralDao::getAllTrabajosByName($_SESSION['id']);
    //echo("total registros i".count($trabajos_libres_i));

    foreach ($trabajos_libres as $key => $value) {

    $tabla.= <<<html
            <tr>
                <td style="text-align:left; vertical-align:middle;"> 
                        
                    <span>{$value['id_trabajo']}</span>

                </td>

                <td style="text-align:left; vertical-align:middle;"> 
                        
                    <span>{$value['usuario_id']}</span>

                </td>

                <td style="text-align:left; vertical-align:middle;"> 
                        
                    <span>{$value['status']}</span>

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
                        <span>{$value['concursa']}</span> 
                </td>

                <td style="text-align:left; vertical-align:middle;">
                    <div data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto']}">         
                        <a  class="btn btn-primary w-100 d-flex justify-content-center iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto']}">
                            <span>Abrir resumen
                            </span>
                        </a>
                    </div>
            
                    <div>
                        <a href="/file_adjunto_extenso/{$value['adjunto']}" 
                            class="btn btn-danger w-100 d-flex justify-content-center" id="formato_solicitud" name="formato_solicitud">
                            <span>Descargar
                            </span>
                        </a>
                    </div>
                </td>

                <td style="text-align:left; vertical-align:middle;">
                    <div data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">        
                        <a  class="btn btn-primary w-100 d-flex justify-content-center iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">
                            <span>Abrir extenso
                            </span>
                        </a>
                    </div>
                    
                    <div>
                        <a href="/file_adjunto_extenso/{$value['adjunto_extenso']}" 
                            class="btn btn-danger w-100 d-flex justify-content-center" id="formato_solicitud" name="formato_solicitud">
                            <span>Descargar
                            </span>
                        </a>
                    </div>
                </td>

                <td style="text-align:left; vertical-align:middle;">
                     <button class="btn btn-primary w-80 justify-content-center" type="button" title="Editar Usuario" data-toggle="modal" data-target="#editar-usuario{$value['id_trabajo']}">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                     </button>
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
        View::set('modalEdit',$modalEdit);
        View::set('tabla',$tabla);
        View::render("trabajos_all");
    }

    public function generarModalEditUser($datos){
        $modal = <<<html
            <div class="modal fade" id="editar-usuario{$datos['id_trabajo']}" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Editar Trabajo
                    </h5>

                    <span type="button" class="btn bg-gradient-danger" data-dismiss="modal" aria-label="Close">
                        X
                    </span>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px">A continuación ingrese los del trabajo seleccionado.</p>
                    <hr>
                    <form method="POST" enctype="multipart/form-data" class="form_datos_edit">
                        <div class="form-group row">

                             <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="id_trabajo">Id Trabajo <span class="required">*</span></label>
                                <input type="email" class="form-control" id="id_trabajo" name="id_trabajo" placeholder="ID Trabajo" value="{$datos['id_trabajo']}" require readonly>
                                <span id="msg_email" style="font-size: 0.75rem; font-weight: 700;margin-bottom: 0.5rem;"></span>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="id_usuario">Id Usuario <span class="required">*</span></label>
                                <input type="email" class="form-control" id="id_usuario" name="id_usuario" placeholder="ID Usuario" value="{$datos['id_usuario']}" require readonly>
                                <span id="msg_email" style="font-size: 0.75rem; font-weight: 700;margin-bottom: 0.5rem;"></span>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="status_id">Status <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="status_id" id="status_id" required>
html;

        foreach(RegistroDao::getStatus() as $key => $value){
            $selectedStatus = ($value['id'] == $datos['status_id']) ? 'selected' : '';
            $modal .= <<<html
            <option value="{$value['id']}" $selectedStatus>{$value['status']}</option>
html;
        }
        $modal .= <<<html
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="titulo">Título <span class="required">*</span></label>
                                <input type="text" class="form-control" id="titulo_corto" name="titulo_corto" placeholder="Título" value="{$datos['titulo_corto']}" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="autor">Autor <span class="required">*</span></label>
                                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{$datos['autor']}" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="coautores">Coautor <span class="required">*</span></label> 
                                <input type="text" class="form-control" id="coautores" name="coautores" placeholder="Coautor" value="{$datos['coautores']}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="t_institucion">Institución <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="t_institucion" id="t_institucion" required>
html;

        foreach(RegistroDao::getInstitucion() as $key => $value){
            $selectedInsti = ($value['id'] == $datos['t_institucion']) ? 'selected' : '';
            $modal .= <<<html
            <option value="{$value['id']}" $selectedInsti>{$value['institucion']}</option>
html;
        }
        $modal .= <<<html
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="categoria_id">Categoría <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="categoria_id" id="categoria_id" required>
html;
        
        foreach(RegistroDao::getCategoria() as $key => $value){
            $selectedCate = ($value['id'] == $datos['categoria_id']) ? 'selected' : '';
            $modal .= <<<html
            <option value="{$value['id']}" $selectedCate>{$value['categoria']}</option>
html;
        }

        $modal .= <<<html

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="especialidad_id">Especialidad <span class="required">*</span></label>
                                <select class="multisteps-form__select form-control all_input_select" name="especialidad_id" id="especialidad_id" required>
html;
        
        foreach(RegistroDao::getEspecialidad() as $key => $value){
            $selectedEsp = ($value['id'] == $datos['especialidad_id']) ? 'selected' : '';
            $modal .= <<<html
            <option value="{$value['id']}" $selectedEsp>{$value['especialidad']}</option>
html;
        }

        $modal .= <<<html

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                            <label class="control-label col-md-12 col-sm-1 col-xs-12" for="postulatrabajo_id">Concursa <span class="required">*</span></label>
                            <select class="multisteps-form__select form-control all_input_select" name="postulatrabajo_id" id="postulatrabajo_id" required>
html;
    
    foreach(RegistroDao::getConcursa() as $key => $value){
        $selectedConcursa = ($value['id'] == $datos['postulatrabajo_id']) ? 'selected' : '';
        $modal .= <<<html
        <option value="{$value['id']}" $selectedConcursa>{$value['concursa']}</option>
html;
    }

    $modal .= <<<html

                            </select>
                        </div>

                            
                            <div class="modal-footer">
                                <button type="submit" class="btn-ameg-bg-success" id="btn_upload" name="btn_upload">Aceptar</button>
                                <button type="button" class="btn-ameg-bg-danger" data-dismiss="modal">Cancelar</button>
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

    public function updateData()
    {
        $data = new \stdClass();
        $data->_id_trabajo = MasterDom::getData('id_trabajo');
        $data->_id_usuario = MasterDom::getData('id_usuario');
        $data->_titulo_corto = MasterDom::getData('titulo_corto');
        $data->_autor = MasterDom::getData('autor');
        $data->_coautores = MasterDom::getData('coautores');
        $data->_t_institucion = MasterDom::getData('t_institucion');
        $data->_categoria = MasterDom::getData('categoria_id');
        $data->_especialidad = MasterDom::getData('especialidad_id');
        $data->_postulatrabajo = MasterDom::getData('postulatrabajo_id');
        $data->_status = MasterDom::getData('status_id');
        // $data->_utilerias_administrador_id = $_SESSION['utilerias_administradores_id'];

        // var_dump($data);

        $id = UsuariosDao::update($data);

        // var_dump($id);
        if ($id) {
            echo "success";
            // $this->alerta($id,'add');
            //header('Location: /PickUp');
        } else {
            echo "error";
            // header('Location: /PickUp');
            //var_dump($id);
        }
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