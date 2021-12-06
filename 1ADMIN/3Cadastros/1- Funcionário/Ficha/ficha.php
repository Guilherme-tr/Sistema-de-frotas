<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Nova ficha</title>


    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <link href="css/main.css" rel="stylesheet" media="all">


    <!--===============================================================================================-->
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
                    <a class="nav-link" href="/1ADMIN/1FichadeControle/FichaControle.php"><i class="fas fa-tachometer-alt"></i>Ficha de Controle</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="/1ADMIN/2Relatórios/Relatórios.php"><i class="fas fa-tachometer-alt"></i>Relatórios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/1ADMIN/3Cadastros/Cadastros.php"><i class="fas fa-tachometer-alt"></i>Cadastros</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="/1ADMIN/6Manutenção/Manutenção.php"><i class="fas fa-tachometer-alt"></i>Manutenção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/1ADMIN/4AlterarSenha/AltSenha.php"><i class="far fa-calendar-alt"></i>Alterar Senha</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="/logout.php"><i class="far fa-calendar-alt"></i>Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="POST" action="processa_funcionario.php">
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">	
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Adicionar Funcionário</h2>
                    <br>
                        <div class="row row-space">
                            <div class="col-2-old"><b class="title">NOME DO FUNCIONÁRIO:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Nome" name="nome_funcionario">
                                </div>
                            </div>  
                            <div class="col-2-old"><b class="title">DEPARTAMENTO:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Departamento" name="departamento_FK">
                                </div>
                            </div>  
                            
                            <div class="col-2-old"><b class="title">EMAIL:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Email" name="email_funcionario">
                                </div>
                            </div>
                            <div class="col-2-old"><b class="title">CPF:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="number" min='1' placeholder="CPF (somente números)" name="cpf_funcionario">
                                </div>
                            </div>
                            
                            
                            <div class="col-2-old"><b class="title">RG:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="number" min='1' placeholder="RG (somente números)" name="rg_funcionario">
                                </div>
                            </div>
                            <div class="col-2-old"><b class="title">CEP:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="number" min='1' placeholder="CEP (somente números)" name="cep_funcionario">
                                </div>
                            </div>
                            <div class="col-2-old"><b class="title">ENDEREÇO:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Endereço" name="endereco_funcionario">
                                </div>
                            </div>
                            
                        </div>
                        <div class="p-t-30">
                            <a href="processa_funcionario.php?id=<?php echo $id; ?>"><button class="btn btn--radius btn--green" type="submit">Enviar</button></a>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    
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
