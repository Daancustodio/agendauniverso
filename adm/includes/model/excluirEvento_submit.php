<?php 
include "db.php";

$id = $_POST['idfinal'];
$descricao = $_POST['descricao'];
$usuarioLogado = $_SESSION['nome'];
$periodoEvento = $_POST['periodoEvento'];

$querySelect = "SELECT * FROM eventos WHERE id = '$id' LIMIT 1";
$i = mysqli_query($con, $querySelect);
$row = mysqli_num_rows($i);
if ($row == true ) {
	$ln = mysqli_fetch_array($i);
	$nome = explode(" ", $ln['usuario']);
	
	if ($nome[0] == $usuarioLogado) {
	mysqli_query($con, "DELETE FROM eventos WHERE id = '$id' LIMIT 1");
	$flash = "<div class=\"alert alert-success\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?pcloseEvento$periodoEvento\">×</a></button>
  			<strong>Advertência!</strong><br>
  			$usuarioLogado, O item selecionado \"<strong>$descricao</strong>\" Foi excuido com Sucesso!
  			</div>
  			";
	}else{
	$flash = "<div class=\"alert alert-error\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?pcloseEvento$periodoEvento\">×</a></button>
  			<strong>Advertência!</strong><br>
  			$usuarioLogado, Ocorreu um Erro, você está tentando excluir um intem cadastrado por outro usuário!
  			</div>
  			";
	}
}else{
	$flash = "<div class=\"alert alert-error\">
			<button type=\"button\" class=\"close\" name=\"close\" data-dismiss=\"alert\"><a href=\"?pcloseEvento$periodoEvento\">×</a></button>
  			<strong>Advertência!</strong><br>
  			$usuarioLogado, Ocorreu um Erro, o intem selecionado não foi encontrado, Tente novamente mais tarde, ou contate o AudioVisual!
  			</div>
  			";
}



?>
