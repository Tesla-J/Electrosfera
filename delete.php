<?php 

	require_once('global_data.php');
	$q = 'delete from cliente where id='.$_GET['id'].' limit 1;';

	if(isset($_SESSION['uname']) && ($_SESSION['uname'] == 'root')){
		$query = mysql_query($q, $con);

		if($query){
			header('location: listc.php');
		}else{
			echo '<h1 align="center" style="color: red;">Erro na operação</h1><br/><br/>';
			echo '<a href="listc.php">Voltar</a>';
		}
	}else{
		echo '<h1 align="center" style="color: red;">Você não tem permissão para esta operação!</h1><br/><br/>';
		echo '<a href="login.php">Faça o login como administrador!</a>';
	}


?>