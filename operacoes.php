<?php
	header('Content-Type: text/html; charset=utf-8');
	include 'conexao.php';
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
?>
<html lang="pt-br">
<head>
	<title>Negociar</title>
	<meta charset="utf-8" />
	<!-- define a viewport -->
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<!-- adiciona CSS bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" /> 
	<!-- adiciona JQUERY -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="icon" href="img/short_icon.png" />
	<link href="css/estilo_geral.css" rel="stylesheet" media="screen" />
	<link href="css/estilo_operacoes.css" rel="stylesheet" media="screen" />
</head>
<body>
	<!-- Superior -->
	<nav class="navbar navbar-inverse menu">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_navegacao">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
				<a class="navbar-brand" href="#"><img alt="logo" src="#"  height="28" /></a>
			</div>
			
			<div class="collapse navbar-collapse" id="menu_navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="negociar.php">Negociar</a></li>
					<li><a href="#">Operações</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	
	<div class="container">
	<div class="row">
		<h1>Histórico de Operações</h1>
		<div class="operacao">
			<p class="col-xs-2" id="id">id</p><p class="col-xs-offset-6 col-xs-2">Data:</p><p class="col-xs-2">Hora:</p>
			<p class="col-xs-8">Cod - Mercadoria</p><p class="col-xs-2">Quantidade</p>
			<p class="col-xs-8">Descrição:</p><p class="col-xs-2">Valor:</p>
		</div>
	</div>
	</div>
	
	
	
	
	<!-- inclusão do JS bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>