<?php
	//termina a sessao de um usuario
	session_start();
	session_destroy();
	header('location: login.php');
?>