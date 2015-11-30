@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="css/empresas.css">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
			<div class="search">
				<form action="index.html">
					<input type="text" class="input-text" placeholder="O que você está procurando?">
					<button type="submit" style="border: 0; background: transparent" class="seach-button">
						<img src="img/search.png" alt="submit" />
					</button>
				</form>
			</div>
		</div>
	</div>		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><span class="blue-arrow-right"></span> VAGAS DE EMPREGO PARA DESIGN GRÁFICO</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="white-box filter">
				<h3>10 MELHORES</h3>
				<input type="checkbox" id="empresas"> <label for="empresas">TOP 10 Empresas</label>
				<h3>CIDADE</h3>
				<select>
					<option>Selecione</option>
				</select>
				<h3>NÍVEL</h3>
				<input type="checkbox" id="fundamental"> <label for="fundamental">Fundamental</label><br>
				<input type="checkbox" id="Médio"> <label for="Médio">Médiol</label><br>
				<input type="checkbox" id="Superior"> <label for="Superior">Superior</label><br>
				<input type="checkbox" id="Pós Graduado"> <label for="Pós Graduado">Pós Graduado</label>
				<h3>ÁREA</h3>
				<select>
					<option>Selecione</option>
				</select>
				<h3>SERVIÇO</h3>
				<select>
					<option>Selecione</option>
				</select>
				<h3>SALÁRIO</h3>
				<input type="checkbox" id="salario1"> <label for="salario1">A partir de R$1.000,00</label><br>
				<input type="checkbox" id="salario2"> <label for="salario2">A partir de R$2.000,00</label><br>
				<input type="checkbox" id="salario3"> <label for="salario3">A partir de R$3.000,00</label><br>
				<input type="checkbox" id="salario4"> <label for="salario4">A partir de R$4.000,00</label>
				<h3>PORTE DA EMPRESA</h3>
				<input type="checkbox" id="Pequeno"> <label for="Pequeno"> Pequeno Porte</label><br>
				<input type="checkbox" id="Intermediário"> <label for="Intermediário"> Médio Porte</label><br>
				<input type="checkbox" id="Grande"> <label for="Grande"> Grande Porte</label><br>
				<input type="submit" class="input-submit" value="FILTRAR">
			</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 concursos">
			<div class="white-box">
				<img src="img/example-ranking.png">
				<h2>DEFENSORIA PÚBLICA DA UNIÃO (DPU)</h2>
				<h4>
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
				</h4>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<p>
							A Defensoria pública da União (DPU) está com o prazo de inscrição reaberto para o Concurso Público com 141 vagas
							para cargos de níveis médio e superior, e formação de cadastros de reserva....
						</p>
					</div>
					<a href="#">DETALHES</a>
				</div>
			</div>
			<div class="white-box">
				<img src="img/example-ranking.png">
				<h2>DEFENSORIA PÚBLICA DA UNIÃO (DPU)</h2>
				<h4>
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
				</h4>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<p>
							A Defensoria pública da União (DPU) está com o prazo de inscrição reaberto para o Concurso Público com 141 vagas
							para cargos de níveis médio e superior, e formação de cadastros de reserva....
						</p>
					</div>
					<a href="#">DETALHES</a>
				</div>
			</div>
			<div class="white-box">
				<img src="img/example-ranking.png">
				<h2>DEFENSORIA PÚBLICA DA UNIÃO (DPU)</h2>
				<h4>
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
				</h4>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<p>
							A Defensoria pública da União (DPU) está com o prazo de inscrição reaberto para o Concurso Público com 141 vagas
							para cargos de níveis médio e superior, e formação de cadastros de reserva....
						</p>
					</div>
					<a href="#">DETALHES</a>
				</div>
			</div>
			<div class="white-box">
				<img src="img/example-ranking.png">
				<h2>DEFENSORIA PÚBLICA DA UNIÃO (DPU)</h2>
				<h4>
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
					<img src="img/star-complete.png">
				</h4>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<p>
							A Defensoria pública da União (DPU) está com o prazo de inscrição reaberto para o Concurso Público com 141 vagas
							para cargos de níveis médio e superior, e formação de cadastros de reserva....
						</p>
					</div>
					<a href="#">DETALHES</a>
				</div>
			</div>
			
		</div>
	</div>
</div>


@endsection