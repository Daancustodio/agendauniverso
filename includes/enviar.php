<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	if ( isset ($nome) && isset($telefon) && isset($email) && isset($assunto) &&  isset($mensagem)){
	mail("srdaniiel@gmail.com",
	"$assunto",
	"$mensagem
	\n
	\n
	\n
	$nome \n $telefone \n $email", 
	
	"From:$nome \n $email");
	
	$flash = "Mensagem Enviada!";
	}else{
	$flash='<span style="color:#f00; font-size:14px;">Erro ao enviar a mensagem, porfavor, reporte ao suporte no email:</span> <span style="color:#090; text-transform:uppercase; ">srdaniiel@gmail.com </span>';
	}
?>

<div class="msg"><div class="flash"><?php echo $flash ?></div> </div>
