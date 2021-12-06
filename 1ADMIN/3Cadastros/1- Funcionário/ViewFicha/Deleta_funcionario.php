<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";


$id = $_GET['id'];
echo $id;
$query = "DELETE FROM funcionarios WHERE id = $id";

mysqli_query($conexao, $query);

header('location:../Funcionário.php');