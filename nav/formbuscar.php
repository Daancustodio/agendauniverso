<script type="text/javascript">
	function verificar(){
		var data = document.forms.formbuscar.data.value;
		if (data.length < 10 ){
			alert('data invalida');
			return false;
		}else if (data.charAt(2) == "/" && data.charAt(5) == "/" ){
			return true;
		}else if (data.charAt(4) == "-" && data.charAt(7) == "-" ){
			return true;
		}else{
			alert('data invalida');
			return false;
		}
		
		
	}

</script>

<?php 
		// inicio de verificação de edição de dados
		if (isset($_SESSION['editado'])){
			echo "<div class=\"msg\"><div class=\"flasherro\">Você acabou de Alterar seus dados, por medida de segurança saia e entre novamente no sistema para continuar suas atividades, Obrigado. </div> </div>";
			return false;
			}else{
if (isset($_SESSION['login'])){ ?>
<div class="msg"><div class="flashatencao"> * ATENÇÂO!! Caso não esteja utilizando o navegador CHROME, SAFARI ou OPERA, a data deve ser digitada no formato: dd/mm/aaaa, separada por " / " como no exemplo: <?php echo date("d/m/Y"); ?></div></div>
<div id="centrologin">
<center><h2 style="color:#fff; font-family:Arial, Helvetica, sans-serif; margin-top:15px;">Buscar</h2> <h3> </center><br>
<div class="cadastro">
<form name="formbuscar" onSubmit="return verificar();" method="POST" action="index.php?p=buscar">
	<label>Entre com a data desejada</label>
    <br>
	<input type="date" class="txt bradius" maxlength="10" required autofocus  placeholder="<?php echo date("d/m/Y"); ?>" name="data" />
	<br />
	<br />
    <center><input type="submit" value="Buscar" class="botao txt bradius">
	</center>
</form>
</div>
</div>

<?php }else {
	$flash = "<div class=\"msg\"><div class=\"flasherro\"> Você precisa estar LOGADO para acessar essa página! </div> </div>";
		echo $flash;
		include "formlogin.php";
			} 
			}// fim da verificação de edição de dados
	?>