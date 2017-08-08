<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"><meta charset=utf-8>
		<meta name=description content="Area Administrativa">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../view/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="../view/css/bootstrap.css">
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="icon" href="../../../css/images/favicon.ico">
		

		<link rel="shortcut icon" href="../../../css/images/favicon.ico">

		<title>AudioVisual | Área Administrativa</title>



	
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid  tamanhoMinimo ">
			<div class="navbar dcNav">
				<div class="navbar-inner  dcNavInner">
					<a class="brand" href="http://www.ptc.simbolizer.com" title="Ir ao Site principal" target="_BLANK">Audio Visual
					</a>
					<ul class="nav nav-pills ">
						<li <?php switch ($_GET['p']) {
							case 'home':
								echo 'class="active"';
								break;
							} ?>>
							<a href="home.php?p=home">Início</a></li>
						<li <?php switch ($_GET['p']) {
							case 'todosEventosMatutino':
								echo 'class="active"';
								break;
							} ?>>
							<a href="home.php?p=todosEventosMatutino">Matutino</a></li>
						<li <?php switch ($_GET['p']) {
							case 'todosEventosVespertino':
								echo 'class="active"';
								break;
							} ?>>
							<a href="home.php?p=todosEventosVespertino">Vespertino</a></li>
							<li <?php switch ($_GET['p']) {
							case 'todosEventosNoturno':
								echo 'class="active"';
								break;
							} ?>>
							<a href="home.php?p=todosEventosNoturno">Noturno</a></li>
						<li <?php switch ($_GET['p']) {
							case 'exibirPosGraduacao':
								echo 'class="active"';
								break;
							} ?>>
							<a href="home.php?p=exibirPosGraduacao">Pós</a></li>
						<li <?php switch ($_GET['p']) {
							case 'menuAprovar':
								echo 'class="active"';
								break;
							} ?>>
							<a href="home.php?p=menuAprovar">ADM</a></li>
					</ul>
					<div class="btn-sair">
					<a class="btn btn-danger btn-mini" href="home.php?p=sair" title="Clique aqui para finalizar sua sessão"><i class="icon-off icon-white"></i> Sair</a>
					</div>
				</div>
			</div>
		</div>
			