<?php 
include 'db.php';
$i = mysqli_query($con, "SELECT * FROM cadastro_professores WHERE status = 'avaliar' ");
$j = mysqli_num_rows($i);
if ($j == true){
	while ($ln = mysqli_fetch_array($i)){
?>
	<tr>
    <td><?php echo $ln['id']; ?></td>
    <td><?php echo $ln['matricula']; ?></td>
    <td><?php echo $ln['nome']; ?></td>
    <td><a href="?p=aprovar&id=<?php echo $ln['id']?>&nome=<?php echo $ln['nome'];?>" title="Aprovar cadastro como Usuário comum">Aprovar</a></td>
    <td><a href="?p=aprovarAdministrador&id=<?php echo $ln['id']?>&nome=<?php echo $ln['nome'];?>&nivel=3" title="Tonar esse Usuário Administrador">ADM</a></td>
    <td><a href="?p=bloquear&id=<?php echo $ln['id']?>&nome=<?php echo $ln['nome'];?>" title="Bloquer esse Usuário">Bloquear</a></td>


  </tr>
<?php
 }// fim do IF
	
	}
    // fim do laço




 