@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/cadastro.css">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span class="blue-arrow-right"></span> QUEM É VOCÊ?</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
			<a href="cadastrocandidato"><img src="img/icon-deficiente.png">CANDIDATO</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset- col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
			<a href="cadastroempresa"><img src="img/icon-build.png">EMPRESA</a>
		</div>
	</div>
</div>
@endsection