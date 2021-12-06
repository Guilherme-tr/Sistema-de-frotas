<?php

include $_SERVER['DOCUMENT_ROOT']."./conexao.php";



$placa = $_POST['placa'];
$funcionario = $_POST['funcionario'];
$km_inicial = $_POST['km_inicial'];
$km_final = $_POST['km_final'];
$hora_saida = $_POST['hora_saida'];
$hora_chegada = $_POST['hora_chegada'];
$destino = $_POST['destino'];
$ocupacao = $_POST['ocupacao'];
$peso_carga = $_POST['peso_carga'];
$finalidade = $_POST['finalidade'];
$estado = $_POST['estado'];

$date = str_replace("/", "-", $_POST["data_saida"]);
$data_saida = date('Y-m-d', strtotime($date));

$date = str_replace("/", "-", $_POST["data_chegada"]);
$data_chegada = date('Y-m-d', strtotime($date));

if ($km_final == NULL){
    $km_final = 0;
}else{
    $km_final = $_POST['km_final'];
}

if($data_chegada == '1970-01-01' || '30/11/-0001' || '30/11/0001'){
    $data_chegada = "0000-00-00";
    $query ="INSERT INTO fichacontrole (placa_veiculo_FK, nome_funcionario_fk, data_saida, hora_saida, data_chegada, hora_chegada, ocupacao, peso, destino, finalidade, Km_inicial, Km_final, estado) VALUES ('$placa',TRIM('$funcionario'),'$data_saida','$hora_saida','$data_chegada','$hora_chegada','$ocupacao',$peso_carga,'$destino','$finalidade',$km_inicial,$km_final,'$estado')";
}else {
    $query ="INSERT INTO fichacontrole (placa_veiculo_FK, nome_funcionario_fk, data_saida, hora_saida, data_chegada, hora_chegada, ocupacao, peso, destino, finalidade, Km_inicial, Km_final, estado) VALUES ('$placa',TRIM('$funcionario'),'$data_saida','$hora_saida','$data_chegada','$hora_chegada','$ocupacao',$peso_carga,'$destino','$finalidade',$km_inicial,$km_final,'$estado')";
}

               
/*

echo  $placa;
echo  $funcionario;
echo  $km_inicial;
echo  $km_final;
echo  $hora_saida;
echo  $hora_chegada;
echo  $destino;
echo  $ocupacao;
echo  $peso_carga;
echo  $finalidade;
echo  $estado;*/


$result = mysqli_query($conexao,$query);

if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./ficha.php";';
    echo '</script>';
}else{ 
    header('location:../1FichadeControle/FichaControle.php');
}