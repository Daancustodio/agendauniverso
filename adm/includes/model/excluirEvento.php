<?php 
include 'db.php';
$id = $_GET['id'];


$querySelect = "SELECT * FROM eventos WHERE id = '$id' LIMIT 1 ";


$i = mysqli_query($con, $querySelect);
$row = mysqli_num_rows($i);
if ($row == true) {

	while ($ln = mysqli_fetch_array($i)) {
	$id2 = $ln['id'];
	$dataEvento = date("d/m/Y", strtotime($ln['data']));
	$periodoEvento = $ln['periodo'];
	$inicioEvento = $ln['inicio'];
	$terminoEvento = $ln['termino'];
	$localEvento = $ln['local'];
	$profEvento = $ln['professor'];
	$equipEvento = $ln['equipamentos'];
	$descricao = $ln['descricao'];
	$usuario = $ln['usuario'];
	}

	
	$flash = "<div class=\"alert alert-error\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=closeEvento$periodoEvento\">×</a></button>
  			<strong>Advertência!</strong>
  			Você deseja Excluir <strong> $descricao ?</strong><br>

  			<table class=\"table table-bordered bg\">
			<caption><h1><small>Confirmar Exclusão de Evento</small></h1></caption>
			<thead>
			<tr>
				<th>Data</th>
				<th>Periodo</th>
				<th>Horario</th>
				<th>Local</th>
				<th>Equipamentos</th>
				<th>Professor(a)</th>
				<th>Descrição</th>
				
			</tr>
			</thead>
			<tbody>
				<tr>
					<td> $dataEvento </td>
					<td> $periodoEvento </td>
					<td> $inicioEvento às $terminoEvento </td>
					<td> $localEvento </td>
					<td> $equipEvento </td>
					<td> $profEvento </td>
					<td> $descricao </td>

				</tr>
			</tbody>
			</table>
			<div class=\"dcDivCenter\">
				<form action=\"?p=excluirEvento_submit$periodoEvento\" method=\"POST\" accept-charset=\"utf-8\">
					<input type=\"hidden\" name=\"idfinal\" value=\"$id2\">
					<input type=\"hidden\" name=\"usuario\" value=\"$usuario\">
					<input type=\"hidden\" name=\"descricao\" value=\"$descricao\">
					<input type=\"hidden\" name=\"periodoEvento\" value=\"$periodoEvento\">
					<input type=\"hidden\" name=\"dataEvento\" value=\"$dataEvento\">
					
					<button class=\"btn btn-primary dcbnt\" type=\"submit\">Confirmar</button>

					<button class=\"btn btn-inverse dcbnt\" name=\"close\" type=\"button\"><a href=\"?p=closeEvento$periodoEvento\">Cancelar</a></button>
				</form>
			</div>
  			</div>
  			";
  			return false;

}
?>



