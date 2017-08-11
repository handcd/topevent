@extends('layouts.appuser')

@section('content')
<style>
    /*!
 * Datepicker for Bootstrap
 *
 * Copyright 2012 Stefan Petre
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 */
/*
 *
 *   SCSS by Creative Tim
 *   http://www.creative-tim.com
 *
 */
.datepicker {
  top: 0;
  left: 0;
  padding: 4px;
  margin-top: 1px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px; }
  .datepicker > div {
    display: none; }
  .datepicker table {
    width: 100%;
    margin: 0; }
  .datepicker td,
  .datepicker th {
    text-align: center;
    width: 20px;
    height: 20px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px; }
  .datepicker td {
    text-align: center; }
    .datepicker td p {
      font-size: 1em;
      font-weight: 400;
      border-radius: 50%;
      height: 29px;
      line-height: 29px;
      margin: 3px 0 8px;
      width: 29px; }
    .datepicker td :hover {
      cursor: pointer; }
  .datepicker th {
    font-weight: 500; }
    .datepicker th.switch-datepicker {
      font-size: 1em; }
  .datepicker .prev p,
  .datepicker .next p {
    font-size: 1.825em; }
  .datepicker p:hover {
    background: #eeeeee; }
  .datepicker .day.disabled {
    color: #eeeeee; }
  .datepicker td.old,
  .datepicker td.new {
    color: #999999;
    border-top: 0; }
  .datepicker td.active p,
  .datepicker td.active:hover p {
    box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
    color: #ffffff;
    background-color: #3fabd8; }
  .datepicker td.primary p,
  .datepicker td.primary:hover p {
    background-color: #3fabd8; }
  .datepicker td.info p,
  .datepicker td.info:hover p {
    background-color: #03a9f4; }
  .datepicker td.success p,
  .datepicker td.success:hover p {
    background-color: #4caf50; }
  .datepicker td.warning p,
  .datepicker td.warning:hover p {
    background-color: #fbc02d; }
  .datepicker td.danger p,
  .datepicker td.danger:hover p {
    background-color: #f44336; }
  .datepicker span {
    display: block;
    width: 55px;
    height: 54px;
    line-height: 54px;
    float: left;
    margin: 2px;
    cursor: pointer;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px; }
    .datepicker span.old {
      color: #999999; }
  .datepicker span.active, .datepicker span.active:focus, .datepicker span.active:hover, .datepicker span.active:active {
    background-color: #3fabd8;
    box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2); }
  .datepicker span.active {
    color: #FFFFFF; }
  .datepicker span:hover {
    background-color: #EEEEEE; }
  .datepicker span.primary,
  .datepicker span.primary:hover {
    background-color: #3fabd8; }
  .datepicker span.info,
  .datepicker span.info:hover {
    background-color: #03a9f4; }
  .datepicker span.success,
  .datepicker span.success:hover {
    background-color: #4caf50; }
  .datepicker span.warning,
  .datepicker span.warning:hover {
    background-color: #fbc02d; }
  .datepicker span.danger,
  .datepicker span.danger:hover {
    background-color: #f44336; }
  .datepicker th.switch-datepicker {
    width: 145px; }
  .datepicker th.next,
  .datepicker th.prev {
    font-size: 21px; }
  .datepicker thead tr:first-child th {
    cursor: pointer; }
  .datepicker thead tr:first-child th:hover {
    background: #eeeeee; }
  .datepicker.dropdown-menu {
    border-radius: 3px;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    -webkit-transition: all 150ms linear;
    -moz-transition: all 150ms linear;
    -o-transition: all 150ms linear;
    -ms-transition: all 150ms linear;
    transition: all 150ms linear;
    margin-top: -20px;
    opacity: 0;
    visibility: hidden; }
  .datepicker.dropdown-menu.open {
    opacity: 1;
    visibility: visible;
    margin-top: 1px; }
  .datepicker .table-condensed > tbody > tr > td {
    padding: 2px; }
  .datepicker .table-condensed > thead > tr > th {
    padding: 0; }

.input-append.date .add-on i,
.input-prepend.date .add-on i {
  display: block;
  cursor: pointer;
  width: 16px;
  height: 16px; }

.datepicker-months thead {
  padding: 0 0 3px;
  display: block; }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Registrar nueva orden</h4>
                <p class="category">Registrar una orden nueva en el sistema</p>
            </div>
            <div class="card-content">
                <form action="{{ url('/ordenes/') }}/@yield('editId')" method="post">
                    {{ csrf_field() }}
                    @section('editMethod')
                        @show
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>
                                Si el cliente ya se encuentra registrado en el sistema, selecciónalo aquí debajo, en caso contrario haz click en <i>Registrar Cliente</i>.
                            </p>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group label-floating">
                                <label class="control-label">Selecciona el cliente:</label>
                                <select name="cliente" class="form-control">
                                    <option disabled="" selected=""></option>
                                    @foreach (WIT\Cliente::all() as $cliente)
                                        <option value="{{ $cliente->id }}">
                                            {{
                                                $cliente->id
                                                .".- "
                                                .$cliente->nombre
                                                .' '
                                                .$cliente->apellido
                                                .' -> ('
                                                .$cliente->email
                                                .')'
                                            }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-lg-offset-1">
                        <a href="{{ url('/clientes/create') }}" class="btn btn-success pull-right">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Añadir Cliente
                        </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p>
                                Datos generales de la orden:
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Fecha del Evento:</label>
                                    <input class="datepicker form-control" id="fechaevento" name="fechaevento" type="text" data-date-format="yyyy-mm-dd" value="@yield('editFecha')"/>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Duración del evento:</label>
                                    <input class="number form-control"  name="duracionEvento" min="0" value="@yield('editDuracion')" />
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Selecciona el tipo de evento:</label>
                                <select name="tipoEvento" class="form-control">
                                    <option disabled="" selected=""></option>
                                    <optgroup label="General">
                                    <option value="0">Adolescentes</option>
                                    <option value="1">Familiar</option>
                                    </optgroup>
                                    <optgroup label="Adultos">
                                        <option value="2">18 y Veinteañeros</option>
                                        <option value="3">Treintañeros</option>
                                        <option value="4">Cuarentones</option>
                                        <option value="5">Cincuentones</option>
                                        <option value="6">Más de 50</option>
                                        <option value="7">Combinadito</option>
                                    </optgroup>
                                    <optgroup label="Diversidad (Pink Parties)">
                                        <option value="8">Fiesta Ellas</option>
                                        <option value="9">Fiesta Ellos</option>
                                        <option value="10">Fiesta Ellas y Ellos</option>
                                    </optgroup>
                                </select>
                                <span class="material-input"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Lugar del Evento:</label>
                                <select name="lugarEvento" class="form-control">
                                    <option disabled="" selected=""></option>
                                    <optgroup label="Interior">
                                        <option value="0">Salón</option>
                                        <option value="1">Salón + Jardín + Terraza</option>
                                        <option value="2">Salón en Hotel</option>
                                        <option value="3">Salón en Hacienda</option>
                                        <option value="4">Restaurante</option>
                                        <option value="5">Restaurante + Bar</option>
                                        <option value="6">Antro</option>
                                        <option value="7">Casa</option>
                                    </optgroup>
                                    <optgroup label="Exterior">
                                        <option value="8">Jardín</option>
                                        <option value="9">Jardín + Alberca</option>
                                        <option value="10">Terraza</option>
                                        <option value="11">Hacienda</option>
                                        <option value="12">Casa en Playa</option>
                                    </optgroup>
                                </select>
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Nombre del Lugar del Evento</label>
                                    <input class="form-control" name="nombreLugarEvento" type="text"/>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Dirección del Lugar del Evento</label>
                                    <input class="form-control" name="direccionLugarEvento" type="text"/>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Número de Invitados</label>
                                    <input class="form-control" name="numInvitados" type="number" min="5" />
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Introducción del evento</label>
                                    <input class="form-control" name="introduccion" type="textarea" />
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Limpieza del evento:</label>
                                <select name="limpieza" class="form-control">
                                    <option disabled="" selected=""></option>
                                    <option value="0">No requiere limpieza</option>
                                    <option value="1">Requiere limpieza antes del evento</option>
                                    <option value="2">Requiere limpieza después del evento</option>
                                    <option value="3">Requiere limpieza antes y después del evento</option>
                                </select>
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tipoEvento">¿Se encuentra Aprobada la Orden?</label>
                                <div class="radio">
                                    <label><input type="radio" name="aprobado" value="0">No</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="aprobado" value="1">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Cotización</label>
                                    <input class="form-control" name="cotizacion" type="number" />
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                </span>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Notas de la orden</label>
                                    <input class="form-control" name="notas" type="textarea" />
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>
                                Opciones de comanda para la orden:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($comandas as $comanda)
                        <div class="col-lg-8 col-lg-offset-2">
                            <h5>{{$comanda->nombre}}</h5>
                            <small><i>{{$comanda->descripcion}}</i></small>
                            <table class="table table-responsive table-bordered table-striped">
                                <tbody>
                                    @foreach ($comanda->products as $product)
                                        <tr>
                                            <td>{{$product->nombre}}</td>
                                            <td>
                                                <input type="number" id="producto{{$product->id}}" name="producto[]" min="0">
                                                <small><i>{{ $product->descripcion}}</i></small>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        </div>
                        @endforeach
                    </div>


                    <button type="submit" class="btn btn-primary pull-right">Subir</button>
                    <a href="{{ url('/ordenes') }}" class="btn btn-default">Cancelar</a>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ URL::asset('assets_configurador/assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ URL::asset('assets_configurador/assets/js/material-kit.js')}}" type="text/javascript"></script>
    <script>
        $('#fecha .datepicker').datepicker({
            weekStart: 1,
            viewMode: 2,
            format: 'dd/mm/yyyy'
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('input').trigger('change');    
        });
    </script>
@endsection