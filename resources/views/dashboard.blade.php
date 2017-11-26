@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="purple">
                <i class="material-icons">new_releases</i>
            </div>
            <div class="card-content">
                <p class="category">Sin Aprobar</p>
                <h3 class="title">{{ $ordenes->where('aprobado',0)->count() }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">warning</i> <a href="{{ url('/ordenes') }}">Revisar...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="orange">
                <i class="material-icons">info_outline</i>
            </div>
            <div class="card-content">
                <p class="category">Órdenes Totales</p>
                <h3 class="title">{{ $ordenes->count() }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Desde hace un mes
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">check</i>
            </div>
            <div class="card-content">
                <p class="category">Aprobados</p>
                <h3 class="title">{{ $ordenes->where('aprobado',1)->count() }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Desde el principio...
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="blue">
                <i class="material-icons">people</i>
            </div>
            <div class="card-content">
                <p class="category">Clientes</p>
                <h3 class="title">{{ \WIT\Client::count() }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Apenas actualizado
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-chart" data-background-color="green">
                <div class="ct-chart" id="ordenesPorDia"></div>
            </div>
            <div class="card-content">
                <h4 class="title">Órdenes por día</h4>
                <p class="category">Número de órdenes en el sistema por día</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> actualizado hace 5 minutos.
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-chart" data-background-color="orange">
                <div class="ct-chart" id="clientesPorDia"></div>
            </div>
            <div class="card-content">
                <h4 class="title">Clientes</h4>
                <p class="category">Nuevos clientes por día</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> actualizado hace 3 minutos.
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-chart" data-background-color="blue">
                <div class="ct-chart" id="totalOrdenes"></div>
            </div>
            <div class="card-content">
                <h4 class="title">Total de Órdenes</h4>
                <p class="category">Total de órdenes registradas en el sistema</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> actualizado hace 3 minutos.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Ordenes sin Aprobar</h4>
                <p class="category">Ordenes ingresadas al sistema sin cotizar</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha de Evento</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($ordenes->where('aprobado',0) as $orden)
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td><a href="{{ url('/clients/'.$orden->client->id) }}">{{ $orden->client->nombre.' '.$orden->client->apellido }}</a></td>
                                <td>{{ $orden->fecha }}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ url('/ordenes/'.$orden->id) }}" type="button" rel="tooltip" title="Ver Orden" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="{{ url('/ordenes/'.$orden->id.'/edit') }}" type="button" rel="tooltip" title="Editar Orden" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form action="{{ url('/ordenes/'.$orden->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-simple btn-xs" type="button" rel="tooltip" title="Eliminar Producto"><i class="material-icons">close</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Ordenes Aprobadas</h4>
                <p class="category">Ordenes cotizadas</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha de Evento</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($ordenes->where('aprobado',1) as $orden)
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td><a href="{{ url('/clients/'.$orden->client->id) }}">{{ $orden->client->nombre.' '.$orden->client->apellido }}</a></td>
                                <td>{{ $orden->fecha }}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ url('/ordenes/'.$orden->id) }}" type="button" rel="tooltip" title="Ver Orden" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="{{ url('/ordenes/'.$orden->id.'/edit') }}" type="button" rel="tooltip" title="Editar Orden" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form action="{{ url('/ordenes/'.$orden->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-simple btn-xs" type="button" rel="tooltip" title="Eliminar Producto"><i class="material-icons">close</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        // Helper function to get day of week.
        function diaSemana(dt){
            var dias=["D", "L", "M", "M", "J", "V", "S"];
            return dias[dt.getUTCDay()];
        };

        /*
        ======================================== Gráfica número de órdenes ======================================
        */
        var fecha = new Date();

        dataOrdenesPorDia = {
            labels: [
                diaSemana(new Date(new Date().setDate(new Date().getDate()-6))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-5))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-4))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-3))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-2))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-1))),
                diaSemana(fecha)
            ],
            series: [
                [{{$grafica1[6]}},{{$grafica1[5]}},{{$grafica1[4]}},{{$grafica1[3]}},{{$grafica1[2]}},{{$grafica1[1]}},{{$grafica1[0]}}]
            ]
        };

        optionsOrdenesPorDia = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: {{ max($grafica1)*1.3 }}, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var ordenesPorDia = new Chartist.Line('#ordenesPorDia', dataOrdenesPorDia, optionsOrdenesPorDia);

        md.startAnimationForLineChart(ordenesPorDia);

        /*
        ======================================== Gráfica número de clientes ======================================
        */
        var fecha = new Date();

        dataClientesPorDia = {
            labels: [
                diaSemana(new Date(new Date().setDate(new Date().getDate()-6))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-5))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-4))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-3))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-2))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-1))),
                diaSemana(fecha)
            ],
            series: [
                [{{$grafica2[6]}},{{$grafica2[5]}},{{$grafica2[4]}},{{$grafica2[3]}},{{$grafica2[2]}},{{$grafica2[1]}},{{$grafica2[0]}}]
            ]
        };

        optionsClientesPorDia = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: {{ max($grafica2)*1.3 }}, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var clientesPorDia = new Chartist.Line('#clientesPorDia', dataClientesPorDia, optionsClientesPorDia);

        md.startAnimationForLineChart(clientesPorDia);

        /*
        ======================================== Gráfica total de órdenes ======================================
        */
        var fecha = new Date();

        dataTotalOrdenes = {
            labels: [
                diaSemana(new Date(new Date().setDate(new Date().getDate()-6))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-5))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-4))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-3))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-2))),
                diaSemana(new Date(new Date().setDate(new Date().getDate()-1))),
                diaSemana(fecha)
            ],
            series: [
                [{{$grafica3[6]}},{{$grafica3[5]}},{{$grafica3[4]}},{{$grafica3[3]}},{{$grafica3[2]}},{{$grafica3[1]}},{{$grafica3[0]}}]
            ]
        };

        optionsTotalOrdenes = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: {{ max($grafica3)*1.3 }}, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var totalOrdenes = new Chartist.Line('#totalOrdenes', dataTotalOrdenes, optionsTotalOrdenes);

        md.startAnimationForLineChart(totalOrdenes);

    });
</script>
@endsection
