<?php 
include 'db.php';


	mysqli_query($con, "UPDATE cadastro_professores SET status = 'aprovado' WHERE id = '$id' ");
	//header ('Location: ../view/home.php');
	$flash = "<div class=\"alert alert-success\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=close\">×</a></button>
  			<strong>Advertência!</strong>
  			O usuário(a) $nome foi Aprovado(a)!
  			</div>
  			";
  	mysql_close($con);
 ?>