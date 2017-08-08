<?php 
include 'db.php';
$id = $_GET['id'];

$querySelect = "SELECT * FROM posgraduacao WHERE id = '$id' LIMIT 1 ";


$i = mysqli_query($con, $querySelect);
$row = mysqli_num_rows($i);
if ($row == true) {

	while ($ln = mysqli_fetch_array($i)) {
	$id2 = $ln['id'];
	$dataPos = date("d/m/Y", strtotime($ln['data']));
	$periodoPos = $ln['periodo'];
	$inicioPos = $ln['inicio'];
	$terminoPos = $ln['termino'];
	$localPos = $ln['local'];
	$profPos = $ln['professor'];
	$equipPos = $ln['equipamentos'];
	$disciplinaPos = $ln['disciplina'];
	$usuario = $ln['usuario'];
	}

	
	$flash = "<div class=\"alert alert-error\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=closePos\">×</a></button>
  			<strong>Advertência!</strong>
  			Você deseja Excluir <strong> $disciplinaPos ?</strong><br>

  			<table class=\"table table-bordered bg\">
			<caption><h1><small>Confirmar Exclusão de Pós-Graduação</small></h1></caption>
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
					<td> $dataPos </td>
					<td> $periodoPos </td>
					<td> $inicioPos às $terminoPos </td>
					<td> $localPos </td>
					<td> $equipPos </td>
					<td> $profPos </td>
					<td> $disciplinaPos </td>

				</tr>
			</tbody>
			</table>
			<div class=\"dcDivCenter\">
				<form action=\"?p=excluirPos_submit\" method=\"POST\" accept-charset=\"utf-8\">
					<input type=\"hidden\" name=\"idfinal\" value=\"$id2\">
					<input type=\"hidden\" name=\"usuario\" value=\"$usuario\">
					<input type=\"hidden\" name=\"disciplina\" value=\"$disciplinaPos\">
					<button class=\"btn btn-primary dcbnt\" type=\"submit\">Confirmar</button>
					<button class=\"btn btn-inverse dcbnt\" name=\"close\" type=\"button\"><a href=\"?p=closePos\">Cancelar</a></button>
				</form>
			</div>
  			</div>
  			";
  			return false;

}
?>



