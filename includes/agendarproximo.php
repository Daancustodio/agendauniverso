<?php
		$dia = $_GET['data'];
		$horario = $_GET['horario'];
		$sala = $_GET['sala'];
		$bgred = 'style="background:#F00; "';
		$nomeprofessor = $_SESSION['nome'];
		$id = $_SESSION['id'];
		
		$sql = mysqli_query ($con,"SELECT * FROM $sala WHERE data = '$dia'");
		if(mysqli_num_rows($sql) == true){
			$i = mysqli_fetch_array($sql, MYSQLI_BOTH);
			$i = $i["$horario"];
			if ($i == ' '){			
				$sql = mysqli_query($con, "UPDATE $sala SET  $horario = '$id$nomeprofessor' WHERE data = '$dia'");
				$flash = "Agendamento efetuado com sucesso sala: $sala, Data: $dia";
			echo "<div class=\"msg\"><div class=\"flash\">$flash </div> </div>";
			}
			elseif ($i == false){			
				$sql = mysqli_query($con, "UPDATE $sala SET  $horario = '$id$nomeprofessor' WHERE data = '$dia'");
				$flash = "Agendamento efetuado com sucesso sala: $sala,  Data: $dia";
			echo "<div class=\"msg\"><div class=\"flash\">$flash </div> </div>";
			}//fim if
			else {
				$flash = "Desculpe, essa sala foi agendada agora à pouco! tente outra sala ou outro horário";
				echo "<div class=\"msg\"><div class=\"flasherro\">$flash </div> </div>";
			}//fim else
		} 
		else {
			$sql = mysqli_query($con,"INSERT INTO $sala ( data, $horario, status)
			values ('$dia','$id$nomeprofessor','ocupado')");
			$flash = "Agendamento efetuado com sucesso sala: $sala, Data: $dia";
			echo "<div class=\"msg\"><div class=\"flash\">$flash </div> </div>";
		}
		
	?>
		
