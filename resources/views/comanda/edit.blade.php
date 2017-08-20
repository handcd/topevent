@extends('comanda.create')

@section('editId',$item->id)
@section('editNombre',$item->nombre)
@section('editDescripcion',$item->descripcion)
@section('editPrecio', $item->precio)
@section('editComanda',$item->comanda)
@section('editCampo',$item->campo)

@section('editMethod')
	{{method_field('PUT')}}
@endsection
