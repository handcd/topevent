@php
	$comanda = $comandas->where('nombre',$nombre_comanda)->first();
@endphp

{{-- Templete para imprimir una comanda en pantalla --}}

<h1>{{$comanda->nombre}}</h1>
<table class="table table-responsive">
	<tbody>
		@foreach ($comanda->products as $product)
			<tr>
				<td>{{$product->nombre}}</td>
				<td><input type="number" id="{{$product->id}}" value="0" min="0"></td>
			</tr>
		@endforeach
	</tbody>
</table>