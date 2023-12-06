<?php 
	$data = $_GET['data'];
	$horario = $_GET['horario'];
	$sala = $_GET['sala'];
	$sql = mysqli_query($con, "UPDATE $sala SET  $horario = ' ' WHERE data = '$data'");
	
	$flash = "Cancelamento efetuado com sucesso sala: $sala, Data: $data";
			
	echo "<div class=\"msg\"><div class=\"flashatencao\">$flash </div> </div>";

?> 

		