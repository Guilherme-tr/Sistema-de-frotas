<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";



$id_manutencao = $_POST['id_manutencao'];
$placa_FK = $_POST['placa_FK'];
$numero_nota = $_POST['numero_nota'];
$servico = $_POST['servico'];
$valor = $_POST['valor'];

/*echo $nome_funcionario;
echo $departamento_FK;
echo $email_funcionario;
echo $cpf_funcionario;
echo $rg_funcionario;
echo $cep_funcionario;
echo $endereco_funcionario;*/
$query ="INSERT INTO MANUTENCAO (placa_FK, numero_nota, servico, valor) VALUES ('$placa_FK', $numero_nota, '$servico', '$valor')";
$result = mysqli_query($conexao,$query);

if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./ficha.php";';
    echo '</script>';
}else{
    header('location:../Manutenção.php');
}
