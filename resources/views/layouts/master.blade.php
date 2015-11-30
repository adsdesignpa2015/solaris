<html>  
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-6 hidden-xs">
						<div class="container-logo">
							<a href="/"><img src="img/logo.png"></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-5 col-lg-offset-3 col-md-offset-3 col-sm-offset-1">
						<div class="container-login">
							<div>
								<span><a href="cadastro">CADASTRA-SE</a></span>
								<div>
									<input type="text" id="login" name="" class="input-text"  placeholder="LOGIN" >
									<input type="text" id="password" name="" class="input-text"  placeholder="SENHA">
									<input type="submit" class="input-submit" value="OK">
								</div>
							</div>
						</div>
						
						<!--
						<div class="container-welcome">
							<div>
								<span>BEM-VINDO</span>
								<div class="blue-box">
									<image src="img/avatar.png">
									<span>Olá, Visitante</span>
									<span>Você tem <span class="NexaBold">0 mensagens</span> não lidas.</span>
									<span><a href="index.html">Editar dados</a> | <a href="index.html">Sair</a></span>
								</div>
							</div>
						</div>-->
						
					</div>
				</div>
			</div>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand visible-xs-inline" href="#"><img src="img/solaris-footer.png"></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="/">HOME</a></li>
							<li><a href="vagas">VAGAS</a></li>
							<li><a href="empresas">EMPRESAS</a></li>
							<li><a href="concursos">CONCURSOS</a></li>
							<li><a href="noticias">NOTÍCIAS</a></li>
						</ul>
					</div>
				</div>
			</nav>			
			
		</header>	
		<section>
			@yield('content')
		</section>
		<footer class="footer">			
			<p><img src="img/solaris-footer.png" class="hidden-xs"> COPYRIGHT &copy; SOLARIS VAGAS PARA PCD - TODOS OS DIREITOS RESERVADOS . <a href="#">FALE CONOSCO</a></p>
		</footer>
	</body>
</html>