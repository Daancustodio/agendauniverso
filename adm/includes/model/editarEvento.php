<?php 
include 'db.php';
$id = $_GET['id'];


$querySelect = "SELECT * FROM eventos WHERE id = '$id' LIMIT 1 ";


$i = mysqli_query($con, $querySelect);
$row = mysqli_num_rows($i);
if ($row == true) {

	while ($ln = mysqli_fetch_array($i)) {
	$id2 = $ln['id'];
	$dataEvento = $ln['data'];
	$periodoEvento = $ln['periodo'];
	$inicioEvento = $ln['inicio'];
	$terminoEvento = $ln['termino'];
	$localEvento = $ln['local'];
	$profEvento = $ln['professor'];
	$equipEvento = $ln['equipamentos'];
	$descricao = $ln['descricao'];
	$usuario = $ln['usuario'];
	}

	
	$flash = "<div class=\"alert alert-info divEditar\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=closeEvento$periodoEvento\">×</a></button>
  			
  			

  			<table class=\"table table-bordered table-condensed bg\">
			<caption><h1><small>Editar Evento <strong> $descricao </strong></small></h1></caption>
			<form action=\"?p=editarEvento_Submit$periodoEvento\" method=\"POST\" accept-charset=\"utf-8\">
			<thead>
			<tr>
				<th>Data</th>
				<th>Inicio</th>
				<th>Termino</th>
				<th>Local</th>
				
			</tr>
			</thead>
			<tbody>

				<tr>
					<td><input  required=\"required\" class=\"input-medium\"  type=\"date\" name=\"dataEvento\" value=\"$dataEvento\">  </td>
					<td> <input  required=\"required\" class=\"input-small\" type=\"time\" name=\"inicio\"value=\"$inicioEvento\"> </td>
					<td> <input  required=\"required\" class=\"input-small\" type=\"time\" name=\"termino\"value=\"$terminoEvento\"> 
					</td>
					<td>
					 
			<select name=\"local\" class=\"margin\">
			<option value=\"$localEvento\" selected=\"selected\">$localEvento</option>
			<option value=\"NPJ\">NPJ</option>
			<option value=\"Mezanino\">Mezanino</option>
			<option value=\"SALA 501D\">SALA 501D</option>
			<option value=\"SALA 502D\">SALA 502D</option>
			<option value=\"SALA 503D\">SALA 503D</option>
			<option value=\"SALA 504D\">SALA 504D</option>
			<option value=\"SALA 505D\">SALA 505D</option>
			<option value=\"SALA 506D\">SALA 506D</option>
			<option value=\"SALA 507D\">SALA 507D</option>
			<option value=\"SALA 508D\">SALA 508D</option>

			<option value=\"outro\">Outro</option>



					</td>
				</tr>
			</tbody>
			<thead>
				
				<th>Equipamentos</th>
				<th>Professor(a)</th>
				<th colspan=\"2\" >Descrição</th>
			</thead>
			<tbody>

					
					<td> <input required=\"required\" type=\"text\" name=\"equipamentos\" value=\"$equipEvento\"> </td>
					<td> <input  required=\"required\"  type=\"text\" name=\"professor\" value=\"$profEvento\"> </td>
					<td colspan=\"2\" > <input  required=\"required\" class=\"descricaoLarge\" type=\"text\" name=\"descricao\" value=\"$descricao\"> </td>

			</tbody>

			</table>
			<div class=\"dcDivCenter\">
				<<input type=\"hidden\" name=\"idfinal\" value=\"$id2\">
				<button class=\"btn btn-primary dcbnt\" type=\"submit\">Salvar</button>
				<button class=\"btn btn-inverse dcbnt\" name=\"close\" type=\"button\"><a href=\"?p=closeEvento$periodoEvento\">Cancelar</a></button>
				</form>
					

					
			</div>
  			</div>
  			";
  			return false;

}
?>



