@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="css/contato.css">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span class="blue-arrow-right"></span> FALE CONOSCO</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<input class="text-form" type="text" placeholder="Nome">
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<input class="text-form" type="text" placeholder="E-mail">
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<textarea class="text-form" placeholder="Mensagem"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
			<input type="submit" class="submit-form" value="ENVIAR">
		</div>
	</div>
</div>


@endsection