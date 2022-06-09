<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \Core\Controller;
use \App\interfaces\Crud;
use \App\models\RegistroTrabajo AS RegistroDao;

class RegistroTrabajo extends Controller{
    private $_contenedor;

    public function getUsuario()
    {
        return $this->__usuario;
    }

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
            <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
            <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
            <script src="../../assets/js/soft-ui-dashboard.js?v=1.0.5"></script>
            <script src="/assets/js/soft-ui-dashboard.js?v=1.0.5"></script>
            <script src="/js/jquery.min.js"></script>
            
            
            <!-- LIBRERIAS SWAL MODAL IFRAME -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
              
            <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" defer></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />
            
            <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" defer></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script charset="UTF-8" src="//web.webpushs.com/js/push/9d0c1476424f10b1c5e277f542d790b8_1.js" async></script>
      

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

        $id_user = RegistroDao::getUserByEmail($this->getUsuario())[0]['id_usuario'];
        $categoriasUser = RegistroDao::getCategoriasByUser($id_user);
        $es_ingreso = '';

        foreach($categoriasUser as $key => $value){
            if($value['categoria'] == 'Ingreso'){                
                $es_ingreso = 1;
            }
        }
        $permiso_form = $es_ingreso == 1 ? "style=\"display:none;\"" : "";

            

        $selectCategoria = '';
        foreach(RegistroDao::getCategorias() as $key => $value){
            // $selectedPais = ($value['id_pais'] == $userData['id_nationality']) ? 'selected' : '';  
            $selectCategoria .= <<<html
                    <option value="{$value['id']}">{$value['categoria']}</option>
html;
        }

        $selectEspecialidad = '';

        foreach(RegistroDao::getEspecialidades() as $key => $value){
            // $selectedPais = ($value['id_pais'] == $userData['id_nationality']) ? 'selected' : '';  
            $selectEspecialidad .= <<<html
                    <option value="{$value['id']}">{$value['especialidad']}</option>
html;
        }



        $trabajos_libres = '';
        $card_trabajos_libres = '';
        $trabajos_libres =  RegistroDao::getTableTrabajosLibres($_SESSION['id_trabajo_libre']);

        foreach ($trabajos_libres as $key => $value) {

        $card_trabajos_libres .= <<<html
            
            <div class="col-sm-4 text-center " >
                <div class="card card-body card-course p-1 ameg-shadow-box-btn iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">
                <img class="caratula-trabajo-img border-radius-15" src="/trabajos_files/img/caratula_word.jpg">
                        <div class="mt-2 color-black font-5 text-bold font-weight-bold" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}"><p class="font-14 font-weight-bold"><b> {$value['titulo_corto']}</b></p>
                        </div>
                        <div class="color-black font-14"><p>{$value['titulo_es']}</p></div>
                        <div class="color-vine font-12"><p>{$value['autor']}</p></div>
                        <!--<span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>-->
                </div>
            </div>
html;
        }


        $trabajos_libres_o = '';
        $card_trabajos_libres_o = '';
        $muestra_o = '';
        $trabajos_libres_o =  RegistroDao::getTableTrabajosLibresOral($_SESSION['id_trabajo_libre']);
        //echo("total registros o".count($trabajos_libres_o));

        $total_registros_o = count($trabajos_libres_o);

        if($total_registros_o == 0){                
            $muestra_o = 1;
        }
        $mostrar_trabajo_o = $muestra_o == 1 ? "style=\"display:none;\"" : "";

        foreach ($trabajos_libres_o as $key => $value) {

        $card_trabajos_libres_o .= <<<html
            
            <div class="col-sm-4 text-center " >
                <div class="card card-body card-course p-0 ameg-shadow-box-btn iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">
                <img class="caratula-trabajo-img border-radius-15" src="/trabajos_files/img/caratula_word.jpg">
                        <div class="mt-2 color-black font-5 text-bold font-weight-bold" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}"><p class="font-14 font-weight-bold"><b> {$value['titulo_corto']}</b></p>
                        </div>
                        <div class="color-black font-14"><p>{$value['titulo_es']}</p></div>
                        <div class="color-vine font-12"><p>{$value['autor']}</p></div>
                        <!--<span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>-->
                </div>
            </div>
