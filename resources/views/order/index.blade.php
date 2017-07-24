@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Ganancias</p>
                <h3 class="title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Última semana
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
                <p class="category">Ordenes</p>
                <h3 class="title">49/50</h3>
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
                <p class="category">Ordenes Peridas</p>
                <h3 class="title">75</h3>
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
            <div class="card-header" data-background-color="green">
                <h4 class="title">Ordenes Nuevas</h4>
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
                        <tr>
                            <td></td>
                            <td><input type="text" name=""></td>
                            <td><input type="text" name=""></td>
                            <td class="td-actions text-right">
                            </td>
                        </tr>
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Juan</td>
                                <td>22/07/2017</td>
                                <td class="td-actions text-right">
                                    <a href="/dashboard" type="button" rel="tooltip" title="Ver Cliente" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="/dashboard" type="button" rel="tooltip" title="Editar Cliente" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="/dashboard" type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="material-icons">close</i>
                                    </a>
                                </td>
                            </tr>
                        @endfor
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header" data-background-color="orange">
                <h4 class="title">Ordenes En Progreso</h4>
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
                        <tr>
                            <td></td>
                            <td><input type="text" name=""></td>
                            <td><input type="text" name=""></td>
                            <td class="td-actions text-right">
                            </td>
                        </tr>
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Juan</td>
                                <td>22/07/2017</td>
                                <td class="td-actions text-right">
                                    <a href="/dashboard" type="button" rel="tooltip" title="Ver Cliente" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="/dashboard" type="button" rel="tooltip" title="Editar Cliente" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="/dashboard" type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="material-icons">close</i>
                                    </a>
                                </td>
                            </tr>
                        @endfor
                        
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
                        <th>ID Cliente</th>
                        <th>Fecha (Evento)</th>
                        <th>Aprobado</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody class="searchable">
                        @foreach ($ordenes as $orden)
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>{{ $orden->user_id }}</td>
                                <td>{{ $orden->fecha }}</td>
                                @if ($orden->aprobado)
                                    <td>Sí</td>
                                @else
                                    <td>No</td>
                                @endif
                                <td>{{ $orden->created_at }} </td>
                                <td class="td-actions text-right">
                                    <a href="/dashboard" type="button" rel="tooltip" title="Ver Cliente" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="/dashboard" type="button" rel="tooltip" title="Editar Cliente" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="/dashboard" type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="material-icons">close</i>
                                    </a>
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
