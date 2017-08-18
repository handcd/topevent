<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="{{ URL::asset('assets_configurador/assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'WIT') }} | Configurador de Eventos</title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ URL::asset('assets_configurador/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets_configurador/assets/css/material-kit.css')}}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets_configurador/assets/css/wizard.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets_configurador/assets/css/demo.css') }}" rel="stylesheet" />

</head>

<body>

	<div class="bg-image"></div>

	<div class="logo-container">
		<a href="{{ url('/configurador') }}">
            <div class="logo">
                <img src="{{ URL::asset('assets_configurador/assets/img/favicon.png') }}">
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
						<div class="col-sm-2" style="padding-bottom: 2vh;">
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
							<form action="{{ url('/configurador') }}" method="POST">
							{{ csrf_field() }}
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
												Nuestra razón de existir como agencia y como creadores de eventos…
											</p>
											<p>
												Gracias por abrirnos la puerta, permitirnos platicar y crear juntos esa celebración especial, y más que eso, darle ese toque diferente que hará que sea toda una experiencia.
											</p>
											<p>
												Lo que hacemos: Creación, diseño, desarrollo y operación de eventos en donde disfrutamos todos, tú porque es tu fiesta, y nosotros ¡porque nos encanta lo que hacemos!, desde la visualización, hasta el cierre.
											</p>
											<p>
												Partimos de las tendencias, estándares internacionales y los objetivos buscados por cada client, pero aterrizando todo a manera de un sastre, hacemos un producto taylor made.
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
												Pásanos tus datos para saber con quién vamos a crear este increíble evento
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
	                                            <input class="datepicker form-control" id="fechaevento" name="fechaevento" type="text" data-date-format="yyyy-mm-dd"/>
	                                        	<span class="material-input"></span>
	                                        </div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
											</span>
											<div class="form-group label-floating is-empty">
												<label class="control-label">Duración del evento (en horas)</label>
	                                            <input class="form-control" id="duracion" name="duracion" type="number" />
	                                        	<span class="material-input"></span>
	                                        </div>
										</div>
										<hr>
										<div class="row">
											<div class="col-xs-offset-10 col-xs-offset-1">
												<h4>Pronóstico del clima para la fecha:</h4>
											</div>
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
						    		<div class="tab-pane" id="tab2">
						    			<div class="step-title">
											<h3>Tipo de Evento</h3>
										</div>
										<hr>
										<div class="step-intro">
											<p>
												Danos una breve introducción a tu evento y selecciona una de las opciones que más se acoplen a tus requerimientos.
											</p>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											</span>
											<div class="form-group label-floating is-empty">
												<label class="control-label">Introducción a tu evento</label>
	                                            <input class="form-control" id="introduccion" name="introduccion" type="textarea" />
	                                        	<span class="material-input"></span>
	                                        </div>
										</div>
										<div class="form-group">
											<label for="tipoEvento">Selecciona una opción:</label>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="0">Adolescentes</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="1">Familiar</label>
											</div>
											<i>Adultos:</i>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="2">18 y Veinteañeros</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="3">Treintañeros</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="4">Cuarentones</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="5">Cincuentones</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="6">Más de 50</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="7">Combinadito</label>
											</div>
											<i>Diversidad (Pink Parties):</i>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="8">Fiesta Ellas</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="9">Fiesta Ellos</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="tipoEvento" value="10">Fiesta Ellas y Ellos</label>
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
	                                            <input class="form-control" id="noInvitados" name="noInvitados" min="2" type="number" />
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
										<div class="step-intro">
											<p>
												Elige entre las opciones de lugar para que tu evento sea todo un éxito
											</p>
										</div>
										<div class="form-group">
											<label for="lugarEvento">Selecciona el lugar dónde quieres que sea tu evento</label>
											<br>
											<i>Interior</i>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="0">Salón</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="1">Salón + Jardín + Terraza</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="2">Salón en Hotel</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="3">Salón en Hacienda</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="4">Restaurante</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="5">Restaurante + Bar</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="6">Antro</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="7">Casa</label>
											</div>
											
											<i>Exterior</i>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="8">Jardín</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="9">Jardín + Alberca</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="10">Terraza</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="11">Hacienda</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="lugarEvento" value="12">Casa en Playa</label>
											</div>
										</div>
										<label>Si ya tienes el lugar de tu evento, déjanos la dirección aquí abajo:</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-location-arrow" aria-hidden="true"></i>
											</span>
											<div class="form-group label-floating is-empty">
												<label class="control-label">Nombre del Lugar</label>
	                                            <input class="form-control" id="nombreLugar" name="nombreLugar" type="text" />
	                                        	<span class="material-input"></span>
	                                        </div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
											</span>
											<div class="form-group label-floating is-empty">
												<label class="control-label">Dirección del Lugar</label>
	                                            <input class="form-control" id="direccionLugar" name="direccionLugar" type="text" />
	                                        	<span class="material-input"></span>
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
										@include('configurador.partials.comanda', ['nombre_comanda'=>'Botanas'])
										@include('configurador.partials.comanda', ['nombre_comanda'=>'Canapés'])
										@include('configurador.partials.comanda', ['nombre_comanda'=>'Postres'])
										@include('configurador.partials.comanda', ['nombre_comanda'=>'Bebidas'])
										@include('configurador.partials.comanda', ['nombre_comanda'=>'Extras Comida y Bebida'])
						    		</div>

						    		<div class="tab-pane" id="tab6">
						    			<div class="step-title">
						    				<h3>Mobiliario</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Selecciona las opciones de Mobiliario que te gustarían para tu evento
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Mobiliario'])
						    		</div>

						    		<div class="tab-pane" id="tab7">
						    			<div class="step-title">
						    				<h3>Música / Visual</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					¿Qué opciones de música o de materiales audiovisuales te gustarían para tu evento?
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Música'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Paquetes Visuales'])
						    		</div>

						    		<div class="tab-pane" id="tab8">
						    			<div class="step-title">
						    				<h3>Iluminación</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Seleciona las opciones de iluminación que te gustarían para tu evento
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Iluminación'])
						    		</div>

						    		<div class="tab-pane" id="tab9">
						    			<div class="step-title">
						    				<h3>Entretenimiento</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					¿Qué opciones de entretenimiento te gustarían?
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Entretenimiento'])
						    		</div>

						    		<div class="tab-pane" id="tab10">
						    			<div class="step-title">
						    				<h3>Ambientación</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					¿Qué tipo de ambientación te gustaría para tu evento?
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Fiesta Temática'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Fiesta Convencional'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Albercada'])
						    		</div>

						    		<div class="tab-pane" id="tab11">
						    			<div class="step-title">
						    				<h3>Foto y Video</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Selecciona entre las opciones que tenemos de Fotos y Video para tu evento
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Fotografía'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Video'])
						    		</div>

						    		<div class="tab-pane" id="tab12">
						    			<div class="step-title">
						    				<h3>Invitaciones</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Selecciona entre las opciones de invitaciones que tenemos 
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Invitaciones'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Confirmación'])
						    		</div>

						    		<div class="tab-pane" id="tab13">
						    			<div class="step-title">
						    				<h3>Recuerdos</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Selecciona entre las opciones de recuerdos para tu evento
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Recuerdos del Evento'])
						    		</div>

						    		<div class="tab-pane" id="tab14">
						    			<div class="step-title">
						    				<h3>Limpieza</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Contamos con opciones de limpieza para tu evento
						    				</p>
						    			</div>
						    			<div class="form-group">
						    				<div class="radio">
												<label><input type="radio" name="idLimpieza" value="0">No requiero limpieza</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="idLimpieza" value="1">Requiero limpieza antes de mi evento</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="idLimpieza" value="2">Requiero limpieza después de mi evento</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="idLimpieza" value="3">Requiero limpieza antes y después de mi evento</label>
											</div>
						    			</div>
						    		</div>

		
						    		<div class="tab-pane" id="tab15">
						    			<div class="step-title">
						    				<h3>Extras</h3>
						    			</div>
						    			<hr>
						    			<div class="step-intro">
						    				<p>
						    					Tenemos opciones adicionales para darle un toque específico a tu evento
						    				</p>
						    			</div>
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Extras'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Personal'])
						    			@include('configurador.partials.comanda', ['nombre_comanda' => 'Transporte'])
						    		</div>

						    		<div class="tab-pane" id="tab16">
						    			<div class="step-title">
						    				<h2>¡Gracias!</h2>
						    			</div>
						    			<div class="step-intro">
						    				<p>
						    					Con esta información podemos empezar a planear tu evento de una forma más rápida y eficiente.
						    				</p>
						    				<p>
						    					En un máximo de 72 horas un agente especializado se pondrá en contacto contigo para realizar la preparación de la información para la realización de tu evento.
						    				</p>
						    				<p>
						    					Gracias por confiar en nosotros, recuerda que somos los mejores porque <strong>amamos lo que hacemos.</strong>
						    				</p>
						    				<div class="row">
							    				<div class="col-xs-3">
							    					<img class="img img-thumbnail" src="{{ asset('assets_configurador/assets/img/favicon.png') }}" alt="WIT Eventos con Ingenio">
							    				</div>
							    				<div class="col-xs-9">
								    				<p>
								    					<i>
								    						Al hacer click en "Finalizar" la información proporcionada será almacenada en nuestra base de datos. Si tienes alguna duda, puedes consultar nuestra <a href="#">Política de Privacidad</a> así como nuestra <a href="#">Política de Uso de Datos</a>.
								    					</i>
								    				</p>
								    			</div>
								    		</div>
						    			</div>
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
										<li class="finish"><button type="submit" class="btn btn-primary pull-right">Finalizar</button></li>
									</ul>

									<!-- Barra de Progreso -->
								 	<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
										<span class="sr-only">50% Complete</span>
										</div>
									</div>
								</div>
							</form>
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
	<script src="{{ URL::asset('assets_configurador/assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets_configurador/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets_configurador/assets/js/material.min.js') }}"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ URL::asset('assets_configurador/assets/js/nouislider.min.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{ URL::asset('assets_configurador/assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{ URL::asset('assets_configurador/assets/js/material-kit.js')}}" type="text/javascript"></script>

	<!-- Wizard Functionality -->
	<script src="{{ URL::asset('assets_configurador/bower_components/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
	<script src="{{ URL::asset('assets_configurador/assets/js/wizard-wit.js')}} "></script>
	<script src="{{ URL::asset('assets_configurador/assets/js/skycons.js')}}" type="text/javascript"></script>

</html>
