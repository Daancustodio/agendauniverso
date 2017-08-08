<?php
if (isset($_GET["p"])){
	
	$p = $_GET["p"];
	switch ($p) {
		case "home":
		include ("../../../adm/includes/view/corpoInicial.php");
		break;


		case "cadastrarEvento":
		include "../../../adm/includes/model/cadastrarEvento.php";
		include "../../../adm/includes/view/corpoInicial.php";
		break;

		case 'menuAprovar':
			include "../../../adm/includes/view/tableAprovar.php";
			break;

		case "cadastrarPos":
		include "../model/cadastrarPos.php";
		include "../../../adm/includes/view/corpoInicial.php";
		break;

		case "exibirPosGraduacao":
		include "exibiPosGraduacao.php";
		break;

		case 'excluirPos':
			include "../../../adm/includes/model/excluirPos.php";
			include "../../../adm/includes/view/exibiPosGraduacao.php";
			break;

		case 'excluirPos_submit':
			include "../../../adm/includes/model/excluirPos_submit.php";
			include "../../../adm/includes/view/exibiPosGraduacao.php";
			break;

		case "todosEventosNoturno":
		include "exibeTodosEventosNoturno.php";
		break;

		case "aprovar":

		$id = ($_GET["id"]);
		$nome = $_GET["nome"];
		include "../../../adm/includes/model/aprovar.php";
		include "../../../adm/includes/view/corpoInicial.php";
		break;

		case "aprovarAdministrador":

		$id = ($_GET["id"]);
		$nome = $_GET["nome"];
		include "../../../adm/includes/model/aprovarADM.php";
		include "../../../adm/includes/view/corpoInicial.php";
		break;

		case "bloquear":
		$id = ($_GET["id"]);
		$nome = $_GET["nome"];
		include "../../../adm/includes/model/bloquear.php";
		include "../../../adm/includes/view/corpoInicial.php";
		break;
		case "close":	
		unset($flash);
		include "../../../adm/includes/view/corpoInicial.php";
		break;

		case "closePos":	
		unset($flash);
		include "../../../adm/includes/view/exibiPosGraduacao.php";
		break;

		case "closeEventoMatutino":	
		unset($flash);
		include "../../../adm/includes/view/exibeTodosEventosMatutino.php";
		break;
		
		case "closeEventoVespertino":	
		unset($flash);
		include "../../../adm/includes/view/exibeTodosEventosVespertino.php";
		break;
		
		case "closeEventoNoturno":	
		unset($flash);
		include "../../../adm/includes/view/exibeTodosEventosNoturno.php";
		break;

		case "logar":
		
		include "includes/model/logar.php";
		break;

		case 'sair':
		
		
		unset ($_SESSION['nome']);
		unset ($_SESSION['sobrenome']);
		unset ($_SESSION['id']);
		
		echo "<meta http-equiv='refresh' content='0; URL=../../index.php'> " ;
		break;

		case "todosEventosMatutino":

		include "exibeTodosEventosMatutino.php";
		break;

		case 'todosEventosVespertino':
			include "exibeTodosEventosVespertino.php";
			break;

		case 'excluirEventoM':
			include "../../../adm/includes/model/excluirEvento.php";
			include "../../../adm/includes/view/exibeTodosEventosMatutino.php";
			break;

			case 'editarEvento':
			include "../../../adm/includes/model/editarEvento.php";
			include "../../../adm//includes/view/exibeTodosEventosMatutino.php";
			break;

		case 'excluirEvento_submitMatutino':
			include "../../../adm/includes/model/excluirEvento_submit.php";
			include "../../../adm/includes/view/exibeTodosEventosMatutino.php";
			break;

		case 'editarEvento_SubmitMatutino':
			include "../../../adm/includes/model/editarEvento_Submit.php";
			include "../../../adm/includes/view/exibeTodosEventosMatutino.php";
			break;

		case 'excluirEventoN':
			include "../../../adm/includes/model/excluirEvento.php";
			include "../../../adm/includes/view/exibeTodosEventosNoturno.php";
			break;

		case 'excluirEvento_submitNoturno':
			include "../../../adm/includes/model/excluirEvento_submit.php";
			include "../../../adm/includes/view/exibeTodosEventosNoturno.php";
			break;

		case 'excluirEventoV':
			include "../../../adm/includes/model/excluirEvento.php";
			include "../../../adm/includes/view/exibeTodosEventosVespertino.php";
			break;
			
		case 'excluirEvento_submitVespertino':
			include "../../../adm/includes/model/excluirEvento_submit.php";
			include "../../../adm/includes/view/exibeTodosEventosVespertino.php";
			break;


		default:
		include "../../../adm/includes/view/corpoInicial.php";
		break; 
	}
}


?>