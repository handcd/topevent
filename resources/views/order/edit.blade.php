@extends('order.create')

@section('editId',$item->id)
@section('editNombre',$item->nombre)
@section('editDescripcion',$item->descripcion)
@section('editPrecio', $item->precio)

@section('editMethod')
	{{method_field('PUT')}}
@endsection