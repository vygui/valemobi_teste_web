<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "valemobi_db";
	
	$conexao = @mysql_connect ($host, $usuario, $senha) or die (mysql_error());
	
	mysql_select_db ($banco) or die (mysql_error());
?>