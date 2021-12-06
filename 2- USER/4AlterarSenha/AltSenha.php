<?php

include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";

/*echo $_SESSION['usuario'];*/
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alterar Senha</title>
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

<!--===============================================================================================-->

</head>
<body>
	<nav class="navbar navbar-expand-custom navbar-mainbg"> 
		<a class="navbar-brand navimg"  menu><img src="/jbtlogo.png" class="img-responsive" ></a>
        <a class="navbar-brand navbar-logo" href="../1FichadeControle/FichaControle.php">FROTA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
				<li class="nav-item">
                    <a class="nav-link" href="../1FichadeControle/FichaControle.php"><i class="fas fa-tachometer-alt"></i>Ficha de Controle</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="../2Relatórios/Relatórios.php"><i class="fas fa-tachometer-alt"></i>Relatórios</a>
                </li>
				<li class="nav-item">
					<a class="nav-link" href="../3Cadastros/Cadastros.php"><i class="far fa-calendar-alt"></i>Cadastros</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./AltSenha.php"><i class="far fa-calendar-alt"></i>Alterar Senha</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="/logout.php"><i class="far fa-calendar-alt"></i>Sair</a>
                </li>
            </ul>
        </div>
    </nav>
	
	<div id="box"> 
	  <h1>Alterar Senha	</h1>
	  <form method="POST" action='./Edita_senha.php'>
		<p>
		  <input type="password" value="" placeholder="Digite a nova senha" id="p" name="senha1" class="password">
		  <button class="unmask" type="button"></button>
		</p>
		<p>     
		  <input type="password" value="" placeholder="Digite novamente" id="p-c" name="senha2" class="password">
		  <button class="unmask" type="button"></button>
		<div id="strong"><span></span></div>
		<div id="valid"></div>
		<small>SUGESTÃO: usar uma senha com números, símbolos e/ou letras maiúsculas e minúsculas</small>
		</p>
		<br>
		<div class="container-login100-form-btn">
			<a href="./Edita_senha.php?usuario=<?php echo $usuario; ?>"><button class="login100-form-btn">
				Alterar
			</button></a>
		</div>
	  </form>
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