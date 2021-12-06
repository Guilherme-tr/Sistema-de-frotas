<?php
include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";

$id_ficha = $_POST['id_ficha'];
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
/*echo $id_ficha;
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
echo  $estado;
echo $data_chegada;
echo $data_saida;*/

if($data_chegada == '1970-01-01'){ 
    $query ="UPDATE fichacontrole SET placa_veiculo_fk = '$placa', nome_funcionario_fk = '$funcionario', data_saida = '$data_saida', hora_saida = '$hora_saida', hora_chegada = '$hora_chegada', ocupacao = '$ocupacao', peso = $peso_carga, destino = '$destino', finalidade = '$finalidade', Km_inicial = $km_inicial, Km_final = $km_final, estado = '$estado' WHERE id_ficha = $id_ficha";
}else {
    $query ="UPDATE fichacontrole SET placa_veiculo_fk = '$placa', nome_funcionario_fk = '$funcionario', data_saida = '$data_saida', hora_saida = '$hora_saida', data_chegada = '$data_chegada', hora_chegada = '$hora_chegada', ocupacao = '$ocupacao', peso = $peso_carga, destino = '$destino', finalidade = '$finalidade', Km_inicial = $km_inicial, Km_final = $km_final, estado = '$estado' WHERE id_ficha = $id_ficha";
}



$result = mysqli_query($conexao, $query);
if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./Edita_ficha.php";';
    echo '</script>';
}else{ 
    header('location:../Funcionários.php');
}




