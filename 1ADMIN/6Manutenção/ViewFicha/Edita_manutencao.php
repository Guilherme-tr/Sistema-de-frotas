<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";

$id_manutencao = $_POST['id_manutencao'];
$placa_FK = $_POST['placa_FK'];
$numero_nota = $_POST['numero_nota'];
$servico = $_POST['servico'];
$valor = $_POST['valor'];

$query = "UPDATE MANUTENCAO SET placa_FK = '$placa_FK', numero_nota = '$numero_nota', servico = '$servico', valor = '$valor' WHERE id_manutencao = $id_manutencao";

$result = mysqli_query($conexao, $query);
if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "../Manutenção.php";';
    echo '</script>';
}else{
    header('location:../Manutenção.php');
}





