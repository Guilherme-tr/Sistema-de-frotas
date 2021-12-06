<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";



$nome_funcionario = $_POST['nome_funcionario'];
$departamento_FK = $_POST['departamento_FK'];
$email_funcionario = $_POST['email_funcionario'];
$cpf_funcionario = $_POST['cpf_funcionario'];
$rg_funcionario = $_POST['rg_funcionario'];
$cep_funcionario = $_POST['cep_funcionario'];
$endereco_funcionario = $_POST['endereco_funcionario'];

/*echo $nome_funcionario;
echo $departamento_FK;
echo $email_funcionario;
echo $cpf_funcionario;
echo $rg_funcionario;
echo $cep_funcionario;
echo $endereco_funcionario;*/
$query ="INSERT INTO FUNCIONARIOS (nome_funcionario, departamento_FK, email, cpf, rg, cep, endereco) VALUES (TRIM('$nome_funcionario'), TRIM('$departamento_FK'),'$email_funcionario',$cpf_funcionario,$rg_funcionario,$cep_funcionario,'$endereco_funcionario')";
$result = mysqli_query($conexao,$query);

if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./ficha.php";';
    echo '</script>';
}else{
    header('location:../Funcionário.php');
}
