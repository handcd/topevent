{{--
	Template for printing an entire comanda group 
	Params: The comanda description and an array of the name of comandas.
--}}

<div class="comanda-group">
	
	<input class="btn btn-primary btn-block hideshow" type="button" value="{{ $descripcion }} ↓">
	<div class="comanda-group-content" style="display: none;">
		@foreach ($listacomandas as $comanda)
			@include('configurador.partials.comanda', ['nombre_comanda' => $comanda])
		@endforeach
	</div>
</div>
<hr>