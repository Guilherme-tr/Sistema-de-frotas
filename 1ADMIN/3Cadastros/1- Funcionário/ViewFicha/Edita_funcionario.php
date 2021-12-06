<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";

$id = $_POST['id'];
$nome_funcionario = $_POST['nome_funcionario'];
$departamento_FK = $_POST['departamento_FK'];
$email_funcionario = $_POST['email_funcionario'];
$cpf_funcionario = $_POST['cpf_funcionario'];
$rg_funcionario = $_POST['rg_funcionario'];
$cep_funcionario = $_POST['cep_funcionario'];
$endereco_funcionario = $_POST['endereco_funcionario'];

$query = "UPDATE FUNCIONARIOS SET nome_funcionario = TRIM('$nome_funcionario'), departamento_FK = TRIM('$departamento_FK'), email = '$email_funcionario', cpf = $cpf_funcionario, rg = $rg_funcionario, cep = $cep_funcionario, endereco = '$endereco_funcionario' WHERE id = $id";

$result = mysqli_query($conexao, $query);
if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "../Funcionario.php";';
    echo '</script>';
}else{
    header('location:../Funcionário.php');
}





