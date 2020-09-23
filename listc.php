<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
	<a href='main.php'>Página principal</a>
	<h1 align="center">Informações dos clientes</h1>
	<div style="padding: 10% 20%"><div class="meio">
	<form action='listc' method='post'>
		<input type="text" name="cname"><button>Pesquisar</button>
		<br><br>
	</form>

<?php
	require_once('global_data.php');
	
	if(isset($_POST['cname'])){
		$query = 'select * from cliente where nome like "%'.$_POST['cname'].'%";';
		$data = mysql_query($query, $con);
?>
		<!-- inicia da tabela -->
		<table border="2" align="center">
		<tr>
			<th>Nome</th>
			<th>Sexo</th>
			<th>Data de nascimento</th>
			<th>Morada</th>
			<th>E-mail</th>
			<th>Contacto telefónico</th>
			<th>Consumo em KW/mes</th>
			<th>Preço do consumo (Kz)</th>

<?php
		//if(isset($_SESSION['uname']) && ($_SESSION['uname'] == 'root')){
			echo '<td> Acção </td>';
		//}
?>
		</tr>
		
<?php
		while ($result = mysql_fetch_array($data)){
			$watt = (rand(1000, 6000))*30/1000;
			$preco = 0;
			if($watt >= 30 && $watt <= 60){
				$preco = 2.46*720; 
			}
			else if( $watt > 60 && $watt <= 90){
				$preco = 6.73*720;
			}
			else if ( $watt > 90 && $watt <= 120){
				$preco = 10.24*720;
			}
			else if($watt > 120 && $watt <= 150){
				$preco = 12.59*720;
			}
			else{
				$preco = 15.6*720;
			}
			echo '<tr> <td>'.$result['nome'].'</td> <td>'.$result['sexo'].'</td> <td>'.$result['data_nasc'].'</td> <td>'.$result['morada'].'</td> <td>'.$result['email'].'</td> <td>'.$result['tel'].'</td> <td>'.$watt.'</td> <td>'.$preco.'</td> ';
			//if(isset($_SESSION['uname']) && ($_SESSION['uname'] == 'root')){
				echo '<td>';
?>
				<a href="edit.php?id=<?php echo $result['id'] ?>">Editar</a> |
				<a href="delete.php?id=<?php echo $result['id'] ?>">Eliminar</a>
				</td> </tr>
<?php
			//}
			echo '</tr>';
		}
		echo '</table>';
	}
?>
	</div></div>
	<style type="text/css">
		html{
			width: 100%;
			height: 100%;
		}
		body{
			width: 100%;
			height: 100%;
			background-image: url(bg4.jpg);
			background-size: 100% 200%;
			background-repeat: no-repeat;
		}

		input {
			padding: 2px;
			padding-right: 5px;
			padding-bottom: 5px;
			color: #0;
			border-width: 0px 0px 3px 0px;
			border-color: black;
			background-color: rgba(0,0,0,0);
			width: 650px;
		}

		table{
			color: #000;
			font-size: 10px;
		}

		.meio{
				padding: 15px;//20% 40%;
				//padding-left: 10%;
				background-color: rgba(255,255,255,0.7);
			}

		button{
			background-color: red;
			border-radius: 10px;
			color: #0;
			padding: 2px;
		}

		h1{
			text-shadow: 3px 5px 3px #333;
			color: #000;
		}

		a{
			color: #f00;

		}

		a : visited{
			color: #f00;
		}
	</style>

</body>
</html>