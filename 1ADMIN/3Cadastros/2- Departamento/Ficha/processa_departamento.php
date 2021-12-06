<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";



$nome_departamento = $_POST['nome_departamento'];


$query ="INSERT INTO DEPARTAMENTOS (nome_departamento) VALUES (TRIM('$nome_departamento'))";

$result = mysqli_query($conexao,$query);
if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./ficha.php";';
    echo '</script>';
}else{
    header('location:../Departamento.php');
}
