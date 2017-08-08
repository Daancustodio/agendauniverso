<?php
include("conexao.php");
session_start();

?>

<!doctype html>
<html>
<head>
<script type="text/javascript" src="nav/verificar.js"> </script>
<meta charset="utf-8">
<meta name="author" content="Daniel Custódio" />
<meta name="description" content="Sistema desenvolvido para agendar equipamentos online, Faculdade UNIVERSO GO" />
<title>Audio Visual | Goiânia</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/cadastro.css" rel="stylesheet" />
<link rel="icon" href="css/images/favicon.ico">
<link rel="shortcut icon" href="css/images/favicon.ico">

</head>
</script>

<body id="bodyazul">
<div class="dicas" title="Site optimizado para os navegadores CHROME, OPERA e SAFARI">
   	<img src="css/images/chrome.png" >
   	<img src="css/images/safari.png" >
   	<img src="css/images/opera.png" >
</div>

<div id="container">
<?php include("menu.php"); ?>

<div class="content"> 
<?php include("paginas.php"); ?>
</div>
  
   <div class="clear">
   </div>
  <div class="footer">
    <center>
    <div class="centralizarrodape">
	<div class="desenvolvedor">
    	 <p> 
        	<a href="http://www.fb.com/daancustodio" target="_blank" title="Daniel Custódio">
            Desenvolvedor
            </a></p>
          <div class="siteeface">
              <a href="http://simbolizer.com/index.php?sr=nav/home" title="SITE do densevolvedor, Simbolizer.com" target="_blank">
          <div class="meusite"></div></a> 
              <a href="http://www.facebook.com/daancustodio" target="_blank" title="Facebook do densevolvedor Daniel Custódio">
          <div class="meuface"></div></a>
		  </div> </p>
	</div>
    <div class="desenvolvedor">
    	        	<p>&copy; Audio Visual Goiânia</p>

        <div class="telefone">

            <span class="tel">(62) 3238 - 3028</span>
        </div>
	</div>
    </div>

	</center>
    <!-- end .footer --></div>
    </div>
</body>
</html>