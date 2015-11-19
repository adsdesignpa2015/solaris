@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/cadastrocandidato.css">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span class="blue-arrow-right"></span> DADOS PESSOAIS</h1>
			<div class="white-box">
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Nome Completo:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> E-mail:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> CPF:</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Telefone:</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Estado:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<select class="select">
							<option value="1">Selecione</option>
							<option value="1">MG</option>
							<option value="1">SP</option>
							<option value="1">RJ</option>
							<option value="1">PR</option>
							<option value="1">RG</option>
						</select>
					</div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Cidade:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<select class="select">
							<option value="1">Selecione</option>
							<option value="1">Belo Horizonte</option>
							<option value="1">Ibirite</option>
							<option value="1">Betim</option>
							<option value="1">Contagem</option>
							<option value="1">Ipatinga</option>
						</select>
					</div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Deficiência:</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<input type="checkbox" id="auditiva" class="input-checkbox"> <label for="auditiva">Auditiva</label>
						<input type="checkbox" id="Visual" class="input-checkbox"> <label for="Visual">Visual</label>
						<input type="checkbox" id="Motora" class="input-checkbox"> <label for="Motora">Motora</label>
						<input type="checkbox" id="Fala" class="input-checkbox"> <label for="Fala">Fala</label>
						<input type="checkbox" id="Intelectual" class="input-checkbox"> <label for="Intelectual">Intelectual</label>
						<input type="checkbox" id="Outra" class="input-checkbox"> <label for="Outra">Outra</label>
					</div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Login:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Senha:</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Confirmar Senha:</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="password" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Nome Completo:</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="password" class="input-text"></div>					
				</div>				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span class="blue-arrow-right"></span> CARGO DE INTERESSE</h1>
			<div class="white-box">
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Cargo:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Pretensao Salarial:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<select class="select">
							<option value="1">Selecione</option>
							<option value="1">500R$ - 1.000R$</option>
							<option value="1">1.000R$ - 1.500R$</option>
							<option value="1">1.500R$ - 2.000R$</option>
							<option value="1">2.000R$ - 3.000R$</option>
							<option value="1">3.000R$ - 5.0000R$</option>
							<option value="1">5000R$ - 10.000R$</option>
						</select>
					</div>					
				</div>
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Está Empregado?:</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<input type="checkbox" id="Sim" class="input-checkbox"> <label for="Sim">Sim</label>
						<input type="checkbox" id="Não" class="input-checkbox"> <label for="Não">Não</label>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span class="blue-arrow-right"></span> CURRÍCULO</h1>
			<div class="white-box">
				<div class="row">					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Currículo:</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="file" class="input-text"></div>					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
			<a href=""><img src="img/icon-ok.png">CONCLUIR</a>
		</div>
	</div>
</div>
@endsection