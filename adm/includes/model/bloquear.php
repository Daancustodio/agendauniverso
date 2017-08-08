<?php 
include 'db.php';

$query = mysqli_query($con, "UPDATE cadastro_professores SET status = 'bloqueado' WHERE id = '$id' ");
$flash = "<div class=\"alert\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?p=close\">×</a></button>
  			<strong>Advertência!</strong>
  			O usuário(a) $nome foi Bloqueado(a)!
  			</div>
  			";
//header ("Location: ../view/home.php");
mysql_close($con);
?>