<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\models\Registro AS RegistroDao;

class Recupera{
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
								<p>GRUPO LAHE. ?? 2022. All Rights Reserved</p>
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
                                alertify.alert("Error de autenticaci??n <br> El usuario o contrase??a es incorrecta");
                            }
                            }else{
                                alertify.alert("Error de autenticaci??n <br> El usuario o contrase??a es incorrecta");
                            }
                        }
                    });
                });

            });
        </script>
html;
        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::set('idCountry',$this->getPais());
        View::set('idEspecialidad',$this->getEspecialidades());
        View::set('idInstitucion',$this->getInstituciones());
        View::render("recupera_contra_all");
    }

    public function ObtenerEstado(){
        $pais = $_POST['pais'];
        if($pais != 156)
        {
            $estados = RegistroDao::getState($pais);
            $html="";
            foreach ($estados as $estado){
                $html.='<option value="'.$estado['id_estado'].'">'.$estado['estado'].'</option>';
            }
        }
        else
        {
            $html="";
            $html.='
                <option value="" disabled selected>Selecciona un Estado</option>
                <option value="2537">Aguascalientes</option>
                <option value="2538">Baja California</option>
                <option value="2539">Baja California Sur</option>
                <option value="2540">Campeche</option>
                <option value="2541">Chiapas</option>
                <option value="2542">Chihuahua</option>
                <option value="2543">Coahuila de Zaragoza</option>
                <option value="2544">Colima</option>
                <option value="2545">Ciudad de M??xico</option>
                <option value="2546">Durango</option>
                <option value="2547">Guanajuato</option>
                <option value="2548">Guerrero</option>
                <option value="2549">Hidalgo</option>
                <option value="2550">Jalisco</option>
                <option value="2551">Estado de M??xico</option>
                <option value="2552">Michoacan de Ocampo</option>
                <option value="2553">Morelos</option>
                <option value="2554">Nayarit</option>
                <option value="2555">Nuevo Le??n</option>
                <option value="2556">Oaxaca</option>
                <option value="2557">Puebla</option>
                <option value="2558">Queretaro de Artiaga</option>
                <option value="2559">Quinta Roo</option>
                <option value="2560">San Lusi Potosi</option>
                <option value="2561">Sonora</option>
                <option value="2562">Tabasco</option>
                <option value="2563">Tamaulipas</option>
                <option value="2564">Tlaxcala</option>
                <option value="2565">Veracruz-Llave</option>
                <option value="2566">Yucat??n</option>
                <option value="2567">Zacatecas</option>
                ';
        }


        $respuesta = new respuesta();
        $respuesta->success = true;
        $respuesta->html = $html;

        echo json_encode($respuesta);
    }

    public function registroAdd() {

        $data = new \stdClass();
        $data->_usuario = MasterDom::getData('usuario');
        $data->_contrasena = MasterDom::getData('contrasena');
        $data->_nombre = MasterDom::getData('nombre');
        $data->_apellidop = MasterDom::getData('apellidop');
        $data->_apellidom = MasterDom::getData('apellidom');
        $data->_cedula_profesional = MasterDom::getData('p_cedula');
        $data->_cedula_especialista = MasterDom::getData('p_cedula');
    
        $id = RegistroDao::insert($data);
        if($id >= 1){
          // $this->alerta($id,'add');
          echo '<script>
            alert("Usuario registrado con ??xito");
            window.location.href = "/Login/";
          </script>';
  
         
        }else{
          // $this->alerta($id,'error');
          echo '<script>
          alert("Error al registrar usuario, consulte a soporte");
          window.location.href = "/Inicio/";
        </script>';
        }
  
  
      }

    // public function isUserValidate(){
    //     echo (count(PrincipalDao::getUser($_POST['usuario']))>=1)? 'true' : 'false';
    // }

    // public function verificarUsuario(){
    //     $usuario = new \stdClass();
    //     $usuario->_usuario = MasterDom::getData("usuario");
    //     $usuario->_password = MD5(MasterDom::getData("password"));
    //     $user = PrincipalDao::getById($usuario);
    //     if (count($user)>=1) {
    //         $user['nombre'] = utf8_encode($user['nombre']);
    //         echo json_encode($user);
    //     }
    // }

    // public function crearSession(){
    //     $usuario = new \stdClass();
    //     $usuario->_usuario = MasterDom::getData("usuario");
    //     $user = PrincipalDao::getById($usuario);
    //     session_start();
    //     $_SESSION['usuario'] = $user['usuario'];
    //     $_SESSION['nombre'] = $user['nombre'];
    //     header("location: /Home/");
    // }

    // public function cerrarSession(){
    //     unset($_SESSION);
    //     session_unset();
    //     session_destroy();
    //     header("Location: /Login/");
    // }

    public function getPais(){
        $country = '';
        $pais = '';
        foreach (RegistroDao::getCountryAll() as $key => $value) {

            $country.=<<<html
        <option value="{$value['id_pais']}">{$value['pais']}</option>
html;
        }
        return $country;
    }

    public function getEspecialidades(){
        $especialidad = '';
        $pais = '';
        foreach (RegistroDao::getEspecialidad() as $key => $value) {

            $especialidad.=<<<html
        <option value="{$value['id']}">{$value['especialidad']}</option>
html;
        }
        return $especialidad;
    }

    public function getInstituciones(){
        $institucion = '';

        foreach (RegistroDao::getInstitucion() as $key => $value) {

            $institucion.=<<<html
        <option value="{$value['id']}">{$value['institucion']}</option>
html;
        }
        return $institucion;
    }



}

class respuesta {
    public $success;
    public $html;
}
