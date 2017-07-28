@extends('layouts.appuser')
<style type="text/css">

</style>
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Orden #{{ $orden->id }}</h4>
                <p class="category">Datos sobre la orden en el sistema</p>
            </div>
            <div class="card-content">
                <p>
                    Datos generales de la orden.
                </p>
                <table class="table">
                    <thead>
                        <th>Campo</th>
                        <th>Valor</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID Orden</td>
                            <td>{{ $orden->id }}</td>
                        </tr>
                        <tr>
                            <td>Usuario</td>
                            <td>{{ $orden->user_id }}</td>
                        </tr>
                        <tr>
                            <td>Fecha del Evento</td>
                            <td>{{ $orden->fecha }}</td>
                        </tr>
                        <tr>
                            <td>Fecha de creación de la orden</td>
                            <td>{{ $orden->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Fecha de la última modificación</td>
                            <td>{{ $orden->updated_at }}</td>
                        </tr>
                        <tr>
                            <td>Número de Invitados</td>
                            <td>{{ $orden->no_invitados }}</td>
                        </tr>
                        <tr>
                            <td>Duración del evento</td>
                            <td>{{ $orden->duracion }}</td>
                        </tr>
                        <tr>
                            <td>Descripción de la orden</td>
                            <td>{{ $orden->introduccion }}</td>
                        </tr>
                        <tr>
                            <td>¿Aprobado?</td>
                            @if ($orden->aprobado)
                                <td>Sí</td>
                            @else
                                <td>No</td>
                            @endif
                        </tr>
                        <tr>
                            <td>Notas Extra</td>
                            <td>{{ $orden->notas }}</td>
                        </tr>
                        <tr>
                            <td>¿Requiere Limpieza?</td>
                            @if ($orden->id_limpieza)
                                <td>Sí</td>
                            @else
                                <td>No</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
                <p>
                    Opciones de comandas seleccionadas:
                </p>
            </div>
        </div>
        <a href="{{ url('/ordenes') }}" class="btn btn-success">Atrás</a>
    </div>
</div>
@endsection