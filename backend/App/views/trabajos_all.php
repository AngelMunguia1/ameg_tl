<?php echo $header; ?>
<body> 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></script>
	<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"></script>
	<script src="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
	<script src="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css"></script>
		<div class="body">

			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 70}">
				<div class="header-body">
					<div class="header-container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo px-3">
									<a href="/Home/">
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
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/Home/">
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
													<a class="dropdown-item dropdown-toggle active" style="color:#70C7D2;" href="/RegistroTrabajo/">
														REGISTRO DE TRABAJOS
													</a>
											    </li>
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle active" style="color:#FFF; background-color:#70C7D2;" href="/Trabajos/">
														ADMIN TRABAJOS
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

			<div role="main" class="main" style="margin-left: 90px;">
				<!-- <div>
					<img src="/img/poster_ameg_h_1.png" 
					style="background-size: auto 100%;; 
					max-width: 100%; background-position: center; opacity: 90%;">
				</div>
				<br>
				<div class="">
					<h2 class="font-weight-bold text-center">
						Los trabajos que se presentar??n durante el congreso se dividen en 4 categor??as principales
					</h2>
					<br><br>
					<div class="container container-lg-custom align-content-center pb-lg-5 mb-lg-4">
						<div class="row align-items-center">
						<div class="col-lg-3">
								<a id="linkIngreso" href="/Instrucciones/?trabajo=trabajos_ingreso">
								<div class="icon-box-info text-center ameg-shadow-box-btn">
									<h2 class="font-weight-bold text-center text-color-dark text-3 mb-3">Trabajos de ingreso</h2>
									<img width="70" src="/vendor/iconos/mesa1.png"/>
								</div>
								</a>
							
						</div>
							<div class="col-lg-3">
									<a id="linkIngreso" href="/Instrucciones/?trabajo=trabajos_orales">
									<div class="icon-box-info text-center ameg-shadow-box-btn">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajo libre oral</h2>
										<img width="70" src="/vendor/iconos/mesa2.png"/>
									</div>
									</a>
								
							</div>
							<div class="col-lg-3">
									<a id="linkIngreso" href="/Instrucciones/?trabajo=cartel_digital">
									<div class="icon-box-info text-center ameg-shadow-box-btn">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos en cartel</h2>
										<img width="70" src="/vendor/iconos/mesa3.png"/>
									</div>
									</a>
								
							</div>
							<div class="col-lg-3">
									<a id="linkIngreso" href="/Instrucciones/?trabajo=trabajo_en_video">
									<div class="text-center ameg-shadow-box-btn">
										<h2 class="font-weight-bold text-center text-color-dark text-4 mb-3">Trabajos en video</h2>
										<img width="70" src="/vendor/iconos/mesa4.png"/>
									</div>
									</a>
								
							</div>
						</div>
					</div>
				</div>
				<section id="" class="bg-purple-fecha text-center">
					<div class="text-center">
						<div class="px-lg-2 pb-1 mb-3 text-center">
                            <br>
							<h3 class="text-center text-white text-ameg-size">A PARTIR DEL 01 DE JUNIO AL 30 DE JUNIO DE 2022</h3	>
						</div>
					</div>
				</section>
				
				<hr class="my-0"> -->
			<div class="sidenav leftmenu">
				<button class="dropdown-btn"  style="color: #FFF;">
					<i class="fa-solid fa-bars"></i> 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
					<a href="/Home/" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-home"></i>
					</a>
					<!-- <a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-paste"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-clipboard"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-list-ol"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-list-ol"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-list-ol"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-list-ol"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-users"></i>
					</a>
					<a href="#" style="margin: 8px; margin-bottom: 20px;">
						<i class="fas fa-users"></i>
					</a> -->
				</div>
			</div>	

        <!-- h-100 takes the full height
                of the container-->
        <div class="row h-100" style="color: white;">
            <div class="col" style="padding: 0;">
                <!-- Top navbar -->
                <nav class="navbar bg-dark">
                    <b class="navbar-brand" style="font-size: 18px;">Mis trabajos</b>
                </nav>
                <!--AQUI VA TODO EL CONTENIDO DE TABLAS-->
                                <div class="tab-pane fade show active height-350 border-radius-lg" style="position: inline-block;" id="Invitados" role="tabpanel" aria-labelledby="Invitados">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0 table table-striped table-bordered" id="myTable">
                                            <thead class="thead-light">
                                            <tr>

                                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9 ">ID Trabajo<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">ID Usuario<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Status<i class="fas fa-sort"></i></th>
                                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">T??tulo<i class="fas fa-sort"></i></th>
                                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Autores<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Coautores<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Hospital<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Categor??a<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Especialidad<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">??Concursa?<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Archivo de resumen<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Archivo extenso<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-center text-xxs font-weight-bolder opacity-9">Editar<i class="fas fa-sort"></i></th>
												<th class="text-uppercase text-xxs font-weight-bolder opacity-9">Solicitud de Ingreso</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">Carta recomendaci??n</th>
												<th class="text-uppercase text-xxs font-weight-bolder opacity-9">Segunda carta de recomendaci??n</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">Carta profesor</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">Acta de nacimiento</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">T??tulo profesor</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">C??dula profesor</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">Constancia</th>
                        <th class="text-uppercase text-xxs font-weight-bolder opacity-9">Comprobante de pago</th>
                                                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Imprimir</th> -->
                                            </tr>
                                            </thead>
                                            <tbody style="background-color: #FFF;">
                                            <?php echo $tabla;
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
				<!--AQUI VA TODO EL CONTENIDO DE TABLAS-->
            </div>
        </div>
	</div>

			<!-- Modal -->
