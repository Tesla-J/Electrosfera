<html>
<head>
	<title>Login</title>
	<meta charset="utf8"/>
</head>


<body>
<a href="sobre" style="right: 100%; ">Sobre</a>
<?php
	session_start(); 
 if(isset($_SESSION['uname']))
 	header('location: main.php');
 else if (isset($_SESSION['err'])){
 	echo '<p align="center" style="color: red; background-color: pink">Usuário ou senha inválidos! Tente novamente.</p>';
 	unset($_SESSION['err']);
 }
 ?>

	<div align="center" style=' padding-top: 10%; '>
		<h1 align="center">Electrosfera</h1>
		<form action="verif.php" method="post">
			<input name='uname' id='uname' placeholder="Nome de usuário" required="yes" />
			<br/><br/>
			<input name='passwd' id='passwd' placeholder="Senha" type="password" required="yes"/>
			<br/><br/><br/>
			<button style='padding: 5px; border-radius: 10px; text-align: center; background-color: red; color: white; width: 180px;'>Entrar</button>
		</form>
		
		<p>Ainda não tem uma conta? <a style="color: red;" href="reg.php">Registre-se</a></p>
	</div>

	<style type="text/css">
		body{
			background-image: url("bg.jpg");
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}

		::-webkit-input-placeholder{
			color: white;
		}

		input{
			//border-radius: 10px;
			//padding: 5px;
			//text-align: center;
			border-width: 0px 0px 3px 0px;
			border-color: #000000;
			background-color: rgba(0,0,0,0);
			width: 180px;
			margin-bottom: 10px;
			color: white;
		}

		h1{
			color red
		}

		a{
			color: white;
		}

		a : visited{
			color: white;
		}
	</style>
</body>
</html>