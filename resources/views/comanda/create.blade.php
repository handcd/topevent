@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Registrar nuevo producto</h4>
                <p class="category">Registrar un nuevo producto en el sistema.</p>
            </div>
            <div class="card-content">
                <form action="{{ url('/comandas/') }}@yield('editId')" method="post">
                    {{ csrf_field() }}
                    @section('editMethod')
                        @show
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre del Producto:</label>
                                <input name="nombre" type="text" class="form-control"  required="true" value="@yield('editNombre')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Descripción:</label>
                                <input  name="descripcion" type="text" class="form-control" required="true" value="@yield('editDescripcion')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Precio:</label>
                                <input name="precio" type="number" class="form-control" min="0.00"  value="@yield('editPrecio')">
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Selecciona la comanda:</label>
                                <select name="comanda" class="form-control">
                                    <option disabled="" @hasSection('editComanda')
                                      {{-- No hacemos nada --}}
                                    @else
                                      selected=""
                                    @endif></option>
                                    @foreach (WIT\Comanda::all() as $comanda)
                                        <option value="{{ $comanda->id }}"
                                        @hasSection('editComanda')
                                          @if ($__env->getSections()['editComanda'] == $comanda->id)
                                            selected="" 
                                          @endif
                                        @endif>{{ $comanda->nombre }}</option>
                                    @endforeach
                                </select>
                            <span class="material-input"></span></div>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Selecciona el tipo de campo:</label>
                                <select name="campo" class="form-control" id="campo">
                                    <option disabled="" @hasSection('editCampo')
                                      {{-- No hacemos nada --}}
                                    @else
                                      selected=""
                                    @endif></option>
                                    @foreach (WIT\Campo::all() as $campo)
                                        <option value="{{ $campo->id }}"
                                        @hasSection('editCampo')
                                          @if ($__env->getSections()['editCampo'] == $campo->id)
                                            selected="" 
                                          @endif
                                        @endif>{{ $campo->nombre }}</option>
                                    @endforeach
                                </select>
                            <span class="material-input"></span></div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Subir</button>
                    <a href="{{ url('/comandas') }}" class="btn btn-default">Cancelar</a>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ URL::asset('assets_configurador/assets/js/material-kit.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        setTimeout(function() {
          $('input').trigger('change');
          $('select').trigger('change');
        },1000);
    });
</script>
@endsection