<div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="pdfTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background: transparent;">
          <span aria-hidden="true" style="font-size: 25px;">&times;</span>
        </button>
      </div>
      <div class="modal-body cont-modal">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

  <!-- Modal video -->
<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="videoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Trabajo de video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background: transparent;">
          <span aria-hidden="true" style="font-size: 25px;">&times;</span>
        </button>
      </div>
      <div class="modal-body cont-modal-video">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php echo $modalEdit; ?>

<script>
    $(document).ready(function(){
        $('.iframe').on('click',function(){
            var pdf = $(this).attr('data-pdf');
            //alert(pdf);

            $('.cont-modal').html('<iframe src="https://docs.google.com/gview?url=https://trabajoslibresameg.com/file_adjunto_extenso/'+pdf+'&embedded=true" style="width:100%; height:700px;" frameborder="0" ></iframe>');
        })
    });
</script>
<script>
    $(document).ready(function(){
        $('.iframe').on('click',function(){
            var video = $(this).attr('data-video');
            //alert(pdf);

            $('.cont-modal-video').html('<iframe src="/assets/vid/'+video+'" style="width:100%; height:400px;" frameborder="0" ></iframe>');
        })
    });
</script>
<script>
	$(".form_datos_edit").on("submit",function(event){
            event.preventDefault();
            // var formData = new FormData(document.getElementById("form_datos_edit"));
            var formData = $(this).serialize();

            console.log(formData);

            // for (var value of formData.values()) {
            //     console.log(value);
            // }
            $.ajax({
                url: "/Trabajos/updateData",
                type: "POST",
                data: formData,
                // contentType: false,
                // processData: false,
                beforeSend: function() {
                    console.log("Procesando....");
                    // alert('Se est?? borrando');

                },
                success: function(respuesta) {
                    console.log(respuesta);

                    if(respuesta == 'success'){
                        Swal.fire("??Se actualizo el usuario correctamente!", "", "success").
                        then((value) => {
                            window.location.reload();
                        });
                    }else{
                        Swal.fire("??Hubo un error al actualizar el usuario!", "", "warning").
                        then((value) => {
                            window.location.reload();
                        });
                    }
                },
                error: function(respuesta) {
                    console.log(respuesta);
                    // alert('Error');
                    Swal.fire("??Hubo un error al crear el archivo!", "", "warning").
                    then((value) => {
                        window.location.reload();
                    });
                }
            });
        });

</script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<script>
        $(document).ready(function(){

          $('#myTable').DataTable({
            "drawCallback": function(settings) {
                $('.current').addClass("btn bg-gradient-pink text-white btn-rounded").removeClass("paginate_button");
                $('.paginate_button').addClass("btn").removeClass("paginate_button");
                $('.dataTables_length').addClass("m-4 d-inline-block");
                $('.dataTables_info').addClass("mx-4");
                $('.dataTables_filter').addClass("m-1 d-inline-block");
                $('input').addClass("form-rounded btn-ameg-bg");
                $('select').addClass("form-rounded btn-ameg-bg");
                $('.previous.disabled').addClass("btn-outline-info opacity-5 btn-rounded mx-2");
                $('.next.disabled').addClass("btn-outline-info opacity-5 btn-rounded mx-2");
                $('.previous').addClass("btn-outline-info btn-rounded mx-2");
                $('.next').addClass("btn-outline-info btn-rounded mx-2");
                $('a.btn').addClass("btn-rounded");
            },
            "language": {

                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros ",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ning??n dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "??ltimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }

            }
        });

          $("#muestra-cupones").tablesorter();
          var oTable = $('#muestra-cupones').DataTable({
                "columnDefs": [{
                    "orderable": false,
                    "targets": 0
                }],
                 "order": false
            });

            // Remove accented character from search input as well
            $('#muestra-cupones input[type=search]').keyup( function () {
                var table = $('#example').DataTable();
                table.search(
                    jQuery.fn.DataTable.ext.type.search.html(this.value)
                ).draw();
            });

            var checkAll = 0;
            $("#checkAll").click(function () {
              if(checkAll==0){
                $("input:checkbox").prop('checked', true);
                checkAll = 1;
              }else{
                $("input:checkbox").prop('checked', false);
                checkAll = 0;
              }

            });

            $("#export_pdf").click(function(){
              $('#all').attr('action', '/Empresa/generarPDF/');
              $('#all').attr('target', '_blank');
              $("#all").submit();
            });

            $("#export_excel").click(function(){
              $('#all').attr('action', '/Empresa/generarExcel/');
              $('#all').attr('target', '_blank');
              $("#all").submit();
            });

            $("#delete").click(function(){
              var seleccionados = $("input[name='borrar[]']:checked").length;
              if(seleccionados>0){
                alertify.confirm('??Seg??ro que desea eliminar lo seleccionado?', function(response){
                  if(response){
                    $('#all').attr('target', '');
                    $('#all').attr('action', '/Empresa/delete');
                    $("#all").submit();
                    alertify.success("Se ha eliminado correctamente");
                  }
                });
              }else{
                alertify.confirm('Selecciona al menos uno para eliminar');
              }
            });

        });
      </script>
	</body>