<?php 
include 'db.php';
ob_start();

if(isset($_POST['email']) && isset($_POST['senha'])){
$email = $_POST['email'];
$senha = addslashes(sha1($_POST['senha']));
$senha = substr($senha,0,30);

$sql = mysqli_query($con, " SELECT * FROM cadastro_professores WHERE email = '$email' AND senha = '$senha' AND nivel=3 ") ;
if(mysqli_num_rows($sql) == true){
	$ln = mysqli_fetch_assoc($sql);
	
	session_start();
	$_SESSION['nome'] = $ln['nome'];
	$_SESSION['sobrenome'] = $ln['sobrenome'];
	$_SESSION['id'] = $ln['id'];
	$usuarioLogado = $_SESSION['nome'].' '.$_SESSION['id'];
	

	
	header('Location: includes/view/home.php?p=home');
}else{
	echo "<div class=\"alert alert-error\">
			
  			<strong>Advertência!</strong>
  			O usuário(a) Não permitido!
  			</div>
  			";


	
}
} else{
	echo "<div class=\"alert alert-error\">
			
  			<strong>Advertência!</strong>
  			Por favor, Digite seu Usuário e senha nos campos abaixo!
  			</div>
  			";
}
mysql_close($con);
?>