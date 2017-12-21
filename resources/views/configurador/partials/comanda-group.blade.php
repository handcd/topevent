{{--
	Template for printing an entire comanda group 
	Params: The comanda description and an array of the name of comandas.
--}}

<div class="comanda-group">
	<button class="btn btn-primary btn-block hideshow" type="button">
		{{ $descripcion }}
		<i class="fa fa-angle-down" aria-hidden="true"></i>
	</button>
	
	<div class="comanda-group-content" style="display: none;">
		@foreach ($listacomandas as $comanda)
			@include('configurador.partials.comanda', ['nombre_comanda' => $comanda])
		@endforeach
	</div>
</div>
<hr>