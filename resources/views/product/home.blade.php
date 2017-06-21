@extends('layouts.appuser')

@section('content')
<div class="row">
	@foreach ($campos as $campo)
	<div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="wit">
                <h4 class="title">{{ $campo->title }}</h4>
                <p class="category">Productos del campo</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                    	<th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    	@foreach ($campo->products as $product)
                    	<tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->nombre}}</td>
                            <td>{{$product->precio}}</td>
                            <td class="td-actions text-right">
                                <a href="{{ 'productos/'.$product->id }}" type="button" rel="tooltip" title="Ver Producto" class="btn btn-success btn-simple btn-xs">
                                    <i class="material-icons">remove_red_eye</i>
                                </a>
                                <a href="{{ 'productos/'.$product->id.'/edit' }}" type="button" rel="tooltip" title="Editar Producto" class="btn btn-primary btn-simple btn-xs">
                                    <i class="material-icons">edit</i>
                                </a>
                                <form action="{{'/productos/'.$product->id}}" method="post">
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
@endsection