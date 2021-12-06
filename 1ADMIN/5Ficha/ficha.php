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
        <a class="navbar-brand navbar-logo" href="../1FichadeControle/FichaControle.php">FROTA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
				<li class="nav-item active">
                    <a class="nav-link" href="../1FichadeControle/FichaControle.php"><i class="fas fa-tachometer-alt"></i>Ficha de Controle</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="../2Relatórios/Relatórios.php"><i class="fas fa-tachometer-alt"></i>Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../3Cadastros/Cadastros.php"><i class="fas fa-tachometer-alt"></i>Cadastros</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="../6Manutenção/Manutenção.php"><i class="fas fa-tachometer-alt"></i>Manutenção</a>
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
    <form method="POST" action="processa_ficha.php">
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Resumo da Ficha</h2>
                    
                        <div class="row row-space">
                        <div class="col-2-old"><b class="title">FUNCIONÁRIO:</b></div>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Funcionario" name="funcionario">
                                </div>
                            <div class="col-2-old"><b class="title">PLACA:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Placa" name="placa">
                                </div>
                            </div>  
                            <div class="col-2-old"><b class="title">OCUPAÇÃO:</b>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ocupacao">
                                            <option disabled="disabled" selected="selected">Quantidade de Ocupação</option>
                                            <option>1/4</option>
                                            <option>2/4</option>
                                            <option>3/4</option>
                                            <option>Total</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            
                                <div class="col-2-old"><b class="title">Km INICIAL:</b>
                                    <div class="input-group">
                                        <input class="input--style-2" type="number" placeholder="Km Inicial" name="km_inicial">
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">Km FINAL:</b>
                                    <div class="input-group">
                                        <input class="input--style-2" type="number" placeholder="Km Final" name="km_final">
                                    </div>
                                </div>  
                            
                            
                                <div class="col-2-old"><b class="title">DATA SAÍDA:</b>
                                    <div class="input-group">
                                        <input required class="input--style-2 js-datepicker" type="text" placeholder="Data Saída" name="data_saida">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">DATA CHEGADA:</b>
                                    <div class="input-group">
                                        <input class="input--style-2 js-datepicker" type="text" placeholder="Data Chegada" name="data_chegada">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">HORA SAÍDA:</b>
                                    <div class="input-group">
                                        <input type="time" id="appt"  required name="hora_saida">
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">HORA CHEGADA:</b>
                                    <div class="input-group">
                                        <input type="time" id="appt"  name="hora_chegada">
                                    </div>
                                </div>
                        
                        
                            <div class="col-2-old"><b class="title">ESTADO:</b>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="estado">Estado
                                            <option disabled="disabled" selected="selected">Estado</option>
                                            <option>SP</option>
                                            <option>RJ</option>
                                            <option>MG</option>
                                            <option>ES</option>
                                            <option>PR</option>
                                            <option>SC</option>
                                            <option>RS</option>
                                            <option>MT</option>
                                            <option>DF</option>
                                            <option>GO</option>
                                            <option>MS</option>
                                            <option>MA</option>
                                            <option>PI</option>
                                            <option>CE</option>
                                            <option>RN</option>
                                            <option>PB</option>
                                            <option>PE</option>
                                            <option>AL</option>
                                            <option>SE</option>
                                            <option>BA</option>
                                            <option>RR</option>
                                            <option>AP</option>
                                            <option>AM</option>
                                            <option>PA</option>
                                            <option>AC</option>
                                            <option>RO</option>
                                            <option>TO</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-old"><b class="title">PESO DA CARGA:</b>
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Peso da Carga (kg)" name="peso_carga">
                                </div>
                            </div>
                            </div>
                            <div class="row row-space">
                            <div class="col-2-old"><b class="title">DESTINO:</b></div>
                                <div class="input-group">
                                <textarea required class="form-control" rows='3' type="text" placeholder="Cidade" name="destino"></textarea>
                                </div>
                                <div class="col-2-old"><b class="title">FINALIDADE:</b></div>
                            <div class="input-group">
                            <textarea class="form-control" rows='3' type="text" placeholder="Finalidade" name="finalidade"></textarea>
                            </div>
                            </div>
                        <div class="p-t-30">
                            <a href="../1FichadeControle/FichaControle.php?id_ficha="><button class="btn btn--radius btn--green" type="submit">Enviar</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    
    <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
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
