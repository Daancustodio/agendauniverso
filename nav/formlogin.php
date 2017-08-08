<?php
	
	if (!isset($_SESSION['login']) && (!isset($_SESSION['senha']))){
	
?>
<div id="centrologin">
<center><h2 style="color:#fff; font-family:Arial, Helvetica, sans-serif; margin-top:15px;">Login</h2></center><br>
<div class="cadastro">
<form action="index.php?p=logar" method="post">
	<center>
	<label for="emailtxt">Email:</label>
	<input type="email" name="email" id="emaillog" autofocus placeholder="Seuemail@gmail.com"  class="txt bradius" required><br>
    <label for="senhatxt">Senha:</label>
    <input type="password" name="senha"  placeholder="Sua senha" id="senhalog"  class="txt bradius" required>
    <center><input type="submit" value="Logar" class="botao txt bradius">
	</center>
    </form>
</div>
</div>


<?php  }



 else{
	  $flash = '<div class="msg"><div class="flash" >'.$_SESSION['nome'].", Você já está logado, Deseja sair? ".' <a href="includes/logout.php"</a><span style="text-transform:uppercase; font-size:18px; color:#F00 !important;"> Sair</span> </div> </div> ' ;
	}
 ?>
<?php if (isset($flash)){ echo $flash; } ?>
 
 
