<?php
	  	$host ="localhost";
		$user ="simboliz_audio";
		$pass ="audio";
		$dbname ="simboliz_audio";
			
		$con = mysql_connect ($host, $user, $pass);
		$selectdb = mysql_select_db ($dbname, $con);
		$id = $_POST['id'];	
		$nome = $_POST['nome'];
		$sobrenome= $_POST['sobrenome'];
		$email = addslashes (strtolower ($_POST['email']));
		$senha = addslashes(sha1($_POST["senha"]));
		$telefone = mysql_real_escape_string($_POST['telefone']);
		$senhaRetorno = $_POST['senha'];
		$nome = mysql_real_escape_string($nome);
		$email = mysql_real_escape_string($email);
		$senha = mysql_real_escape_string($senha);

		$sql = mysqli_query($con, "UPDATE cadastro_professores SET nome = '$nome' , sobrenome = '$sobrenome', email = '$email',senha = '$senha' ,telefone =
		 '$telefone' WHERE id = '$id' ");

		if (isset($sql)) {
		echo "<div class=\"msg\"><div class=\"flash\">Seus dados foram alterados com sucesso, por medida de segurança saia e entre novamente no sistema caso queira continuar suas atividades, Obrigado. </div> </div>";
		$_SESSION['editado'] = 'editado';
		}else
		{
			echo 'erro';
		}
?>