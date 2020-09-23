<html>
<head>
	<title>Registrar-se</title>
	<meta charset="utf-8">
</head>

<body>
	<a href="main"> Página inicial</a>
	<a href="listc">Ver dados dos clientes</a>
	<?php
	session_start();
	if (isset($_SESSION['err'])){
 	echo '<p align="center" style="color: red; background-color: pink">Ocorreu um erro no cadastro! Tente novamente.</p>';
 	unset($_SESSION['err']);
 	}
 	?>
	<h2>Registrar Cliente</h2>
	<p>Por favor insira os dados necessários</p>
	<div style='padding-left: 40%; padding-top: 10%;'>
		<form action='cadc.php' method='post'>
			<input required='yes' name="uname" placeholder='Nome do cliente'>
			<br/><br/>
			<input type='email' required='yes' name='email' placeholder='email'/>
			<br/><br/>
			<input required='yes' name="tel" placeholder='Número de telefone'>
			<br/><br/>
			<input required='yes' name="morada" placeholder='Morada'>
			<br/><br/>
			<input required='yes' name="data_nasc" placeholder='data de nascimento' onblur="this.type='text'"" onfocus="this.type='date'">
			<br/><br/>
			<label>Sexo:</label><br/>
			<input class='rad' required='yes' name="sexo" value='M' type='radio'>
			<label>Masculino</label>
			<br/>
			<input class='rad' required='yes' name="sexo" value='F' type='radio'>
			<label>Feminino</label>
			<br/><br/>
			<br/><br/><br/>
			<button>Confirmar</button>
		</form>
	</div>

	<style type="text/css">
		body{
			background-image: url("bg5.jpg");
			//background-repeat: no-repeat;
			background-size: 100% 100%;
		}

		input{
			border-width: 0px 0px 3px 0px;
			border-color: #000000;
			background-color: rgba(0,0,0,0);
			width: 180px;
			margin-bottom: 10px;
			color: #000;
		}

		::-webkit-input-placeholder{
			color: #000;
		}

		button{
			width: 180px;
			border-radius: 10px;
			padding: 5px;
			text-align: center;
			background-color: red;
		}

		.rad{
			width: 10px;
		}

		a{
			padding: 5px;
			color: white;
			border-size: 2px ;
			border-radius: 5px;
		}

		a : visited{
			color: white;
		}
	</style>
</body>
</html>