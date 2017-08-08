@php
	$comanda = $comandas->where('nombre',$nombre_comanda)->first();
@endphp

{{-- Templete para imprimir una comanda en pantalla --}}

<h5>{{$comanda->nombre}}</h5>
<small><i>{{$comanda->descripcion}}</i></small>
<table class="table table-responsive table-bordered table-striped">
	<tbody>
		@foreach ($comanda->products as $product)
			<tr>
				<td>{{$product->nombre}}</td>
				<td>
					<input type="number" id="producto{{$product->id}}" name="producto{{$product->id}}" min="0">
					<small><i>{{ $product->descripcion}}</i></small>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<hr>