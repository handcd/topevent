@php
	$comanda = $comandas->where('nombre',$nombre_comanda)->first();
@endphp

{{-- Templete para imprimir una comanda en pantalla --}}

<h5>{{$comanda->nombre}}</h5>
<table class="table table-responsive table-bordered table-striped">
	<tbody>
		@foreach ($comanda->products as $product)
			<tr>
				<td>{{$product->nombre}}</td>
				<td>
					<input type="number" id="{{$product->id}}" value="0" min="0">
					<small>{{ $product->descripcion}}</small>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<hr>