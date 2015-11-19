@extends('layouts.master')
			@section('content')
			<link rel="stylesheet" type="text/css" href="css/index.css">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div class="news">
							<h1><span class="blue-arrow-right"></span> ÚLTIMAS NOTÍCIAS</h1>
							<div class="white-box clearfix">
								<img src="img/example-news.png">
								<h2>TÍTULO DA MATÉRIA</h2>
								<p>
									Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição 
									Descrição Descrição Descrição Descrição Descrição Descrição Descrição...
								
								</p>
								<a href="index.html" class="read-more">LEIA MAIS <span class="white-arrow-right"></span></a>
							</div>
							<div class="white-box clearfix">
								<img src="img/example-news.png">
								<h2>TÍTULO DA MATÉRIA</h2>
								<p>
									Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição 
									Descrição Descrição Descrição Descrição Descrição Descrição Descrição...
								
								</p>
								<a href="index.html" class="read-more">LEIA MAIS <span class="white-arrow-right"></span></a>
							</div>
							<div class="white-box clearfix">
								<img src="img/example-news.png">
								<h2>TÍTULO DA MATÉRIA</h2>
								<p>
									Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição 
									Descrição Descrição Descrição Descrição Descrição Descrição Descrição...
								
								</p>
								<a href="index.html" class="read-more">LEIA MAIS <span class="white-arrow-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
						<div class="search">
							<form action="index.html">
								<input type="text" class="input-text" placeholder="O que você está procurando?">
								<button type="submit" style="border: 0; background: transparent" class="seach-button">
									<img src="img/search.png" alt="submit" />
								</button>
							</form>
						</div>
						<div class="ranking">
							<h1>RANKING <span class="blue-arrow-left"></span></h1>
							<div class="white-box">
								<p>Empresas mais bem avaliada pelos usuários:</p>
								<div class="company clearfix">
									<img src="img/example-ranking.png">
									<div class="evaluation">
										<p>UNA</p>
										<p>
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
										</p>
									</div>
									<div class="order">
										<div class="number">1</div>
									</div>
									
								</div>
								<div class="company clearfix">
									<img src="img/example-ranking.png">
									<div class="evaluation">
										<p>UNA</p>
										<p>
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-half.png">
										</p>
									</div>
									<div class="order">
										<div class="number">2</div>
									</div>
									
								</div>
								<div class="company clearfix">
									<img src="img/example-ranking.png">
									<div class="evaluation">
										<p>UNA</p>
										<p>
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-complete.png">
											<img src="img/star-half.png">
											<img src="img/star-empty.png">
										</p>
									</div>
									<div class="order">
										<div class="number">3</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="public">
							<h1>PRÓXIMO CONCURSO <span class="blue-arrow-left"></span></h1>
							<div class="white-box clearfix">
								<p>O próximo concurso mais perto de você é:</p>
								<p>TRT - 3&ordf; REGIÃO</p><img src="img/public-button.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			@endsection