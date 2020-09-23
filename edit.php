<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
require_once('global_data.php'); 
//dados so usuario actual
$qaux = 'select * from cliente where id='.$_GET['id'].';';
$queryaux = mysql_query($qaux, $con);
$result = mysql_fetch_array($queryaux);

//alteracao dos dados
if(isset($_POST['uname'])){
	require_once('global_data.php');
	$q = 'update cliente set nome="'.$_POST['uname'].'", sexo="'.$_POST["sexo"].'", data_nasc="'.$_POST["data_nasc"].'", email="'.$_POST["email"].'", morada="'.$_POST["morada"].'", tel="'.$_POST["tel"].'" where id='.$_GET['id'].' limit 1;';
	if(isset($_SESSION['uname'])) /*&& ($_SESSION['uname'] == 'root')*/{
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

	//header('location: listc');
}
?>
<h1 align="center" style="">Editar dados do cliente</h1>
<div style='padding-left: 40%; padding-top: 10%;'>
		<form action='edit.php?id=<?php echo $_GET["id"];?>' method='post'>
			<input required='yes' name="uname" placeholder='Nome do cliente' value="<?php echo $result['nome']?>">
			<br/><br/>
			<input type='email' required='yes' name='email' placeholder='email' value="<?php echo $result['email']?>" />
			<br/><br/>
			<input required='yes' name="tel" placeholder='Número de telefone' value="<?php echo $result['tel']?>">
			<br/><br/>
			<input required='yes' name="morada" placeholder='Morada' value="<?php echo $result['morada']?>">
			<br/><br/>
			<input required='yes' name="data_nasc" placeholder='data de nascimento' onblur="this.type='text'"" onfocus="this.type='date'" value="<?php echo $result['data_nasc']?>">
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