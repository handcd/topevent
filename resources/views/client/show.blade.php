@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Información del Cliente</h4>
                <p class="category">Todos los datos disponibles del cliente</p>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td class="col-md-4"><strong>Nombre:</strong></td>
                                <td class="col-md-8">{{$cliente->nombre}} {{$cliente->apellido}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-4"><strong>Correo Electrónico:</strong></td>
                                <td class="col-md-8"><a href="mailto:{{$cliente->email}}">{{$cliente->email}}</a></td>
                            </tr>
                            <tr>
                                <td class="col-md-4"><strong>Teléfono:</strong></td>
                                <td class="col-md-8">{{$cliente->phone}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-4"><strong>Fecha de Registro:</strong></td>
                                <td class="col-md-8">{{$cliente->created_at}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-4"><strong>Última Actualización de Información:</strong></td>
                                <td class="col-md-8">{{$cliente->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            	<hr>
            	<a href="{{ url('/clientes') }}" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
</div>
@endsection