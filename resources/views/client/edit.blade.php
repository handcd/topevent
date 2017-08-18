@extends('client.create')

@section('editId',$item->id)
@section('editNombreClient',$item->nombre)
@section('editApellidoClient',$item->apellido)
@section('editEmailClient', $item->email)
@section('editPhoneClient', $item->phone)

@section('editMethod')
	{{method_field('PUT')}}
@endsection
