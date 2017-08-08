<?php
	  	$host ="localhost";
		$user ="simboliz_audio";
		$pass ="audio";
		$dbname ="simboliz_audio";
		
		$id = $_GET['id'];
		
		$con = mysql_connect ($host, $user, $pass);
		$selectdb = mysql_select_db ($dbname, $con);

		$sql = mysqli_query($con, "DELETE FROM cadastro_professores WHERE id = '$id'");

		if (isset($sql)) 
		echo "Deletado com sucesso";
		else
		echo 'erro';

?>