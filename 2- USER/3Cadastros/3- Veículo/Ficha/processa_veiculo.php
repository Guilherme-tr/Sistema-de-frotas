<?php

include $_SERVER['DOCUMENT_ROOT']."./conexao.php";



$id_veiculo = $_POST['id_veiculo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$tipo_combustivel = $_POST['tipo_combustivel'];
$tipo_veiculo = $_POST['tipo_veiculo'];
$ipva = $_POST['ipva'];
$renavam = $_POST['renavam'];
$modelo = $_POST['modelo'];
$chassi = $_POST['chassi'];

$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];
$nf_compra  = $_POST['nf_compra'];
$nf_venda  = $_POST['nf_venda'];
$data_compra  = $_POST["data_compra"];
$data_venda  = $_POST["data_venda"];
echo $data_venda;

if($data_compra == NULL ){
    $data_compra = "0000-00-00";
}else{
    $date = str_replace("/", "-", $_POST["data_compra"]);
    $data_compra = date('Y-m-d', strtotime($date));  
}

if($data_venda ==  NULL ){
    $data_venda = "0000-00-00";
}else{
    $date2 = str_replace("/", "-", $_POST["data_venda"]);
    $data_venda = date('Y-m-d', strtotime($date2));  
}
echo $data_venda;
$query ="INSERT INTO veiculos (placa, ano, tipo_combustivel, tipo_veiculo, ipva, renavam, modelo, chassi, data_compra, valor_compra, data_venda, valor_venda, nf_compra, nf_venda) VALUES ('$placa', $ano, '$tipo_combustivel', '$tipo_veiculo', $ipva, '$renavam', '$modelo', '$chassi', '$data_compra', '$valor_compra', '$data_venda', '$valor_venda', '$nf_compra', '$nf_venda');";



/*echo $nome_funcionario;
echo $departamento_FK;
echo $email_funcionario;
echo $cpf_funcionario;
echo $rg_funcionario;
echo $cep_funcionario;
echo $endereco_funcionario;*/

$result = mysqli_query($conexao,$query);

if($result==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Erro ao cadastrar. Verifique o formulário!");'; 
    echo 'window.location.href = "./ficha.php";';
    echo '</script>';
}else{
    header('location:../Veículo.php');
}