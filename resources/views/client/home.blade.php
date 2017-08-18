@extends('layouts.appuser')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">Clients</h4>
                <p class="category">Clients que han ingresado una orden al sistema</p>
            </div>
            <div class="card-content table-responsive">
                <div class="col-md-6">
                    <input id="filter" class="form-control" type="text" placeholder="Buscar...">
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/clients/create') }}" class="btn btn-success pull-right">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Añadir Client
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
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->nombre}}</td>
                                <td>{{$client->apellido}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->created_at}}</td>
                                <td class="td-actions text-right">
                                    <a href="{{ url('/clients/'.$client->id) }}" type="button" rel="tooltip" title="Ver Client" class="btn btn-success btn-simple btn-xs">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                    <a href="{{ url('/clients/'.$client->id.'/edit') }}" type="button" rel="tooltip" title="Editar Client" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form action="{{ url('/clients/'.$client->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-simple btn-xs" type="button" rel="tooltip" title="Eliminar Client"><i class="material-icons">close</i></button>
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
