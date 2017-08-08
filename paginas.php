<?php
	if (isset($_GET['p'])){
	
	switch($_GET['p'])  {
	default:
	include "home.php";
	break;
		
	case 'formcadastro':
	include("nav/formcadastro.php");
	break;
	
	case 'login':
	include("nav/formlogin.php");
	break;
	
	case 'cadastrar':
	include("includes/cadastro.php");
	break;
	
	case 'logar':
	include ("includes/logar.php");
	break;
	

	
	case 'agendar':
	include("includes/agendamento.php");
	break;
	
	case 'formcontato';
	include("nav/formcontato.php");
	break;
	
	case 'enviar';
	include ("includes/enviar.php");
	break;
	
	case 'formbuscar';
	include ("nav/formbuscar.php");
	break;

	
	case 'buscar';
	include ("includes/buscar.php");
	break;

	
	// Agendar SALAS
	case 'agendarsala';
	include ("includes/agendarsala.php");
	break;
	
	case 'agendarproximo';
	include ("includes/agendarproximo.php");
	break;
	
	//cancelar agendamento
	case 'cancelar';
	include ("includes/cancelar.php");
	break;
	
	//editar meu usuario

	case 'editar';
	include ('nav/formeditarusuario2.php');
	break;
	
	case 'salvaralteracaousuario';
	include ('includes/salvaralteracaousuario.php');
	break;
	
	}
	}else {
		include ("home.php");
		
	}
	
?>