html;
        }

        $trabajos_libres_c = '';
        $card_trabajos_libres_c = '';
        $muestra_c = '';
        $trabajos_libres_c =  RegistroDao::getTableTrabajosLibresCartel($_SESSION['id_trabajo_libre']);
        //echo("total registros c".count($trabajos_libres_c));

        $total_registros_c = count($trabajos_libres_c);

        if($total_registros_c == 0){                
            $muestra_c = 1;
        }
        $mostrar_trabajo_c = $muestra_c == 1 ? "style=\"display:none;\"" : "";

        foreach ($trabajos_libres_c as $key => $value) {

        $card_trabajos_libres_c .= <<<html
            
            <div class="col-sm-4 text-center " >
                <div class="card card-body card-course p-0 ameg-shadow-box-btn iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto']}">
                <img class="caratula-trabajo-img border-radius-15" src="/trabajos_files/img/caratula_word.jpg">
                        <div class="mt-2 color-black font-5 text-bold font-weight-bold" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto']}"><p class="font-14 font-weight-bold"><b> {$value['titulo_corto']}</b></p>
                        </div>
                        <div class="color-black font-14"><p>{$value['titulo_es']}</p></div>
                        <div class="color-vine font-12"><p>{$value['autor']}</p></div>
                        <!--<span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>-->
                </div>
            </div>
html;
        }

        $trabajos_libres_v = '';
        $card_trabajos_libres_v = '';
        $muestra_v = '';
        $trabajos_libres_v =  RegistroDao::getTableTrabajosLibresVideo($_SESSION['id_trabajo_libre']);
        //echo("total registros v".count($trabajos_libres_v));

        $total_registros_v = count($trabajos_libres_v);

        if($total_registros_v == 0){                
            $muestra_v = 1;
        }
        $mostrar_trabajo_v = $muestra_v == 1 ? "style=\"display:none;\"" : "";

        foreach ($trabajos_libres_v as $key => $value) {

        $card_trabajos_libres_v .= <<<html
            
            <div class="col-sm-4 text-center " >
                <div class="card card-body card-course p-0 ameg-shadow-box-btn iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto']}">
                <img class="caratula-trabajo-img border-radius-15" src="/trabajos_files/img/caratula_word.jpg">
                        <div class="mt-2 color-black font-5 text-bold font-weight-bold" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto']}"><p class="font-14 font-weight-bold"><b> {$value['titulo_corto']}</b></p>
                        </div>
                        <div class="color-black font-14"><p>{$value['titulo_es']}</p></div>
                        <div class="color-vine font-12"><p>{$value['autor']}</p></div>
                        <!--<span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>-->
                </div>
            </div>
html;
        }

        $trabajos_libres_i = '';
        $card_trabajos_libres_i = '';
        $muestra_i = '';
        $trabajos_libres_i =  RegistroDao::getTableTrabajosLibresIngreso($_SESSION['id_trabajo_libre']);
        //echo("total registros i".count($trabajos_libres_i));

        $total_registros_i = count($trabajos_libres_i);

        if($total_registros_i == 0){                
            $muestra_i = 1;
        }
        $mostrar_trabajo_i = $muestra_i == 1 ? "style=\"display:none;\"" : "";

        foreach ($trabajos_libres_i as $key => $value) {

        $card_trabajos_libres_i .= <<<html
            
            <div class="col-sm-4 text-center " >
                <div class="card card-body card-course p-0 ameg-shadow-box-btn iframe" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}">
                <img class="caratula-trabajo-img border-radius-15" src="/trabajos_files/img/caratula_word.jpg">
                        <div class="mt-2 color-black font-5 text-bold font-weight-bold" data-toggle="modal" data-target="#pdf" data-pdf="{$value['adjunto_extenso']}"><p class="font-14 font-weight-bold"><b> {$value['titulo_corto']}</b></p>
                        </div>
                        <div class="color-black font-14"><p>{$value['titulo_es']}</p></div>
                        <div class="color-vine font-12"><p>{$value['autor']}</p></div>
                        <!--<span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>-->
                </div>
            </div>
