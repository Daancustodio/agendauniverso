<?php 
session_start();

if (isset($_SESSION['nome']) && isset($_SESSION['sobrenome']) && isset($_SESSION['id'])) {



include "head.php";
?>

<div class="row-fluid">
	<?php
		include "../controller/controle.php"; 
	  ?>
</div>
	
<?php include "footer.php"; 
		} else {
			header ("Location: ../../../adm/index.php");
		} 
?>