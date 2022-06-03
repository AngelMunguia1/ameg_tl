<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\models\Registro AS RegistroDao;
use mysqli;

class Registro{
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
            $('#confirm_email').attr("disabled", false);
            $.validator.addMethod("checkUserCorreo",function(value, element) {
              var response = false;
                $.ajax({
                    type:"POST",
                    async: false,
                    url: "/Register/isUserValidateUser",
                    data: {usuario: $("#usuario").val()},
                    success: function(data) {
                        if(data=="false"){
                            $('#btn_upload').attr("disabled", false);
                            $('#confirm_email').attr("disabled", false);
                            $('#usuario').attr("disabled", true);

                            response = true;
                        }else{
                            $('#btn_upload').attr("disabled", true);
                            $('#confirm_email').attr("disabled", true);
                            document.getElementById("usuario").value = "";
                        }
                    }
                });

                return response;
            },"<b>Usted ya se encuentra registrado en la plataforma verifique su información.<b>");

            $("#usuario").on("keyup",function(){
                console.log($(this).val());
                var usuario = $(this).val();
                $.ajax({
                    url: "/Registro/isUserValidateUser",
                    type: "POST",
                    data: {usuario},                 
                    beforeSend: function() {
                        console.log("Procesando....");
                    },
                    success: function(respuesta) {
                        console.log(respuesta);
                        if(respuesta == 'true'){
                            $("#texto_obligatorio_email").text("Este correo electrónico ya existe");
                        }
                        else{
                            $("#texto_obligatorio_email").text("");
                        }
                    },
                    error: function(respuesta) {
                        console.log(respuesta);
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
        View::render("registro_all");
    }

    public function codeRecoveryPass($email, $alerta = null)
    {
        $extraHeader = <<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/aso_icon.png">
        <link rel="icon" type="image/vnd.microsoft.icon" href="../../../assets/img/aso_icon.png">
        <title>
            Registro Conave
        </title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link rel="stylesheet" href="/css/alertify/alertify.core.css" />
        <link rel="stylesheet" href="/css/alertify/alertify.default.css" id="toggleCSS" />
        
        
        
        

html;
        $extraFooter = <<<html
     
        <script src="/js/jquery.min.js"></script>
        <script src="/js/validate/jquery.validate.js"></script>
        <script src="/js/alertify/alertify.min.js"></script>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
       <!--   Core JS Files   -->
          <script src="../../../assets/js/core/popper.min.js"></script>
          <script src="../../../assets/js/core/bootstrap.min.js"></script>
          <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
          <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
          <script src="../../../assets/js/plugins/multistep-form.js"></script>
         
          <!-- Kanban scripts -->
          <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
          <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
          <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
              var options = {
                damping: '0.5'
              }
              Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
          </script>
          <!-- Github buttons -->
          <script async defer src="https://buttons.github.io/buttons.js"></script>
          <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
          <script>
            $(document).ready(function(){
                $.validator.addMethod("checkUserCorreo",function(value, element) {
                  var response = false;
                    $.ajax({
                        type:"POST",
                        async: false,
                        url: "/Register/isUserValidate",
                        data: {email: $("#email").val()},
                        success: function(data) {
                            if(data=="true"){
                                $('#btn_registro_email').attr("disabled", false);
                                $('#confirm_email').attr("disabled", false);
                                $('#email').attr("disabled", true);
                                response = true;
                            }else{
                                $('#btn_registro_email').attr("disabled", true);
                                $('#confirm_email').attr("disabled", true);
                                document.getElementById("confirm_email").value = "";
                            }
                        }
                    });

                    return response;
                },"Usted no está registrado en la Base de Datos CONAVE 2022, verifique con su área y reintente.");

                $("#email_form").validate({
                   rules:{
                        email:{
                            required: true,
                            checkUserCorreo: true
                        },
                        confirm_email:{
                            required: true,
                            equalTo:"#email"
                        }
                    },
                    messages:{
                        email:{
                            required: "Este campo es requerido",
                        },
                        confirm_email:{
                            required: "Este campo es requerido",
                            equalTo: "El Correo Eléctronico no coincide",
                        }
                    }
                });

            });
          
            var uno = document.getElementById("uno"),
                dos = document.getElementById("dos"),
                tres = document.getElementById("tres"),
                cuatro = document.getElementById("cuatro");

            uno.onkeyup = function() {
                if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                    dos.focus();
                }
            }

            dos.onkeyup = function() {
                if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                    tres.focus();
                }
            }
            tres.onkeyup = function() {
                if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                    cuatro.focus();
                }
            }
           
        </script>

        <script>
        $(document).ready(function(){
            $('#confirm_email').attr("disabled", false);
            $.validator.addMethod("checkUserCorreo",function(value, element) {
              var response = false;
                $.ajax({
                    type:"POST",
                    async: false,
                    url: "/Register/isUserValidateUser",
                    data: {usuario: $("#usuario").val()},
                    success: function(data) {
                        if(data=="false"){
                            $('#btn_upload').attr("disabled", false);
                            $('#confirm_email').attr("disabled", false);
                            $('#usuario').attr("disabled", true);

                            response = true;
                        }else{
                            $('#btn_upload').attr("disabled", true);
                            $('#confirm_email').attr("disabled", true);
                            document.getElementById("usuario").value = "";
                        }
                    }
                });

                return response;
            },"<b>Usted ya se encuentra registrado en la plataforma verifique su información.<b>");

            $("#usuario").on("keyup",function(){
                console.log($(this).val());
                var usuario = $(this).val();
                $.ajax({
                    url: "/Registro/isUserValidateUser",
                    type: "POST",
                    data: {usuario},                 
                    beforeSend: function() {
                        console.log("Procesando....");
                    },
                    success: function(respuesta) {
                        console.log(respuesta);
                        if(respuesta == 'true'){
                            $("#texto_obligatorio_email").text("Este correo electrónico ya existe");
                            $('#btn_upload').setAttribute('disabled', 'disabled');
                        }
                        else{
                            $("#texto_obligatorio_email").text("");
                            $('#btn_upload').removeAttribute('disabled');
                        }
                    },
                    error: function(respuesta) {
                        console.log(respuesta);
                    }
                });
            });

        });
        </script>
      
html;


        $code = $email;
        View::set('header', $extraHeader);
        View::set('footer', $extraFooter);
        View::set('code', $code);
        View::set('alerta', $alerta);
        View::render("codeVerifyPass");
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
                <option value="2545">Ciudad de México</option>
                <option value="2546">Durango</option>
                <option value="2547">Guanajuato</option>
                <option value="2548">Guerrero</option>
                <option value="2549">Hidalgo</option>
                <option value="2550">Jalisco</option>
                <option value="2551">Estado de México</option>
                <option value="2552">Michoacan de Ocampo</option>
                <option value="2553">Morelos</option>
                <option value="2554">Nayarit</option>
                <option value="2555">Nuevo León</option>
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
                <option value="2566">Yucatán</option>
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
        $data->_titulo_id = MasterDom::getData('titulo_id');
        $data->_rol_id = MasterDom::getData('rol_id');
        $data->_cedpro = MasterDom::getData('cedpro');
        $data->_cedulaesp = MasterDom::getData('cedulaesp');
        $data->_calle = MasterDom::getData('calle');
        $data->_numext = MasterDom::getData('numext');
        $data->_numint = MasterDom::getData('numint');
        $data->_colonia = MasterDom::getData('colonia');
        $data->_delomun = MasterDom::getData('delomun');
        $data->_estado_id = MasterDom::getData('estado_id');
        $data->_pais_id = MasterDom::getData('pais_id');
        $data->_cp = MasterDom::getData('cp');
        $data->_telefono = MasterDom::getData('telefono');
        $data->_celular = MasterDom::getData('celular');
        $data->_p_lugar_nacimiento = MasterDom::getData('p_lugar_nacimiento');
        $data->_p_fecha_nacimiento = MasterDom::getData('p_fecha_nacimiento');
        $data->_p_edad = MasterDom::getData('p_edad');
        $data->_p_sexo = MasterDom::getData('p_sexo');
        $data->_p_domicilio_particular = MasterDom::getData('p_domicilio_particular');
        $data->_p_especialidad = MasterDom::getData('p_especialidad');
        $data->_p_cedula = MasterDom::getData('p_cedula');
        $data->_t_institucion = MasterDom::getData('t_institucion');
        $data->_t_cargo = MasterDom::getData('t_cargo');
        $data->_t_direccion_institucion = MasterDom::getData('t_direccion_institucion');
        $data->_t_telefono = MasterDom::getData('t_telefono');
        $data->_t_extension = MasterDom::getData('t_extension');
        $data->_t_ciudad = MasterDom::getData('t_ciudad');
        $data->_t_estado = MasterDom::getData('t_estado');
        $data->_t_cp = MasterDom::getData('t_cp');
        $data->_telinstitucion = MasterDom::getData('telinstitucion');
        $data->_e_facultad = MasterDom::getData('e_facultad');
        $data->_e_fecha_inicial = MasterDom::getData('e_fecha_inicial');
        $data->_e_fecha_fin = MasterDom::getData('e_fecha_fin');
        $data->_e_fecha_examen = MasterDom::getData('e_fecha_examen');
        $data->_e_hospital = MasterDom::getData('e_hospital');
        $data->_e_fecha_inicial_hospital = MasterDom::getData('e_fecha_inicial_hospital');
        $data->_e_fecha_fin_hospital = MasterDom::getData('e_fecha_fin_hospital');
        $data->_e_residencia = MasterDom::getData('e_residencia');
        $data->_e_fecha_inicial_residencia = MasterDom::getData('e_fecha_inicial_residencia');
        $data->_e_fecha_fin_residencia = MasterDom::getData('e_fecha_fin_residencia');
        $data->_e_posgrado = MasterDom::getData('e_posgrado');
        $data->_e_fecha_inicial_posgrado = MasterDom::getData('e_fecha_inicial_posgrado');
        $data->_e_fecha_fin_posgrado = MasterDom::getData('e_fecha_fin_posgrado');
        $data->_inf_institucion = MasterDom::getData('inf_institucion');
        $data->_fecha_ingreso = MasterDom::getData('fecha_ingreso');
        $data->_es_socio = MasterDom::getData('es_socio');
        $data->_fecha_ingreso_ameg = MasterDom::getData('fecha_ingreso_ameg');


        $id = RegistroDao::insert($data);
        if($id >= 1){
          // $this->alerta($id,'add');
          echo '<script>
            alert("Usuario registrado con éxito");
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

      public function isUserValidateUser(){
        echo (count(RegistroDao::getUser($_POST['usuario']))>=1)? 'true' : 'false';
    }

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

    public function code500()
    {
        View::render("500");
    }

    function generateRandomString($length = 10) { 
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    } 

    public function verifyCodePass()
    {
        $register = new \stdClass();

        $email = $_POST['email'];

        $register->_email = $email;

        $codigo_rand = $this->generateRandomString();
        $register->_code = $codigo_rand;

        $id = RegistroDao::update($register);
        if ($id >= 1) {
            $msg = [
                'email' => $register->_email,
                'code' =>  $register->_code
            ];

            $mailer = new Mailer();
            $mailer->mailerRecoveryPass($msg);

            $this->codeRecoveryPass($register->_email);
        } else {
            // echo "holaaaaa";
            // exit();
            $this->code500();
            //$this->Success();
            //$this->alerta($id,'error',$method_pay, $name_register);
        }
    }
}

class respuesta {
    public $success;
    public $html;
}
