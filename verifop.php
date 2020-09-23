<?php  
	//avalia a opcao escolhida
	if($_POST['opcao'] == 'regf'){
		header('location: regfunc.php');
	}
	else if ($_POST['opcao'] == 'listc'){
		header('location: listc.php');
	}
	else if($_POST['opcao'] == 'curdata'){
		header('location: sobre.php');
	}
?>