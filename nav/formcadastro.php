<?php
	
	if (!isset($_SESSION['login']) && (!isset($_SESSION['senha']))){
	
?>


<div id="centrologin">
  <center><h2 style="color:#fff; font-family:Arial, Helvetica, sans-serif; margin-top:5px;">CADASTRO</h2></center><br>
  <center><div class="cadastro">


    <form nome="form1" onSubmit="return verificarSenha();" method="POST"   action="index.php?p=cadastrar" >

      <label>Nome:</label>
      <label for="nometxt"></label>
      <input type="text" name="nome" placeholder="Seu primeiro nome" maxlength="20" id="nometxt" class="txt bradius" required>
      <br>   
      <label for="sobrenometxt">Sobrenome:</label>
      
      <input type="text" name="sobrenome" maxlength="30" placeholder="Seu sobrenome" id="sobrenometxt" class="txt bradius"  required>
      <br>   
      <label for="matricula">Matricula:</label>
      <input type="text" name="matricula" placeholder="Numero de matricula" maxlength="6" class="txt bradius">
      <br>

      <label for="senhatxt">Senha:</label>
      
      <input type="password" name="senha" id="senha" placeholder="Maximo 30 caracteres" maxlength="30"  class="txt bradius" required>
      <br>   
      <label for="confirmarsenhatxt">Confirmar Senha:</label>
      <input type="password" id="confirmarsenha" name="confirmarsenha" placeholder="Confirmar senha" maxlength="30"   class="txt bradius" required>
      
      <br>   
      
      <label for="emailtxt">Email:</label>
      
      <input type="email" name="email" id="email" placeholder="Seu email" maxlength="80"  class="txt bradius" required>
      <br>   
      <label for="emailtxt">Confirmar email:</label>
      
      <input type="email" name="confirmaremail" id="confirmaremail" maxlength="80" placeholder="Confirmar email"  class="txt bradius" required><br>
            
      <label for="telefonetxt">Celular:</label>
      
      <input type="tel" name="telefone" id="telefonetxt" maxlength="20" placeholder="(62)0000-0000" class="txt bradius"required><br>
      
      
      <center> <input type="submit" id="botao" name="enviar" value="cadastrar" class="botao txt bradius">
      </center></form>
    </div></center>
  </div>

<?php  }



 else{
	  $flash = '<div class="msg"><div class="flash" >'.$_SESSION['nome'].", Você está logado, Deseja sair? ".' <a href="includes/logout.php"</a><span style="text-transform:uppercase; font-size:18px; color:#F00 !important;"> Sair</span> </div> </div> ' ;
	}
 ?>
<?php if (isset($flash)){ echo $flash; } ?>