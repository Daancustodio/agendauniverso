
	function verificarSenha(){
		var senha = document.getElementById("senha").value;
		var confirmarSenha = document.getElementById("confirmarsenha").value;
		
		var email = document.getElementById("email").value;
		var confirmarEmail = document.getElementById("confirmaremail").value;
		
		if(senha == confirmarSenha){
			if(email == confirmarEmail){
				return true;
			}else{
				alert("Os email digitados não conferem.");
				return false;
			}
		}else{
			alert("As senhas digitadas não conferem.");
			return false;
		}
	}// JavaScript Document