<?php	
		$id = $_GET['id'];
	  	$host ="localhost";
		$user ="simboliz_audio";
		$pass ="audio";
		$dbname ="simboliz_audio";
		
		$con = mysql_connect ($host, $user, $pass);
		$selectdb = mysql_select_db ($dbname, $con);

		$sql = mysqli_query($con, "SELECT * FROM cadastro_professores WHERE id = '$id'");
		while($ln = mysqli_fetch_array($sql, MYSQLI_BOTH)){
?>

<div id="centrologin">
<center><h2 style="color:#fff; font-family:Arial, Helvetica, sans-serif; margin-top:5px;">CADASTRO</h2></center><br>
<center><div class="cadastro">


<form  method="POST"  action="../includes/editarusuario.php" >
		<input type="hidden" name="id" value="<?php echo $ln['id']; ?>">	

      <label>Nome:</label>
      <label for="nometxt"></label>
      <input type="text" name="nome" value="<?php echo $ln['nome']; ?>" maxlength="20" id="nometxt" class="txt bradius" required><br>
<br>   
      <label for="sobrenometxt">Sobrenome:</label>
      
      <input type="text" name="sobrenome" maxlength="30"  value="<?php echo $ln['sobrenome']; ?>" class="txt bradius"  required><br>
<br>   
  
    <label for="senhatxt">Senha:</label>
      
      <input type="password" name="senha" id="senha"   maxlength="30"  class="txt bradius" required><br>
<br>   
     <label for="confirmarsenhatxt">Confirmar Senha:</label>
      <input type="password" id="confirmarsenha" name="confirmarsenha"  maxlength="30"   class="txt bradius" required><br>
    
<br>   
    
	<label for="emailtxt">Email:</label>
      
      <input type="email" name="email" id="email"  value="<?php echo $ln['email']; ?>"  maxlength="80"  class="txt bradius" required><br>
<br>   
   
    <label for="telefonetxt">Celular:</label>
      
      <input type="tel" name="telefone" id="telefonetxt" maxlength="20"  value="<?php echo $ln['telefone']; ?>" class="txt bradius"required><br>
    
    
     <center> <input type="submit" id="botao" name="enviar" value="Salvar Alterações" class="botao txt bradius">
	 </center></form>
</div></center>
</div>
<?php
		}//fim do laço 
?>