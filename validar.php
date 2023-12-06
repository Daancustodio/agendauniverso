<?php
		

	  	function colunasHorarios(){
			return 'horario1,
			horario2,
			horario3,
			horario4,
			horario5,
			horario6,
			horario7,
			horario8,
			horario9,
			horario10,
			horario11,
			status';
		}
	  	function colunasHorariosValores(){
			return '"",
			"",
			"",
			"",
			"",
			"",
			"",
			"",
			"",
			"",
			"",
			""';
		}

		function criarLinha($sala, $data){
			include("conexao.php");
			$colunas = colunasHorarios();
			$valores= colunasHorariosValores();
			mysqli_query ($con,"INSERT INTO $sala (data, $colunas) values ('$data', $valores) ");
			$sql = mysqli_query ($con,"SELECT * FROM $sala WHERE data = '$data' "); 
			$ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
			return $ln;
		}

?>