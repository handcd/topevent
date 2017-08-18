@extends('layouts.appuser')

@section('content')
<div class="row text-center">
    <a href="{{ url('/ordenes/create') }}" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Añadir Orden</a>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Ganancias</p>
                <h3 class="title">${{ $revenue }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> En el último mes
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="blue">
                <i class="material-icons">info_outline</i>
            </div>
            <div class="card-content">
                <p class="category">Ordenes</p>
                <h3 class="title">{{ $ordenes->count() }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">warning</i> Completadas en la semana 
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="red">
                <i class="material-icons">info_outline</i>
            </div>
            <div class="card-content">
                <p class="category">Ordenes sin Aprobar</p>
                <h3 class="title">{{ $ordenes->where('aprobado',0)->count() }}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Con la etiqueta "Perdido"
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="blue">
                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
            </div>
            <div class="card-content">
                <p class="category">Evento más cercano</p>
                <h3 class="title">Sábado</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Recién actualizado
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
                                <td><a href="{{ url('/clients/'.$orden->client->id) }}">{{ $orden->client->nombre }}</a></td>
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
                                <td><a href="{{ url('/clients/'.$orden->client->id) }}">{{ $orden->client->nombre }}</a></td>
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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Todas las Ordenes</h4>
                <p class="category">Todas las ordenes que han sido ingresadas al sistema</p>
            </div>
            <div class="card-content table-responsive">
                <div class="col-md-6">
                    <input id="filter" class="form-control" type="text" placeholder="Buscar...">
                </div>
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha (Evento)</th>
                        <th>Aprobado</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody class="searchable">
                        @foreach ($ordenes as $orden)
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>{{ $orden->client->nombre.' '.$orden->client->apellido }}</td>
                                <td>{{ $orden->fecha }}</td>
                                @if ($orden->aprobado)
                                    <td>Sí</td>
                                @else
                                    <td>No</td>
                                @endif
                                <td>{{ $orden->created_at }} </td>
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
@endsection
