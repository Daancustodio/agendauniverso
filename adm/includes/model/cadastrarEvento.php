<?php
	
	include 'db.php';	
	$data = mysqli_real_escape_string($con, $_POST['data']);
	$local = mysqli_real_escape_string($con, $_POST['local']);
	$professor = mysqli_real_escape_string($con, $_POST['professor']);
	$equipamentos = mysqli_real_escape_string($con, $_POST['equipamentos']);
	$descricao = mysqli_real_escape_string($con, $_POST['descricao']);
	$inicio = mysqli_real_escape_string($con, $_POST['inicio']);
	$termino = mysqli_real_escape_string($con, $_POST['termino']);
	$local2 = mysqli_real_escape_string($con, $_POST['local2']);

	$dia = date("Y-m-d H:i:s");
	$usuarioLogado = $_SESSION['nome'].' '.$_SESSION['id'];


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

	$sql = mysqli_query($con, "SELECT * FROM eventos WHERE data = '$data' AND local ='$local' AND periodo = '$periodo'");
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
		mysqli_query($con, "INSERT INTO eventos (data, periodo, inicio, termino, local, professor, equipamentos, descricao, usuario, dia) 
			values ('$data','$periodo', '$inicio', '$termino', '$local', '$professor', '$equipamentos', '$descricao', '$usuarioLogado', '$dia' )");
		$flash = "<div class=\"alert alert-success\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=close\">×</a></button>
  			<strong>Advertência!</strong>
  			Evento cadastrado com Sucesso!
  			</div>
  			";
  		
	}
	
?>