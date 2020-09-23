<?php
	require_once('global_data.php');

	$table = 'cliente';
	$contrato = rand(1,10000);
	$q = 'insert into '.$table.' values(default,"'.$_POST['uname'].'","'.$_POST['sexo'].'","'.$_POST['data_nasc'].'","'.$_POST['morada'].'","'.$contrato.'","'.$_POST['email'].'","'.$_POST['tel'].'");';

	$query = mysql_query($q, $con); //registra os dados

	if($query){
	header('location: main.php');
	}
	else{
		$_SESSION['err'] = 1;
		header('location: regfunc.php');
	}
?>