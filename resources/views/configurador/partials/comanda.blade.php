@php
	$comanda = $comandas->where('nombre',$nombre_comanda)->first();
@endphp

{{-- Templete para imprimir una comanda en pantalla --}}

@if (!empty($comanda))
<div id="card-comanda">
	<div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title">{{ $comanda->nombre }}</h4>
            <p class="category">{{ $comanda->descripcion }}</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <tbody>
                	@foreach ($comanda->products as $product)
                		<tr>
                			<td>{{ $product->nombre }}</td>
                			<td><input type="text"></td>
                			<td>{{ $product->descripcion }}</td>
                		</tr>
                	@endforeach
                </tbody>
            </table>
        </div>
	</div>
</div>
@endif