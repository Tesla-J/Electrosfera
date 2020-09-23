<?php
	//carrega variaveis e funcoes necessarias
	require_once('global_data.php');

	$q = 'select nome from usuarios where nome="'.$_POST['uname'].'" and senha="'.md5($_POST['passwd']).'";'; //requisicao sql

	$query = mysql_query($q, $con);

	$data = mysql_fetch_array($query);

	if(!$data['nome']){
		$_SESSION['err'] = !0;
		header('location: login.php');
	}else{
		$_SESSION['uname'] = $_POST['uname'];
		header('location: main.php');
	}
?>