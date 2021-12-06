<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";

$id_manutencao = $_GET['id_manutencao'];

$query = "DELETE FROM MANUTENCAO WHERE id_manutencao = $id_manutencao";

mysqli_query($conexao, $query);

header('location:../Manutenção.php');