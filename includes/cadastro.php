<?php 

	$nome = $_POST['nome'];
	$sobrenome= $_POST['sobrenome'];
	$matricula = addslashes($_POST['matricula']);
	$email = addslashes (strtolower ($_POST['email']));
	$confirmaremail = addslashes (strtolower ($_POST['confirmaremail']));
	$senha = addslashes(sha1($_POST["senha"]));
	$confirmarsenha = addslashes(sha1($_POST["confirmarsenha"]));
	$telefone = $_POST['telefone'];
	$senhaRetorno = $_POST['senha'];
		
	//inserção no banco de dados
	$i = mysqli_query($con, "SELECT * FROM cadastro_professores WHERE email = '$email'");
	mysqli_num_rows($i);
	
	//confirmar senha
	if ($senha == $confirmarsenha){
		// confirmar email
		if($email == $confirmaremail){
			if (mysqli_num_rows($i) == false ){
			$insert = mysqli_query ($con, "INSERT INTO cadastro_professores (nome, sobrenome, matricula, email, senha, telefone, status) VALUES ('$nome', '$sobrenome','$matricula', '$email',
			 '$senha',
			 '$telefone', 'avaliar')");
			 
			var_dump(mysqli_error($con));
			 }
			else{
				$flash= '<div class="msg"><div class="flasherro">'."Desculpe, Mas já existe um usuário com este email cadastrado em nosso sistema.".'
				</div> 
				</div>
				';
			}
			if ($insert){
				$flash= '<div class="msg"><div class="flash">'."Cadastro Realizado com Sucesso, Em instantes você recebera um Email de confirmação contendo todos os seus dados!".'</div> </div>';
			} else{
				if($flash == ""){
				$flash= '<div class="msg"><div class="flasherro">'."Houve um erro em nosso sistema, contate o Audio Visual".'</div> </div>';
				}
			}
		//Retorno para o usucário erro de digitação nos email
		}else{
			$flash= '<div class="msg"><div class="flasherro">'."Os Emails digitados não conferem! retorne e tente novamente".'</div> </div>';
		}// fim validação email
		}else // retorna para o usuário erro na digitação de senha
		{
		$flash= '<div class="msg"><div class="flasherro">'."As senhas digitadas não conferem! retorne e tente novamente".'</div> </div>';
	}// fim validação de senha

	function enviaEmail(){
		mail("$email",
			"Dados Cadastrados",
			"
			Nome: $nome \n 
			Sobrenome: $sobrenome \n
			Telefone: $telefone \n
			Usuário: $email \n
			Senha : $senhaRetorno \n\n

			Att: 
			Audio Visual Goiânia
			tel: (62) 3238-3028
			
			");
	}
?>
	

<?php echo $flash ?>


	