@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/cadastroempresa.css">
<div class="container">
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1><span class="blue-arrow-right"></span> DADOS DO RESPONSÁVEL PELO CADASTRO</h1>
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
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Confirme o e-mail:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
				</div>
			</div>
	</div>
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1><span class="blue-arrow-right"></span> DADOS DA EMPRESA</h1>
				<div class="white-box">
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Nome Fantasia:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Razão Social:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Ramo de Atividade:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<select class="select">
								<option value="1">Selecione</option>
								<option value="1">Atividade 1</option>
								<option value="1">Atividade 2</option>
								<option value="1">Atividade 3</option>
								<option value="1">Atividade 4</option>
								<option value="1">Atividade 5</option>
							</select>
						</div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> N de Funcionários:</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<select class="select">
								<option value="1">Selecione</option>
								<option value="1">0 - 50</option>
								<option value="1">50 - 100</option>
								<option value="1">100 - 200</option>
								<option value="1">200 - 400</option>
								<option value="1">400 - 800</option>
								<option value="1">800 - 1500</option>
							</select>
						</div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> País de Origem:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<select class="select">
								<option value="1">Selecione</option>
								<option value="1">Brasil</option>
								<option value="1">Estados Unidos</option>
								<option value="1">Argentina</option>
								<option value="1">Inglaterra</option>
								<option value="1">Egito</option>
							</select>
						</div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> CNPJ:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
				</div>
			</div>
	</div>
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1><span class="blue-arrow-right"></span> LOCALIZAÇÃO E CONTATO</h1>
				<div class="white-box">
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> CEP:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Endereço:</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Número:</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>	
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Complemento:</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>		
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Bairro:</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>	
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Estado:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<select class="select">
								<option value="1">Selecione</option>
								<option value="1">PR</option>
								<option value="1">SP</option>
								<option value="1">RJ</option>
								<option value="1">MS</option>
								<option value="1">NT</option>
							</select>
						</div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Cidade:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<select class="select">
								<option value="1">Selecione</option>
								<option value="1">Belo Horizonte</option>
								<option value="1">Contagem</option>
								<option value="1">Betim</option>
								<option value="1">Ibirite</option>
								<option value="1">Sete Lagoas</option>
							</select>
						</div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Telefone:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
				</div>
			</div>
	</div>
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1><span class="blue-arrow-right"></span> DADOS DE ACESSO</h1>
				<div class="white-box">
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Login:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="text" class="input-text"></div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Senha:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="password" class="input-text"></div>					
					</div>
					<div class="row">					
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><span class="required-asterisk">*</span> Confirme a Senha:</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><input type="password" class="input-text"></div>					
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