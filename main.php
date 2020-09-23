<html>
	<head>
		<title>Página inicial</title>
		<meta charset="utf-8">
	</head>

	<body>
	<div style='padding: 10% 20%'>
		<p style="font-size: 240%; text-shadow: 3px 5px 3px #333; color: #fff">
			<?php
				session_start();
				echo 'Usuário actual: '.$_SESSION['uname'];
				if(!$_SESSION['uname']) header('location: login.php');
			?>
		</p>
		<div class='meio'>
		<form action='verifop.php' method='post'>
			
			<select name='opcao'>
			<option value='listc'>Mostrar dados de clientes</option>
			<!--<option value='curdata'>Sobre</option>-->
			<option value='regf'>Registrar cliente</option>
			</select>
			<br/><br/>
			<button>Confirmar</button>
		</form>

		<form action='logout.php' method='post'>
			<button onclick="">Sair</button>
		</form>
		</div>
	</div>
		<style type="text/css">
			body{
				background-image: url(bg3.jpg);
				//padding-left: 30px;
				background-size: 100% 100%

			}

			select{
				border: 0px 0px 0px 3px;
				text-align: center;
				background-color: rgba(0,0,0,0);
				width: 160%;
			}

			button{
				padding: 10px;
				font-size: 
				border-radius: 10px;
				text-align: center;
				background-color: #f00;
				color: white;
				width: 160%;
			}

			.meio{
				padding: 20% 40%;
				padding-left: 10%;
				background-color: rgba(255,255,255,0.5);
			}

		</style>
	</body>
</html>