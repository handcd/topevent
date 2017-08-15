@php
	$comanda = $comandas->where('nombre',$nombre_comanda)->first();
@endphp

{{-- Templete para imprimir una comanda en pantalla --}}

<h5>{{$comanda->nombre}}</h5>
<strong><i>{{$comanda->descripcion}}</i></strong>
<table class="table table-responsive table-bordered table-striped">
	<tbody>
		@foreach ($comanda->products as $product)
			<tr>
				<td>{{$product->nombre}}</td>
				<td>
					@if ($product->seccion_comanda)
						<input type="text" style="display: none;" name="producto[]">
					@else
						<input type="text" id="producto{{$product->id}}" name="producto[]"  placeholder="Valor...">
					@endif
					<small><i>{{ $product->descripcion}}</i></small>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<hr>