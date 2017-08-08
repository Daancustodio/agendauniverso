<?php include 'includes/controller/controle.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"><meta charset=utf-8>
	<meta name=description content="Area Administrativa">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/view/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="includes/view/css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="../css/images/favicon.ico">
	<link rel="shortcut icon" href="../css/images/favicon.ico">

	<title>AudioVisual | Área Administrativa</title>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span4"></div>		
			<div class="span4 ajuste">
				<div class="insert">
					<form  method="POST" action="index.php?p=logar">
						<fieldset>
							<legend class="dcadm"> <img src="css/img/logoUniverso.png" height="70" width="220" alt="">Administração</legend>
							<label><i class="icon-user icon-black" title="Digite seu login de administrador"></i></label>
							<input type="email" name="email" autofocus="autofocus" id="inputEmail" class="dcinput" required="required" placeholder="Email">
							<i class="icon-asterisk icon-black" title="Digite sua senha de administrador"></i>

							<input type="password" required="required" name="senha" id="inputPassword" class="dcinput" placeholder="Senha"> <br>
							<center><button type="submit" class="btn btn-primary dcbnt">Entrar</button><br>
							<a href="http://universo.simbolizer.host22.com/index.php?p=formcadastro" target="_BLANK">Cadastre-se</a>
							</center>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="span4"></div>
		</div>
	</div>
</body>
</html>