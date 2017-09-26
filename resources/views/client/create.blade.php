@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Registrar nuevo cliente</h4>
                <p class="category">Registrar un nuevo cliente en el sistema.</p>
            </div>
            <div class="card-content">
                <form action="{{ url('/clients/') }}@yield('editId')" method="post">
                    {{ csrf_field() }}
                    @section('editMethod')
                        @show
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre(s)</label>
                                <input name="nombre" type="text" class="form-control"  required="true" value="@yield('editNombreClient')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Apellidos</label>
                                <input  name="apellido" type="text" class="form-control" required="true" value="@yield('editApellidoClient')">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Correo Electrónico</label>
                                <input name="email" type="email" class="form-control" required="true" value="@yield('editEmailClient')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Teléfono</label>
                                <input name="phone" type="phone" class="form-control" value="@yield('editPhoneClient')">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Subir</button>
                    <a href="{{ url('/clients') }}" class="btn btn-default">Cancelar</a>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection