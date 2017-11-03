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
                <strong>Datos generales de la orden:</strong>
                <table class="table table-striped">
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
                            <td>Cliente</td>
                            <td><a href="{{ url('/clients/'.$orden->client->id) }}">{{ $orden->client->nombre.' '.$orden->client->apellido }}</a></td>
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
                            <td>Tipo de evento</td>
                            <td>
                                @php
                                    switch ($orden->tipo_evento)
                                    {
                                        case 1:
                                            echo "Adolescentes";
                                            break;
                                        case 2:
                                            echo "Familiar";
                                            break;
                                        case 3:
                                            echo "18 y Veinteañeros";
                                            break;
                                        case 4:
                                            echo "Treintañeros";
                                            break;
                                        case 5:
                                            echo "Cuarentones";
                                            break;
                                        case 6:
                                            echo "Cincuentones";
                                            break;
                                        case 7:
                                            echo "Más de 50";
                                            break;
                                        case 8:
                                            echo "Combinadito";
                                            break;
                                        case 9:
                                            echo "Fiesta Ellas";
                                            break;
                                        case 10:
                                            echo "Fiesta Ellos";
                                            break;
                                        case 11:
                                            echo "Fiesta Ellas y Ellos";
                                            break;
                                        case 12:
                                            echo "Sólo los niños se divierten";
                                            break;
                                        case 13:
                                            echo "Niños y Adultos se divierten";
                                            break;
                                        default:
                                            echo "Desconocido";
                                            break;
                                    }
                                @endphp
                            </td>
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
                            <td>¿Requiere Limpieza?</td>
                            @if ($orden->id_limpieza)
                                <td>Sí</td>
                            @else
                                <td>No</td>
                            @endif
                        </tr>
                        <tr>
                            <td>Notas Extra</td>
                            <td>{{ $orden->notas }}</td>
                        </tr>
                    </tbody>
                </table>
                <strong>Opciones de comandas seleccionadas:</strong>
                <table class="table table-striped table-responsive">
                    <thead>
                        <th>Producto</th>
                        <th>Cantidad/Valor</th>
                    </thead>
                    <tbody>
                        @foreach ($orden->datosOrden as $dato)
                            <tr>
                                <td>{{ $dato->product->nombre }}</td>
                                <td>{{ $dato->valor }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ url('/ordenes') }}" class="btn btn-success">Atrás</a>
    </div>
</div>
@endsection