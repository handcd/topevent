<?php
	require_once 'src/configurador.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>WIT | Configurador de Eventos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/wizard.css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body>

	<div class="bg-image"></div>

	<div class="logo-container">
		<a href="http://wit.handcreativedesign.com">
            <div class="logo">
                <img src="assets/img/favicon.png">
            </div>
            <div class="brand">
                Whatever It Takes
            </div>
    	</a>
    </div>


    <div class="container">
    	<div class="row">
    		<div class="col-sm-10 col-sm-offset-1">
				<div id="rootwizard">
					<div class="card">
						<div class="col-sm-2">
							<div class="wizard-nav-header">
								<h4>Configurador de Eventos</h4>
							</div>
							<hr>
							<ul>
								<li><a href="#tabIntro" data-toggle="tab">Inicio</a></li>
								<li><a href="#tab0" data-toggle="tab">Datos</a></li>
					  			<li><a href="#tab1" data-toggle="tab">Fecha</a></li>
								<li><a href="#tab2" data-toggle="tab">Tipo de Evento</a></li>
								<li><a href="#tab3" data-toggle="tab">Invitados</a></li>
								<li><a href="#tab4" data-toggle="tab">Lugar</a></li>
								<li><a href="#tab5" data-toggle="tab">Comida y Bebida</a></li>
								<li><a href="#tab6" data-toggle="tab">Mobiliario</a></li>
								<li><a href="#tab7" data-toggle="tab">Música - Visual</a></li>
								<li><a href="#tab8" data-toggle="tab">Iluminación</a></li>
					  			<li><a href="#tab9" data-toggle="tab">Entretenimiento</a></li>
								<li><a href="#tab10" data-toggle="tab">Ambientación</a></li>
								<li><a href="#tab11" data-toggle="tab">Foto, Video y Recuerdos</a></li>
								<li><a href="#tab12" data-toggle="tab">Invitaciones</a></li>
								<li><a href="#tab13" data-toggle="tab">Recuerdos</a></li>
								<li><a href="#tab14" data-toggle="tab">Limpieza</a></li>
								<li><a href="#tab15" data-toggle="tab">Extras</a></li>
								<li><a href="#tab16" data-toggle="tab">Resúmen</a></li>

							</ul>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
							<div class="tab-content">

								<!-- Introducción -->
								<div class="tab-pane" id="tabIntro">
									<div class="step-title">
										<h3>Primero lo primero</h3>
									</div>
									<hr>
									<div class="step-intro">
										<h4>¡Bienvenido al Configurador de Eventos de WIT!</h4>
										<p>
											Lorem ipsum adipisicing aliquip ea laboris ut exercitation dolore ut nisi minim enim culpa eu qui aliquip est labore magna exercitation nostrud sed velit veniam ullamco ad enim magna fugiat laborum sint do incididunt voluptate sunt proident ad aliqua occaecat.
										</p>
										<p>
											Ut dolor in officia cupidatat dolor duis nostrud ullamco nulla fugiat sunt quis veniam laboris adipisicing laborum ad aute dolor nostrud proident in sunt irure dolore deserunt duis sit mollit.
										</p>
										<p>
											Magna nulla cillum ea culpa proident commodo occaecat velit adipisicing veniam qui et dolore elit veniam incididunt tempor ut voluptate duis deserunt magna veniam in velit ut eiusmod sint qui nostrud cupidatat.
										</p>
										<p>
											Aliqua elit in aute aliquip mollit veniam sint et incididunt occaecat reprehenderit fugiat nulla proident proident nisi occaecat qui in ex ad eiusmod aute anim irure nostrud voluptate id officia nisi elit elit consectetur ad et irure.
										</p>
										<p>
											Sed excepteur nisi excepteur enim ea culpa do sint eiusmod dolor ex voluptate adipisicing consequat irure do sint dolor incididunt.
										</p>
										<p>
											<b>Gracias por elegirnos</b> y comencemos.
										</p>
									</div>
								</div>

								<!-- Datos -->
								<div class="tab-pane" id="tab0">
									<div class="step-title">
										<h3>Cuéntanos de ti</h3>
									</div>
									<hr>
									<div class="step-intro">
										<p>
											Queremos saber para qué Rockstar vamos a trabajar esta ocasión		
										</p>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<div class="form-group label-floating is-empty">
                                            <label class="control-label">Nombre <small>(obligatorio)</small></label>
                                            <input name="nombre" type="text" class="form-control valid">
                                        	<span class="material-input"></span>
                                        </div>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">record_voice_over</i>
										</span>
										<div class="form-group label-floating is-empty">
                                            <label class="control-label">Apellidos <small>(obligatorio)</small></label>
                                            <input name="apellidos" type="text" class="form-control valid">
                                        	<span class="material-input"></span>
                                        </div>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<div class="form-group label-floating is-empty">
                                            <label class="control-label">Email <small>(obligatorio)</small></label>
                                            <input name="email" type="email" class="form-control valid">
                                        	<span class="material-input"></span>
                                        </div>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
										<div class="form-group label-floating is-empty">
                                            <label class="control-label">Número Celular</label>
                                            <input name="celular" type="number" class="form-control valid">
                                        	<span class="material-input"></span>
                                        </div>
									</div>
								</div>
								
								<!-- Fecha -->
					    		<div class="tab-pane" id="tab1">
					    			<div class="step-title">
										<h3>¿Cuándo será el evento?</h3>
									</div>
									<hr>
									<div class="step-intro">
										<p>
											Platícanos sobre la fecha del evento, te mostramos el pronóstico del clima por si quieres armar una fiesta en exteriores.		
										</p>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</span>
										<div class="form-group label-floating is-empty">
                                            <input class="datepicker form-control" id="fechaevento" type="text" value="12/24/2017"/>
                                        	<span class="material-input"></span>
                                        </div>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
										</span>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Duración del evento (en horas)</label>
                                            <input class="form-control" id="duracion" type="number" />
                                        	<span class="material-input"></span>
                                        </div>
									</div>
									<hr>
									<div class="row">
										<h4>Pronóstico del clima para la fecha:</h4>
										<div class="col-sm-4 col-sm-offset-1">
											<canvas id="icon1" width="128" height="128"></canvas>
										</div>
										<div class="col-sm-4 col-sm-offset-1">
											<ul>
												<li>Máxima: <i id="clim-max">--</i></li>
												<li>Mínima: <i id="clim-min">--</i></li>
												<li>Pronóstico: <i id="clim-pro">--</i></li>
											</ul>
										</div>
									</div>
					    		</div>
					    		
					    		<!-- Invitados -->
					    		<div class="tab-pane" id="tab3">
					    			<div class="step-title">
										<h3>Los invitados</h3>
									</div>
									<hr>
									<div class="step-intro">
										<p>
											Dinos cuántas personas planeas tener en tu evento.		
										</p>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-users" aria-hidden="true"></i>
										</span>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Número de invitados</label>
                                            <input class="form-control" id="duracion" type="number" />
                                        	<span class="material-input"></span>
                                        </div>
									</div>
					    		</div>

					    		<!-- Lugar -->
					    		<div class="tab-pane" id="tab4">
					    			<div class="step-title">
										<h3>El lugar</h3>
									</div>
									<hr>
									¿Ya tienes el lugar?
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" checked="true">
											No tengo el lugar
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios">
											Ya tengo el lugar
										</label>
									</div>
									<div id="sinlugar" style="display: none;">
										<p>¿Qué tipo de lugar te gustaría?</p>
										<div class="radio">
											<label>
												<input type="radio" name="sinlugar1">
												Interior
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="sinlugar1">
												Exterior
											</label>
										</div>
										<div id="sinlugar12" style="display: none;">
											<div class="form-group label-floating">
	                                            <label class="control-label">Selecciona un lugar interior...</label>
                                            	<select id="opcionlugarevento" class="form-control">
													<option disabled="" selected=""></option>
													<option>Salón</option>
													<option>Salón + Jardín + Terraza</option>
													<option>Salón en Hotel</option>
													<option>Salón en Hacienda</option>
													<option>Restaurante</option>
													<option>Restaurante + Bar</option>
													<option>Antro</option>
													<option>Casa</option>
                                            	</select>
	                                        </div>
	                                        <div class="form-group label-floating">
	                                            <label class="control-label">Selecciona un lugar exterior...</label>
                                            	<select id="opcionlugarevento" class="form-control">
													<option disabled="" selected=""></option>
                                                	<option>Jardín</option>
													<option>Jardín + Alberca</option>
													<option>Terraza</option>
													<option>Hacienda</option>
													<option>Casa en la Playa</option>
                                            	</select>
	                                        </div>

	                                        <p>
	                                        	<strong>En un máximo de 48 horas recibirás una cotización del lugar.</strong>
	                                        </p>
										</div>
									</div>
									<div id="conlugar" style="display: none;">
										<p>¿Dónde será tu evento?</p>
										<div class="radio">
											<label>
												<input type="radio" name="sinlugar1">
												Interior
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="sinlugar1">
												Exterior
											</label>
										</div>
										<div id="sinlugar12" style="display: none;">
											<div class="form-group label-floating">
	                                            <label class="control-label">Selecciona un lugar interior...</label>
                                            	<select id="opcionlugarevento" class="form-control">
													<option disabled="" selected=""></option>
													<option>Salón</option>
													<option>Salón + Jardín + Terraza</option>
													<option>Salón en Hotel</option>
													<option>Salón en Hacienda</option>
													<option>Restaurante</option>
													<option>Restaurante + Bar</option>
													<option>Antro</option>
													<option>Casa</option>
                                            	</select>
	                                        </div>
	                                        <div class="form-group label-floating">
	                                            <label class="control-label">Selecciona un lugar exterior...</label>
                                            	<select id="opcionlugarevento" class="form-control">
													<option disabled="" selected=""></option>
                                                	<option>Jardín</option>
													<option>Jardín + Alberca</option>
													<option>Terraza</option>
													<option>Hacienda</option>
													<option>Casa en la Playa</option>
                                            	</select>
	                                        </div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-location-arrow" aria-hidden="true"></i>
											</span>
											<div class="form-group label-floating is-empty">
	                                            <label class="control-label">Nombre del lugar</label>
	                                            <input name="nombre" type="text" class="form-control valid">
	                                        	<span class="material-input"></span>
	                                        </div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
											</span>
											<div class="form-group label-floating is-empty">
	                                            <label class="control-label">Dirección del lugar</label>
	                                            <input name="nombre" type="text" class="form-control valid">
	                                        	<span class="material-input"></span>
	                                        </div>
										</div>
									</div>
					    		</div>

					    		<!-- Comida / Bebida -->
					    		<div class="tab-pane" id="tab5">
					    			<div class="step-title">
										<h3>Comida / Bebida</h3>
									</div>
									<hr>
									<div class="step-intro">
										<p>
											Selecciona en las comandas la comida que gustes para tu evento, así como la bebida.
										</p>
									</div>
									<table class="table">
									    <thead>
									        <tr>
									            <th>Platillo</th>
									            <th>&#10004;</th>
									            <th>#</th>
									        </tr>
									    </thead>
									    <tbody>
									        <tr>
									            <td>Tinga</td>
									            <td>
									            	<input type="checkbox" name="optionsCheckboxes">
									            </td>
									            <td>
												    <input type="number" value="" placeholder="#" class="numComanda" />
									            </td>
									        </tr>
									        <tr>
									            <td>aosdifaoidfjoasdifjoasidfjoaisdjfoaisdjfoiasdjfoiajsdofij</td>
									            <td>
									            	<input type="checkbox" name="optionsCheckboxes">
									            </td>
									            <td>
												    <input type="number" value="" placeholder="#" class="numComanda" />
									            </td>
									        </tr>
									        <tr>
									            <td>Tinga</td>
									            <td>
									            	<input type="checkbox" name="optionsCheckboxes">
									            </td>
									            <td>
												    <input type="number" value="" placeholder="#" class="numComanda" />
									            </td>
									        </tr>
									        <tr>
									            <td>Tinga</td>
									            <td>
									            	<input type="checkbox" name="optionsCheckboxes">
									            </td>
									            <td>
												    <input type="number" value="" placeholder="#" class="numComanda" />
									            </td>
									        </tr>
									    </tbody>
									</table>
					    		</div>

					    		<!-- Pager -->
								<ul class="pager wizard">
									<li class="previous">
										<a href="javascript:;">
											<span aria-hidden="true">&laquo;</span>
											Anterior
										</a>
									</li>
									<li class="next">
										<a href="javascript:;">
											Siguiente
											<span aria-hidden="true">&raquo;</span>											
										</a>
									</li>
									<li class="finish"><a href="javascript:;">Finalizar</a></li>
								</ul>
							</div>

							<!-- Barra de Progreso -->
						 	<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
								<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div> <!-- closing card -->
				</div> <!-- closing root wizard -->
			</div> <!-- closing col -->
		</div> <!-- closing row -->
	</div> <!-- closing container -->
	
	<div class="footer">
        <div class="container text-center">
             Hecho con <i class="fa fa-heart heart"></i> por <a href="http://www.handcd.com">Hand Creative Design</a>
        </div>
    </div>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<!-- Wizard Functionality -->
	<script src="bower_components/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
	<script src="assets/js/wizard-wit.js"></script>

	<script src="assets/js/skycons.js" type="text/javascript"></script>


</html>
