<?php
include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";


$id_ficha = $_GET['id_ficha'];

$query = "DELETE FROM fichacontrole WHERE id_ficha = $id_ficha";

mysqli_query($conexao, $query);

header('../VeículosEmTransito.php');