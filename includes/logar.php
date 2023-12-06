<?php
	
	
	$email = addslashes(strtolower($_POST["email"]));
	$senha = $_POST['senha'];
	$email = addslashes(strtolower($email));
	$senha = addslashes(sha1($senha));
	
	
	
	$sql = mysqli_query ($con,"SELECT * FROM cadastro_professores WHERE email = '$email' AND senha='$senha' ");
		if (MYSQLI_num_rows ($sql) == true  ){

			$ln = mysqli_fetch_array ($sql);
			if ($ln['status'] == 'aprovado'){
			$_SESSION['login'] = $ln['email'];
			$_SESSION['senha'] = $ln['senha'];
			$_SESSION['nome'] = $ln ['nome'];
			$_SESSION['id'] = $ln['id'];
			//$_SESSION['login'];
			$_SESSION['senha'];
			$nomeprofessor = $_SESSION['nome'];
			//$flash =  ' <div class="msg"><div class="flash">'.$_SESSION['nome'].", Logado com sucesso!".'</div> </div>';
			echo "<meta http-equiv='refresh' content='0; URL=index.php?p=home'> " ;
		}else{
			$flash = "<div class=\"msg\"><div class=\"flashatencao\"> O Seu cadastro já foi realizado, mas, para efetuar login aguarde a nossa aprovação. Entre em contato por telefone caso nessecite de urgência. </div> </div>";
			echo $flash;
		}
			
			
		}else{
			$flash = "<div class=\"msg\"><div class=\"flasherro\"> Email ou Senha incorretos! </div> </div>";
		echo $flash;
		exit;
		}
	


?>

