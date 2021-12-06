<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";

$usuario_id = $_POST['usuario_id'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$query = "UPDATE Usuario SET usuario = TRIM('$usuario'), senha = MD5('$senha'), tipo = '$tipo' WHERE usuario_id = $usuario_id";

$result = mysqli_query($conexao, $query);
if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = ".../Usuário.php";';
    echo '</script>';
}else{
    header('location:../Usuário.php');
}





