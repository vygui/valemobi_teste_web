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
	<link href="css/estilo_home.css" rel="stylesheet" media="screen" />
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
					<li><a href="#">Negociar</a></li>
					<li><a href="#">Operações</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
	<div class="row">
		<h1>Negociar</h1>
		<form name="negociar" action="#" method="#">
			<fieldset class="col-xs-12">
				<div class="form-group">
					<label>Tipo de Operação:</label>
					<select class="form-control">
						<option value="1">Compra</option>
						<option value="2">Venda</option>
					</select>
				</div>
			</fieldset>
			
			
			<fieldset class="col-md-2">
				<div class="form-group">
					<label>Código:</label>
					<input class="form-control" type="text">
				</div>
			</fieldset>
			<fieldset class="col-md-10">
				<div class="form-group">
					<label>Nome:</label>
					<input class="form-control" type="text">
				</div>
			</fieldset>
			
			
			<fieldset class="col-md-12">
				<div class="form-group">
					<label>Tipo:</label>
					<input class="form-control" type="text">
				</div>
			</fieldset>
			<fieldset class="col-md-4">
				<div class="form-group">
					<label>Quantidade:</label>
					<input class="form-control" type="text">
				</div>
			</fieldset>
			<fieldset class="col-md-4">
				<div class="form-group">
					<label>Preço unitário:</label>
					<input class="form-control" type="text">
				</div>
			</fieldset>
			<fieldset class="col-md-4">
				<div class="form-group">
					<label>Preço total:</label>
					<input class="form-control" type="text">
				</div>
			</fieldset>
			
			<button type="button" class="btn btn-primary col-md-offset-4 col-md-4" onclick="document.negociar.submit();">Enviar</button>
		</form>
	</div>
	</div>
	
	<!-- inclusão do JS bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>