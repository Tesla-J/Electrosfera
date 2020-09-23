<?php
	require_once('global_data.php');

	if($_POST['pass1'] == $_POST['pass2']){
	$table = 'usuarios';
	$q = 'insert into '.$table.' values(default,"'.$_POST['uname'].'","'.$_POST['morada'].'","'.$_POST['sexo'].'","'.$_POST['data_nasc'].'",default,"'.$_POST['ncontrib'].'","'.$_POST['email'].'","'.md5($_POST['pass1']).'");';

	$query = mysql_query($q, $con); //registra os dados

	if($query){
	header('location: login.php');
	}
	}else{
		header('location: errlogin.php');
	}
?>