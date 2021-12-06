<?php

include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Funcionário</title>
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
        <a class="navbar-brand navbar-logo" href="/1ADMIN/1FichadeControle/FichaControle.php">FROTA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
			<div class="hori-selector"><div class="left"></div><div class="right"></div></div>
				<li class="nav-item">
                    <a class="nav-link" href="/2- USER/1FichadeControle/FichaControle.php"><i class="fas fa-tachometer-alt"></i>Ficha de Controle</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="/2- USER/2Relatórios/Relatórios.php"><i class="fas fa-tachometer-alt"></i>Relatórios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/2- USER/3Cadastros/Cadastros.php"><i class="fas fa-tachometer-alt"></i>Cadastros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/2- USER/4AlterarSenha/AltSenha.php"><i class="far fa-calendar-alt"></i>Alterar Senha</a>
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
		<a href="./Ficha/ficha.php"><button class="login100-form-btn">
			Novo Funcionário
		</button></a>
		<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Nome</th>
								<th class="column3">Departamento</th>
								<th class="column4">Email</th>
								<th class="column5">CPF</th>
								<th class="column6">RG</th>
								<th class="column7">CEP</th>
								<th class="column8">Endereço</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$consulta2 = mysqli_query($conexao, $query2);
							while($linha = mysqli_fetch_array($consulta2)){
								echo '<tr onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column1">'.$linha['id'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column2">'.$linha['nome_funcionario'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column3">'.$linha['departamento_FK'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column4">'.$linha['email'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column5">'.$linha['cpf'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column6">'.$linha['rg'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column7">'.$linha['cep'].'</td>';
								echo '<a onclick="location.href=`./ViewFicha/ViewFicha.php?id='.$linha['id'].'`"><td class="column8">'.$linha['endereco'].'</td></tr>';
							}
							?>
						</tbody>
					</table>
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