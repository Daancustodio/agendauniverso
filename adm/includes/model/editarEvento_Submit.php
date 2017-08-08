<?php 
include "db.php";

$id = $_POST['idfinal'];
$descricao = $_POST['descricao'];
$usuarioLogado = $_SESSION['nome'];
$data = $_POST['dataEvento'];
$local = $_POST['local'];
$inicio = $_POST['inicio'];
$termino = $_POST['termino'];
$equipamentos = $_POST['equipamentos'];
$professor = $_POST['professor'];
$dia = date("Y-m-d H:i:s");

$usuarioLogado = $_SESSION['nome'].' '.$_SESSION['id'];
$nomeAlerta = $_SESSION['nome'];
if (substr($inicio, 0,2) <= 11) {
		$periodo = 'Matutino';
	}elseif (substr($inicio, 0,2) > 11 &&  substr($inicio, 0,2) < 17 ) {
		$periodo = 'Vespertino';

	}elseif (substr($inicio, 0,2) >= 17) {
		$periodo = 'Noturno';
	}else{
		$periodo = 'Indefinido';
	}
	


	if ($local == 'outro'){
		$local = $local2;
	}

$sql = mysqli_query($con, "SELECT * FROM eventos WHERE data = '$data' AND local ='$local' AND periodo = '$periodo' AND id <> '$id' ");
	$rows = mysqli_num_rows($sql);
	
	if ($rows == true){
		$flash = "<div class=\"alert alert-error\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=close\">×</a></button>
  			<strong>Advertência!</strong>
  			Já existe um evendo cadastrado para Esse dia, Local e Periodo!
  			</div>
  			";
  			return false;
  		
	}else{

$querySelect = "SELECT * FROM eventos WHERE id = '$id' LIMIT 1";
$i = mysqli_query($con, $querySelect);
$row = mysqli_num_rows($i);
if ($row == true ) {
	$ln = mysqli_fetch_array($i);
	
	if ($ln['usuario'] == $usuarioLogado) {
	mysqli_query($con, "DELETE FROM eventos WHERE id = '$id' LIMIT 1");

	mysqli_query($con, "INSERT INTO eventos (data, periodo, inicio, termino, local, professor, equipamentos, descricao, usuario, dia) 
			values ('$data','$periodo', '$inicio', '$termino', '$local', '$professor', '$equipamentos', '$descricao', '$usuarioLogado', '$dia' )");
		
	$flash = "<div class=\"alert alert-success\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?pcloseEvento$periodo\">×</a></button>
  			<strong>Advertência!</strong><br>
  			$nomeAlerta, O item selecionado \"<strong>$descricao</strong>\" Foi Alterado com Sucesso!
  			</div>
  			";
	}


}else{
	$flash = "<div class=\"alert alert-error\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?pcloseEvento$periodoEvento\">×</a></button>
  			<strong>Advertência!</strong><br>
  			$usuarioLogado, Ocorreu um Erro, você está tentando modificar um intem cadastrado por outro usuário!
  			</div>
  			";

}
}





?>
