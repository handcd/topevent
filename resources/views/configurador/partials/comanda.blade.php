@php
	$comanda = $comandas->where('nombre',$nombre_comanda)->first();
@endphp

{{-- Templete para imprimir una comanda en pantalla --}}

@if (!empty($comanda))
<div id="card-comanda">
	<div class="card">
        <div class="card-header" data-background-color="wit">
            <h4 class="title">{{ $comanda->nombre }}</h4>
            <p class="category">{{ $comanda->descripcion }}</p>
        </div>
        <div class="card-content table-responsive">
            <table class="table table-hover">
                <tbody>
                	@foreach ($comanda->products as $product)
                		<tr>
                			<td>{{ $product->nombre }}</td>
                			<td>
                				@if ($product->campo->html == 'text')
                					<div class="form-group">
                						<input type="text" placeholder="Texto..." id="producto{{ $product->id }}" name="producto[{{ $product->id }}]" class="form-control">
                					</div>
                				@elseif ($product->campo->html == "number")
                					<div class="form-group">
                						<input type="number" id="producto{{ $product->id }}" name="producto[{{ $product->id }}]" placeholder="#" class="form-control">
                					</div>
                				@elseif ($product->campo->html == "checkbox")
                					<div class="checkbox">
                						<label>
                							<input type="checkbox" name="producto[{{ $product->id }}]" id="producto{{ $product->id }}">
                						</label>
                					</div>
                				@endif
                			</td>
                			<td>{{ $product->descripcion }}</td>
                		</tr>
                	@endforeach
                </tbody>
            </table>
        </div>
	</div>
</div>
@else
<h3>Comanda {{ $nombre_comanda }} vacía!</h3>
@endif