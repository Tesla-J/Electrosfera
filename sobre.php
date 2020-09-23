<!DOCTYPE html>
<html>
<head>
	<title>Sobre nós</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION['uname'])){
			header('location: main.php');
		}
	?>

	<p class='links'>
		<a href='login.php'>Login</a>
		<a href='reg.php'>Registrar-se</a>
	</p>
	<h1 align="center"><u>Sobre nós</u></h1>
	<div style="padding: 10% 20%">
		<div class='meio'>
		<p>
			Olá, bem vindo à Electrosfera.<br/>
			Nós somos uma empresa de distribuição de energia limpa barata.<br/><br/>
			Estamos disponíveis em todas as zonas do país, o que nos torna mais próximo de si.<br>
			Os nossos serviços são de qualidade, não irá se arrepender.
		</p>
		</div>
	</div>

	<style type="text/css">
		body{
			background-image: url(bg6.jpg);
		}

		.meio{
				padding: 15px;//20% 40%;
				//padding-left: 10%;
				background-color: rgba(255,255,255,0.7);
		}

		.links{
			background-color: rgba(0,0,0,0.3);
			width: 100%;
			padding-top: 10px;
			padding-bottom: 10px;
			top: 0px;

		}

		a {
			padding: 5px;
			color: white;
			border-width: 2px ;
			border-radius: 5px;
			border-color: white;

		}

	</style>
</body>
</html>