html;
        }

        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::set('selectCategoria',$selectCategoria);
        View::set('selectEspecialidad',$selectEspecialidad);
        View::set('permiso_form',$permiso_form);
        View::set('mostrar_trabajo_o',$mostrar_trabajo_o);
        View::set('mostrar_trabajo_c',$mostrar_trabajo_c);
        View::set('mostrar_trabajo_v',$mostrar_trabajo_v);
        View::set('mostrar_trabajo_i',$mostrar_trabajo_i);
        View::set('card_trabajos_libres',$card_trabajos_libres);
        View::set('card_trabajos_libres_o',$card_trabajos_libres_o);
        View::set('card_trabajos_libres_c',$card_trabajos_libres_c);
        View::set('card_trabajos_libres_v',$card_trabajos_libres_v);
        View::set('card_trabajos_libres_i',$card_trabajos_libres_i);
        View::render("registro_trabajo_all_2");
    }

    public function registroAdd() {

        $data = new \stdClass();
        $data->_usuario = MasterDom::getData('usuario');
        $data->_contrasena = MasterDom::getData('contrasena');
        $data->_nombre = MasterDom::getData('nombre');
        $data->_apellidop = MasterDom::getData('apellidop');
        $data->_apellidom = MasterDom::getData('apellidom');
        $data->_cedula_profesional = MasterDom::getData('cedula_profesional');
        $data->_cedula_especialista = MasterDom::getData('cedula_especialista');
    
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

    public function trabajosAdd() {

        $data = new \stdClass();

        //Validar Archivo extenso
        // if(isset($_FILES["adjunto_extenso"])){
        //     $file_adjunto_extenso = $_FILES["adjunto_extenso"];
        //     $pdf_2 = $this->generateRandomString();
        //     $data->_adjunto_extenso = $pdf_2.'.pdf';
        // }else{
        //     $pdf_2 = '';
        //     $data->_adjunto_extenso ='';
        // }

        //Validar Url
        // if(isset($_POST["url_video"])){            
        //     $data->_url_video = $_POST["url_video"];
        // }else{            
        //     $data->_url_video ='';
        // }

  

      

        $file_adjunto = $_FILES["adjunto"];        
        $word_1 = $this->generateRandomString();

        $file_adjunto_extenso = $_FILES["adjunto_extenso"];        
        $word_2 = $this->generateRandomString();

        $file_ing_solicitud_ingreso = $_FILES["ing_solicitud_ingreso"];        
        $pdf_3 = $this->generateRandomString();

        $file_ing_carta_rec_uno = $_FILES["ing_carta_rec_uno"];        
        $pdf_4 = $this->generateRandomString();

        $file_ing_carta_rec_dos = $_FILES["ing_carta_rec_dos"];        
        $pdf_5 = $this->generateRandomString();

        $file_ing_carta_prof = $_FILES["ing_carta_prof"];        
        $pdf_6 = $this->generateRandomString();

        $file_ing_acta_naci = $_FILES["ing_acta_naci"];        
        $pdf_7 = $this->generateRandomString();

        $file_ing_titulo_prof = $_FILES["ing_titulo_prof"];        
        $pdf_8 = $this->generateRandomString();

        $file_ing_cedula_prof = $_FILES["ing_cedula_prof"];        
        $pdf_9 = $this->generateRandomString();
        
        $file_ing_constancia = $_FILES["ing_constancia"];        
        $pdf_10 = $this->generateRandomString();

        $file_ing_comprobante_pago = $_FILES["ing_comprobante_pago"];        
        $pdf_11 = $this->generateRandomString();
        

        // var_dump($file_adjunto);
        // exit;

       
        $data->_categoria_id = MasterDom::getData('categoria_id');
        $data->_especialidad_id = MasterDom::getData('especialidad_id');
        $data->_usuario_id = MasterDom::getData('usuario_id');
        $data->_titulo_corto = MasterDom::getData('titulo_corto');
        $data->_titulo_en = MasterDom::getData('titulo_en');
        $data->_titulo_es = MasterDom::getData('titulo_es');


      


        $data->_adjunto = 'adj_'.$word_1.'.docx'; 
        $data->_adjunto_extenso = 'adj_ext_'.$word_2.'.docx'; 
        $data->_resumen = MasterDom::getData('resumen');
        $data->_coautores = MasterDom::getData('coautores');
        $data->_autor = MasterDom::getData('autor');
        $data->_postulatrabajo = MasterDom::getData('postulatrabajo');
        // $data->_revisiontrabajo = MasterDom::getData('revisiontrabajo');
        $data->_envio_revista = MasterDom::getData('envio_revista');


        $data->_ing_solicitud_ingreso = $pdf_3.'.pdf';
        $data->_ing_carta_rec_uno = $pdf_4.'.pdf'; 
        $data->_ing_carta_rec_dos = $pdf_5.'.pdf';
        $data->_ing_carta_prof = $pdf_6.'.pdf';
        $data->_ing_acta_naci = $pdf_7.'.pdf';
        $data->_ing_titulo_prof = $pdf_8.'.pdf'; 
        $data->_ing_cedula_prof = $pdf_9.'.pdf'; 
        $data->_ing_constancia = $pdf_10.'.pdf'; 
        $data->_ing_comprobante_pago = $pdf_11.'.pdf';    
        // $data->_envio_revista = MasterDom::getData('ing_solicitud_ingreso');
        // $data->_envio_revista = MasterDom::getData('ing_carta_rec_uno');
        // $data->_envio_revista = MasterDom::getData('ing_carta_rec_dos');
        // $data->_envio_revista = MasterDom::getData('ing_carta_prof');
        // $data->_envio_revista = MasterDom::getData('ing_acta_naci');
        // $data->_envio_revista = MasterDom::getData('ing_titulo_prof');
        // $data->_envio_revista = MasterDom::getData('ing_cedula_prof');
        // $data->_envio_revista = MasterDom::getData('ing_constancia');
        // $data->_envio_revista = MasterDom::getData('ing_comprobante_pago');


        // var_dump($data);
        // exit();
        move_uploaded_file($file_adjunto["tmp_name"], "file_adjunto_extenso/".'adj_'.$word_1.'.docx');
        move_uploaded_file($file_adjunto_extenso["tmp_name"], "file_adjunto_extenso/".'adj_ext_'.$word_2.'.docx');

        

        move_uploaded_file($file_ing_solicitud_ingreso["tmp_name"], "file_ing_solicitud_ingreso/".$pdf_3.'.pdf');
        move_uploaded_file($file_ing_carta_rec_uno["tmp_name"], "file_ing_carta_rec_uno/".$pdf_4.'.pdf');
        move_uploaded_file($file_ing_carta_rec_dos["tmp_name"], "file_ing_carta_rec_dos/".$pdf_5.'.pdf');
        move_uploaded_file($file_ing_carta_prof["tmp_name"], "file_ing_carta_prof/".$pdf_6.'.pdf');
        move_uploaded_file($file_ing_acta_naci["tmp_name"], "file_ing_acta_naci/".$pdf_7.'.pdf');
        move_uploaded_file($file_ing_titulo_prof["tmp_name"], "file_ing_titulo_prof/".$pdf_8.'.pdf');
        move_uploaded_file($file_ing_cedula_prof["tmp_name"], "file_ing_cedula_prof/".$pdf_9.'.pdf');
        move_uploaded_file($file_ing_constancia["tmp_name"], "file_ing_constancia/".$pdf_10.'.pdf');
        move_uploaded_file($file_ing_comprobante_pago["tmp_name"], "file_ing_comprobante_pago/".$pdf_11.'.pdf');


                $id = RegistroDao::insert($data);
                if($id >= 1){
                //   $this->alerta($id,'add');
                echo '<script>
                    alert("Trabajo registrado con éxito");
                window.location.href = "/RegistroTrabajo/";
                </script>';
        
                // echo "success";
        
                }else{
                // $this->alerta($id,'error');
                echo '<script>
                alert("Error al registrar El trabajo, consulte a soporte");
                window.location.href = "/RegistroTrabajo/";
                </script>';
                // echo "fail";
                }
  
    }

    function generateRandomString($length = 10) { 
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    } 

}
