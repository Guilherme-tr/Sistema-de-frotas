<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";


$id_veiculo = $_GET['id_veiculo'];

$query = "DELETE FROM veiculos WHERE id_veiculo = $id_veiculo";

mysqli_query($conexao, $query);

header('location:../Veículo.php');