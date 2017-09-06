<?php
	//cabeçalho PHP
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
	<link href="css/estilo_negociar.css" rel="stylesheet" media="screen" />	
</head>
<body>
	<!-- Superior -->
	<nav class="navbar navbar-inverse menu_topo">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_navegacao">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
				<a class="navbar-brand" href="#"></a>
			</div>
			
			<div class="collapse navbar-collapse" id="menu_navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Negociar</a></li>
					<li><a href="operacoes.php">Operações</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
	<div class="row">
		<h1>Negociar</h1>
		
		<div class="col-md-12" id="contato_enviado">
			<p id="mensagem_contato">Mensagem enviada com sucesso!</p>
		</div>
		
		<form name="negociar" id="negociar" action="gravar_op.php" method="POST">
			<fieldset class="col-xs-12">
				<div class="form-group">
					<label>Tipo de Operação:</label>
					<select class="form-control" name="tipo_op">
						<option value="1">Compra</option>
						<option value="2">Venda</option>
					</select>
				</div>
			</fieldset>
			
			
			<fieldset class="col-md-2">
				<div class="form-group">
					<label>Código:</label>
					<input class="form-control codigo" type="text" id="codigo" name="codigo" />
				</div>
			</fieldset>
			<fieldset class="col-md-10">
				<div class="form-group">
					<label>Nome:</label>
					<input class="form-control" type="text" name="nome" />
				</div>
			</fieldset>
			
			
			<fieldset class="col-md-12">
				<div class="form-group">
					<label>Tipo:</label>
					<input class="form-control" type="text" name="tipo" />
				</div>
			</fieldset>
			<fieldset class="col-md-4">
				<div class="form-group">
					<label>Quantidade:</label>
					<input class="form-control" type="text" id="quantidade" name="quantidade" />
				</div>
			</fieldset>
			
			<fieldset class="col-md-4 col-md-offset-4 col-md-4">
				<div class="form-group">
					<label>Preço total:</label>
					<input class="form-control preco" type="text" name="preco_total" />
				</div>
			</fieldset>
			
			<button type="submit" id="bt_enviar" class="btn btn-primary col-md-offset-4 col-md-4">Gravar</button>
		</form>
		
		
	</div>
	</div>
	
	
	
	<!-- inclusão do JS bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- inclusão outros JS -->
	<script src="js/jquery/jquery.mask.min.js"></script>
	<script src="js/app.js"></script>
	
	<!-- Configuração das máscaras -->
	<script>
		$(document).ready(function(){
			$('.preco').mask('000.000.000.000.000,00', {reverse: true});
			$('.codigo').mask('0000', {reverse: true});
		});
	</script>
</body>
</html>