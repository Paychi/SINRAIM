@extends('layouts.home')

@section('titulo')
Detalle -> {{$id}}
@stop

@section('css')
<?php HTML::style('css/view.css'); ?>
@stop

@section('content')
		
	<h1>El valor enviado para mostrar detalle es el {{$id}}</h1>
@stop

