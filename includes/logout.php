<?php
	session_start();
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	unset ($_SESSION['nome']);
	unset ($_SESSION['editado']);
	
		header ("Location: ../index.php?p=login");
	
	
 
 ?>
