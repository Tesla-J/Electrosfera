<?php
	//conecta ao servidor e inicia/retoma sessao
	$host = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'electrosfera';
	$con = @mysql_connect($host, $uname, $pass) or die("Impossível conectar ao servidor"); //conecta ao servidor da bd
	mysql_set_charset("utf8"); //tipos de caracteres
	$db_con = mysql_select_db($db, $con); //seleciona a base de dados

	session_start(); //inicia sessao ou retoma
?>