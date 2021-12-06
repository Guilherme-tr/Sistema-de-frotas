<?php
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/conexao.php";
include $_SERVER['DOCUMENT_ROOT']."/JBTC-FROTA/verifica_login.php";

$id_ficha = $_GET['id_ficha'];

$query = "DELETE FROM fichacontrole WHERE id_ficha = $id_ficha";

mysqli_query($conexao, $query);

header('../1FichadeControle/FichaControle.php');