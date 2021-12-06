<?php
include $_SERVER['DOCUMENT_ROOT']."./conexao.php";
include $_SERVER['DOCUMENT_ROOT']."./verifica_login.php";

$datas = $_GET['data'];
$data = str_replace("/", "-", $datas);
$datafinal = date('Y-m-d', strtotime($data));

$datas2 = $_GET['data2'];
$data2 = str_replace("/", "-", $datas2);
$datafinal2 = date('Y-m-d', strtotime($data2));

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Planilha</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		
		$arquivo = 'FROTA_Historico.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="7">Planilha Frota</tr>';
		$html .= '</tr>';
		

		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Placa</b></td>';
		$html .= '<td><b>Usuário</b></td>';
		$html .= '<td><b>Data Saída</b></td>';
        $html .= '<td><b>Hora Saída</b></td>';
		$html .= '<td><b>Destino</b></td>';
        $html .= '<td><b>Finalidade</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_excelplanilha = "SELECT * FROM fichacontrole where data_saida BETWEEN ('$datafinal') and ('$datafinal2') ORDER BY data_saida DESC;";
		$resultado_excelplanilha = mysqli_query($conexao, $result_excelplanilha);

		while($row_excelplanilha = mysqli_fetch_assoc($resultado_excelplanilha)){
			$html .= '<tr>';
			$html .= '<td>'.$row_excelplanilha["id_ficha"].'</td>';
			$html .= '<td>'.$row_excelplanilha["placa_veiculo_fk"].'</td>';
			$html .= '<td>'.$row_excelplanilha["nome_funcionario_fk"].'</td>';
			$data = date('d/m/Y',strtotime($row_excelplanilha["data_saida"]));
			$html .= '<td>'.$data.'</td>';
            $html .= '<td>'.$row_excelplanilha["hora_saida"].'</td>';
            $html .= '<td>'.$row_excelplanilha["destino"].'</td>';
            $html .= '<td>'.$row_excelplanilha["finalidade"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html> 