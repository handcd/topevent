@extends('layouts.appuser')

@section('content')
<div class="row">
	<div class="col-md-6">
        <input id="filter" class="form-control" type="text" placeholder="Buscar...">
    </div>
    <div class="col-md-6">
        <a href="/comandas/create" class="btn btn-success">
            <i class="fa fa-cart-plus" aria-hidden="true"></i> Añadir Producto
        </a>
    </div>
</div>
<div class="row">
	@foreach ($comandas as $comanda)
	<div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">{{ $comanda->nombre }}</h4>
                <p class="category">{{ $comanda->descripcion }}</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                    	<th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody class="searchable">
                    	@foreach ($comanda->products as $product)
                    	<tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->nombre}}</td>
                            <td>{{$product->precio}}</td>
                            <td class="td-actions text-right">
                                <a href="{{ 'comandas/'.$product->id.'/edit' }}" type="button" rel="tooltip" title="Editar Producto" class="btn btn-primary btn-simple btn-xs">
                                    <i class="material-icons">edit</i>
                                </a>
                                <form action="{{'/comandas/'.$product->id}}" method="post">
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
    @endforeach
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