<?php
include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";

$id_departamento = $_POST['id_departamento'];
$nome_departamento = $_POST['n_departamento'];

$query = "UPDATE DEPARTAMENTOS SET nome_departamento = TRIM('$nome_departamento') WHERE id_departamento = $id_departamento";

$result = mysqli_query($conexao, $query);
if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "../Veículo.php";';
    echo '</script>';
}else{
    header('location:../Departamento.php');
}






