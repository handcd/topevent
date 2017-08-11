@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Clientes</h4>
                <p class="category">Clientes que han ingresado una orden al sistema</p>
            </div>
            <div class="card-content table-responsive">
                <div class="col-md-6">
                    <input id="filter" class="form-control" type="text" placeholder="Buscar...">
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/clientes/create') }}" class="btn btn-success pull-right">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Añadir Cliente
                    </a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><strong>ID</strong></th>
                            <th><strong>Nombre(s)</strong></th>
                            <th><strong>Apellido(s)</strong></th>
                            <th><strong>Correo Electrónico</strong></th>
                            <th><strong>Fecha de Registro</strong></th>
                            <th><strong>Acciones</strong></th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->apellido}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->created_at}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ 'clientes/'.$cliente->id }}" type="button" rel="tooltip" title="Ver Cliente" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="{{ 'clientes/'.$cliente->id.'/edit' }}" type="button" rel="tooltip" title="Editar Cliente" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form action="{{'/clientes/'.$cliente->id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-simple btn-xs" type="button" rel="tooltip" title="Eliminar Cliente"><i class="material-icons">close</i></button>
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
    $(document).ready(function () {

        (function ($) {

            $('#filter').keyup(function () {

                var rex = new RegExp($(this).val(), 'i');
                $('.searchable tr').hide();
                $('.searchable tr').filter(function () {
                    return rex.test($(this).text());
                }).show();

            })

        })(jQuery);

    });
</script>
@endsection
