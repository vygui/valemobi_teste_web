<?php
	//cabeçalho PHP
	header('Content-Type: text/html; charset=utf-8');
	include 'conexao.php';
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	
	//busca dos valores enviados atraves do formulario 'negociar' em 'negociar.php'
	$tipo_op = $_POST['tipo_op'];
	//o 'id' da operação é um auto-incremet da tabela
	$codigo_pd = $_POST['codigo'];
	$nome_pd = $_POST['nome'];
	$tipo_pd = $_POST['tipo'];
	$quantidade_pd = $_POST['quantidade'];
	//especificação enviada -> trabalhar apenas com um preco -> preco_total
	$preco_total = $_POST['preco_total'];
	//formatacao do preco
	//$preco_total = floatval($preco_total);
	//echo $preco_total;
	//$preco_total = number_format($preco_total, 2, '.', ',');
	//echo $preco_total;
	
	//inclusao dos dados na tabela 'tab_operacoes'
	$sql = "INSERT INTO tab_operacoes (codigo_mercadoria, nome_mercadoria, tipo_mercadoria, quantidade, preco, tipo_negocio) VALUES ('$codigo_pd', '$nome_pd', '$tipo_pd', '$quantidade_pd', '$preco_total', '$tipo_op')";
	mysql_query($sql) or die (mysql_error());
	
?>