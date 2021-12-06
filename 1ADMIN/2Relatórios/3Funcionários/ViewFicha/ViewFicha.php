<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";


$id_ficha = $_GET['id_ficha'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Ficha</title>


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
				<li class="nav-item active">
                    <a class="nav-link" href="/1ADMIN/2Relatórios/Relatórios.php"><i class="fas fa-tachometer-alt"></i>Relatórios</a>
                </li>
                <li class="nav-item">
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
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Resumo da Ficha</h2>
                    <form method="POST" action='./Edita_ficha.php'>
                    <?php while ($linha = mysqli_fetch_array($consulta9)){ ?>
                        <?php if ($linha['id_ficha'] == $id_ficha){ ?>
                        <div class="col-2-old">
                            <input hidden class="input--style-2" type="text" name="id_ficha" value="<?php echo $linha['id_ficha']; ?>">
                        </div>
                        <div class="row row-space">
                        <div class="col-2-old"><b class="title">PLACA:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Placa" name="placa" value="<?php echo $linha['placa_veiculo_fk']; ?>">
                                </div>
                            </div>  
                            <div class="col-2-old"><b class="title">FUNCIONÁRIO:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Funcionario" name="funcionario" value="<?php echo $linha['nome_funcionario_fk']; ?>">
                                </div>
                            </div>
                            
                                <div class="col-2-old"><b class="title">Km INICIAL:</b>
                                    <div class="input-group">
                                        <input required class="input--style-2" type="number" placeholder="Km Inicial" name="km_inicial" value="<?php echo $linha['Km_inicial']; ?>">
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">Km FINAL:</b>
                                    <div class="input-group">
                                        <input  class="input--style-2" type="number" placeholder="Km Final" name="km_final" value="<?php echo $linha['Km_final']; ?>">
                                    </div>
                                </div>  
                            
                            
                                <div class="col-2-old"><b class="title">DATA SAÍDA:</b>
                                    <div class="input-group">
                                        <input required class="input--style-2 js-datepicker" type="text" placeholder="Data Saída" name="data_saida" 
                                            value="<?php $date = $linha['data_saida'];
                                              $date = date('Y-m-d',strtotime($date));
                                              $date = date('d/m/Y',strtotime($linha['data_saida']));  
                                              echo $date; ?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">DATA CHEGADA:</b>
                                    <div class="input-group">
                                        <input class="input--style-2 js-datepicker" type="text" placeholder="Data Chegada" name="data_chegada" 
                                            value="<?php $data = $linha['data_chegada']; 
                                                if ($linha['data_chegada']  == '0000-00-00'){
                                                  $linha['data_chegada'] == '00-00-0000';
                                                  echo null;
                                                }else{ 
                                                $date = date('Y-m-d',strtotime($date));
                                                $date = date('d/m/Y',strtotime($linha['data_chegada'])); 
                                                echo $date;
                                                }?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">HORA SAÍDA:</b>
                                    <div class="input-group">
                                        <input type="time" id="appt"  required name="hora_saida" value="<?php echo $linha['hora_saida']; ?>">
                                    </div>
                                </div>
                                <div class="col-2-old"><b class="title">HORA CHEGADA:</b>
                                    <div class="input-group">
                                        <input type="time" id="appt"  name="hora_chegada" value="<?php echo $linha['hora_chegada']; ?>">
                                    </div>
                                </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2-old"><b class="title">ESTADO:</b>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="estado" value="<?php echo $linha['estado']; ?>">
                                            <option value="SP"<?php if($linha['estado'] == 'SP'): ?> selected="selected"<?php endif; ?>>SP</option>
                                            <option value="RJ"<?php if($linha['estado'] == 'RJ'): ?> selected="selected"<?php endif; ?>>RJ</option>
                                            <option value="ES"<?php if($linha['estado'] == 'MG'): ?> selected="selected"<?php endif; ?>>MG</option>
                                            <option value="AM"<?php if($linha['estado'] == 'ES'): ?> selected="selected"<?php endif; ?>>ES</option>
                                            <option value="CE"<?php if($linha['estado'] == 'PR'): ?> selected="selected"<?php endif; ?>>PR</option>
                                            <option value="SC"<?php if($linha['estado'] == 'SC'): ?> selected="selected"<?php endif; ?>>SC</option>
                                            <option value="RS"<?php if($linha['estado'] == 'RS'): ?> selected="selected"<?php endif; ?>>RS</option>
                                            <option value="MT"<?php if($linha['estado'] == 'MT'): ?> selected="selected"<?php endif; ?>>MT</option>
                                            <option value="DF"<?php if($linha['estado'] == 'DF'): ?> selected="selected"<?php endif; ?>>DF</option>                                      
                                            <option value="GO"<?php if($linha['estado'] == 'GO'): ?> selected="selected"<?php endif; ?>>GO</option>
                                            <option value="MS"<?php if($linha['estado'] == 'MS'): ?> selected="selected"<?php endif; ?>>MS</option>
                                            <option value="MA"<?php if($linha['estado'] == 'MA'): ?> selected="selected"<?php endif; ?>>MA</option>
                                            <option value="PI"<?php if($linha['estado'] == 'PI'): ?> selected="selected"<?php endif; ?>>PI</option>
                                            <option value="CE"<?php if($linha['estado'] == 'CE'): ?> selected="selected"<?php endif; ?>>CE</option>
                                            <option value="RN"<?php if($linha['estado'] == 'RN'): ?> selected="selected"<?php endif; ?>>RN</option>
                                            <option value="PB"<?php if($linha['estado'] == 'PB'): ?> selected="selected"<?php endif; ?>>PB</option>                                      
                                            <option value="PE"<?php if($linha['estado'] == 'PE'): ?> selected="selected"<?php endif; ?>>PE</option>
                                            <option value="AL"<?php if($linha['estado'] == 'AL'): ?> selected="selected"<?php endif; ?>>AL</option>
                                            <option value="SE"<?php if($linha['estado'] == 'SE'): ?> selected="selected"<?php endif; ?>>SE</option>
                                            <option value="BA"<?php if($linha['estado'] == 'BA'): ?> selected="selected"<?php endif; ?>>BA</option>
                                            <option value="RR"<?php if($linha['estado'] == 'RR'): ?> selected="selected"<?php endif; ?>>RR</option>
                                            <option value="AP"<?php if($linha['estado'] == 'AP'): ?> selected="selected"<?php endif; ?>>AP</option>
                                            <option value="AM"<?php if($linha['estado'] == 'AM'): ?> selected="selected"<?php endif; ?>>AM</option>                                      
                                            <option value="PA"<?php if($linha['estado'] == 'PA'): ?> selected="selected"<?php endif; ?>>PA</option>
                                            <option value="AC"<?php if($linha['estado'] == 'AC'): ?> selected="selected"<?php endif; ?>>AC</option>
                                            <option value="RO"<?php if($linha['estado'] == 'RO'): ?> selected="selected"<?php endif; ?>>RO</option>
                                            <option value="TO"<?php if($linha['estado'] == 'TO'): ?> selected="selected"<?php endif; ?>>TO</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-old"><b class="title">DESTINO:</b>
                                <div class="input-group">
                                    <input required class="input--style-2" type="text" placeholder="Cidade" name="destino" value="<?php echo $linha['destino']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2-old"><b class="title">OCUPAÇÃO:</b>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ocupacao" value="<?php echo $linha['ocupacao']; ?>">
                                            <option disabled="disabled" selected="selected">Quantidade de Ocupação</option>
                                            <option value="1/4"<?php if($linha['ocupacao'] == '1/4'): ?> selected="selected"<?php endif; ?>>1/4</option>
                                            <option value="2/4"<?php if($linha['ocupacao'] == '2/4'): ?> selected="selected"<?php endif; ?>>2/4</option>
                                            <option value="3/4"<?php if($linha['ocupacao'] == '3/4'): ?> selected="selected"<?php endif; ?>>3/4</option>
                                            <option value="Total"<?php if($linha['ocupacao'] == 'Total'): ?> selected="selected"<?php endif; ?>>Total</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2-old"><b class="title">PESO DA CARGA:</b>
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Peso da Carga (kg)" name="peso_carga" value="<?php echo $linha['peso']; ?>">
                                </div>
                            </div>
                        </div>
                        <b class="title">FINALIDADE:</b>
                            <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Finalidade" name="finalidade" value="<?php echo $linha['finalidade']; ?>">
                            </div>
                            <?php } ?>
                            <?php } ?>
                        <div class="p-t-30">
                        <a onclick="location.href='./Edita_ficha.php?id_ficha=<?php echo $id_ficha; ?>'"><button class="btn btn--radius btn--green" type="submit">Alterar</button></a>
                        <a onclick="location.href='./Deleta_ficha.php?id_ficha=<?php echo $id_ficha; ?>'"><button class="btn btn--radius btn--red" type="submit">Excluir</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
