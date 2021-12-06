<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";
/*
echo $_POST['usuario_id'];
echo $_POST['senha1'];
echo $_POST['senha2'];*/

$usuario = $_SESSION['usuario'];
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];

if ($senha1 == $senha2){
    $senha3 = $_POST['senha2'];
    echo $senha3;
    $query = "UPDATE usuario SET senha = MD5('$senha3') WHERE usuario = ('$usuario')"; 
    $result = mysqli_query($conexao, $query);
    header('location:../1FichadeControle/FichaControle.php');
}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Senhas não se correspondem. Verifique o formulário!");'; 
    echo 'window.location.href = "./AltSenha.php";';
    echo '</script>';
    exit();
}

if($result==0){
    echo 'erro';
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./AltSenha.php";';
    echo '</script>';
}else{
    echo 'OK';
    header('location:../1FichadeControle/FichaControle.php');
}




