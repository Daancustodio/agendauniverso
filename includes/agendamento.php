<?php
	
	$dia = $_POST['data'];
	$sala = $_POST['sala'];
	$horario = $_POST['hora'];
	$idprofessor = $_SESSION['nome'];
	
	$sql = mysqli_query ($con,"SELECT * FROM $sala WHERE data = '$dia' AND  hora = '$horario' ");
	
	if (mysqli_num_rows($sql) == true){
		$mostranome = mysqli_fetch_array($sql, MYSQLI_BOTH);
		$mostranome = $mostranome['idprofessor'];
		
		$flash = "<div class=\"msg\"><div class=\"flasherro\"> Desculpe, esse horário já foi Agendado pelo professor(a): $mostranome,   Tente uma Outa sala ou Outro horário. </div> </div>";
		echo $flash;
		exit;
	}else{
	$sql = mysqli_query($con, "INSERT INTO $sala (idsala, idprofessor, data, hora, status) values ('$sala', '$idprofessor', '$dia','$horario','ocupado') ");
		$flash = "<div class=\"msg\"><div class=\"flash\">Agendamento efetuado com Sucesso! $sala </div> </div>";
		echo $flash;
	}

?>
