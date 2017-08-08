<?php
		$data = date("d/m/Y");
		$horario = $_GET['horario'];
		$sala = $_GET['sala'];
		$bgred = 'style="background:#F00; "';
		$nomeprofessor = $_SESSION['nome'];
		$id = $_SESSION['id'];
		
		$sql = mysqli_query ($con,"SELECT * FROM $sala WHERE data = '$data'");
		if(MYSQLI_num_rows($sql) == true){
			$i = mysqli_fetch_array($sql, MYSQLI_BOTH);
			$i = $i["$horario"];
			if ($i == ' '){			
				$sql = mysqli_query($con, "UPDATE $sala SET  $horario = '$id$nomeprofessor' WHERE data = '$data'");
				$flash = "Agendamento efetuado com sucesso sala: $sala, Data: $data";
			echo "<div class=\"msg\"><div class=\"flash\">$flash </div> </div>";
			}
			elseif ($i == false){			
				$sql = mysqli_query($con, "UPDATE $sala SET  $horario = '$id$nomeprofessor' WHERE data = '$data'");
				$flash = "Agendamento efetuado com sucesso sala: $sala, Data: $data";
			echo "<div class=\"msg\"><div class=\"flash\">$flash </div> </div>";
			}//fim if
			else {
				$flash = "Desculpe, essa sala foi agendada agora à pouco! tente outra sala ou outro horário";
				echo "<div class=\"msg\"><div class=\"flasherro\">$flash </div> </div>";
			}//fim else
		} 
		else {			
			$sql = mysqli_query($con, "INSERT INTO $sala ( data, $horario, status)
			values ('$data','$id$nomeprofessor','ocupado')");
			$flash = "Agendamento efetuado com sucesso sala: $sala, Data: $data";
			echo "<div class=\"msg\"><div class=\"flash\">$flash </div> </div>";
		}
		
	?>
		
		
<form action="index.php?p=home" >
<center>
<button type="submit" class="botao txt bradius"> Voltar </button>
</center>
</form>
		
		
		
		
		
