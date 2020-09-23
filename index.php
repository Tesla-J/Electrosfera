<?php
	//carrega variaveis e funcoes uteis
	require_once('global_data.php');
	//verifica se base de dados existe
	if(!$db_con){
		echo '<p style="color:red;">Erro ao selecionar base de dados!</p>';
	}else{
		//verifica se existe uma sessao iniciada
		if(isset($_SESSION['uname'])){
			//manda para a pagina principal se tiver sessao iniciada
			header("location: main.php");
		}else{
			//se nao tiver sessao iniciada, manda para o login
			header("location: sobre.php");
		}
	}
?>