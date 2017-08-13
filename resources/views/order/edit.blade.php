@extends('order.create')

@section('editId',$item->id)
@section('editUserId',$item->user_id)
@section('editFecha',$item->fecha)
@section('editDuracion',$item->duracion)
@section('editTipoEvento',$item->tipo_evento)
@section('editLugarEvento',$item->id_lugar_evento)
@section('editNombreLugarEvento',$item->nombre_lugar)
@section('editDireccionLugarEvento',$item->direccion_lugar)
@section('editNumInvitados',$item->no_invitados)
@section('editIntroduccion',$item->introduccion)
@section('editLimpieza',$item->id_limpieza)
@section('editAprobado',$item->aprobado)
@section('editNotas',$item->notas)
@section('editCotizacion',$item->cotizacion)

@foreach ($itemData as $data)
	@section('editProd'.$data->product_id,$data->valor)
@endforeach

@section('editMethod')
	{{method_field('PUT')}}
@endsection