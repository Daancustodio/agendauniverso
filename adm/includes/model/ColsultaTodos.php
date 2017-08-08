<?php 
include 'db.php';

$i = mysqli_query($con, "SELECT * FROM cadastro_professores ORDER BY id DESC");
$j = mysqli_num_rows($i);
if ($j == true){
	while ($ln = mysqli_fetch_array($i)){
?>
	<tr>
    <td><?php echo $ln['id']; ?></td>
    <td><?php echo $ln['matricula']; ?></td>
    <td><?php echo $ln['nome']; ?></td>
    <td><?php echo $ln['status']; ?></td>
    

  </tr>
<?php
 }// fim do IF
	
	}// fim do laço




 