<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ficha de Controle</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-expand-custom navbar-mainbg"> 
		<a class="navbar-brand navimg"  menu><img src="/jbtlogo.png" class="img-responsive" ></a>
        <a class="navbar-brand navbar-logo" href="./FichaControle.php">FROTA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
				<li class="nav-item active">
                    <a class="nav-link" href="./FichaControle.php"><i class="fas fa-tachometer-alt"></i>Ficha de Controle</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="../2Relat??rios/Relat??rios.php"><i class="fas fa-tachometer-alt"></i>Relat??rios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../3Cadastros/Cadastros.php"><i class="fas fa-tachometer-alt"></i>Cadastros</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="../6Manuten????o/Manuten????o.php"><i class="fas fa-tachometer-alt"></i>Manuten????o</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../4AlterarSenha/AltSenha.php"><i class="far fa-calendar-alt"></i>Alterar Senha</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="/logout.php"><i class="far fa-calendar-alt"></i>Sair</a>
                </li>
            </ul>
        </div>
    </nav>
	<style>
		body {
			background-color: #e6e6e6;
		}
	</style>
	<br>
	<br>
	<div class="container-login100-form-btn">
		<a href="../5Ficha/ficha.php"><button class="login100-form-btn">
			Nova Ficha
		</button></a>
	</div>
	
	<div class="limiter">
	
		<div class="container-table100">
			<div class="wrap-table100">
			
				<div class="table100">
				<div class="table-responsive">
					<table>
					
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Placa</th>
								<th class="column3">Usu??rio</th>
								<th class="column4">Data Sa??da</th>
								<th class="column5">Hora Sa??da</th>
								<th class="column6">Destino</th>
								<th class="column7">Finalidade</th>
							</tr>
						</thead>
						<tbody> 
						<?php
							
							$consulta3 = mysqli_query($conexao, $query6);
							while($linha = mysqli_fetch_array($consulta6)){
								echo '<tr onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column1">'.$linha['id_ficha'].'</td>';
								echo '<a onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column2">'.$linha['placa_veiculo_fk'].'</td>';
								echo '<a onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column3">'.$linha['nome_funcionario_fk'].'</td>';
								$date = str_replace("-", "/", $linha['data_saida']);
								$data_saida = date('d/m/Y', strtotime($date));		
								echo '<a onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column4">'.$data_saida.'</td>';
								echo '<a onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column5">'.$linha['hora_saida'].'</td>';
								echo '<a onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column6">'.$linha['destino'].'</td>';
								echo '<a onclick="location.href=`../5ViewFicha/ViewFicha.php?id_ficha='.$linha['id_ficha'].'`"><td class="column7">'.$linha['finalidade'].'</td></tr>';
							}
							?>
						</tbody>
					</table>
					</div>	
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>