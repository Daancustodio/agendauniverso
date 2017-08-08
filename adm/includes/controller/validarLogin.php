<?php
include '../model/logar.php'; 
if (isset($_SESSION['nome']) && isset($_SESSION['id'])){
	header('Location: ../home.php');
}else{
	header ('Location: ../../index.php');
}

?>