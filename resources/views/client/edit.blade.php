@extends('client.create')

@section('editId',$item->id)
@section('editNombreCliente',$item->nombre)
@section('editApellidoCliente',$item->apellido)
@section('editEmailCliente', $item->email)
@section('editPhoneCliente', $item->phone)

@section('editMethod')
	{{method_field('PUT')}}
@endsection
