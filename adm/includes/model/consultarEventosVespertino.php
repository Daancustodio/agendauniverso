<?php

include 'db.php';
$data = date('Y-m-d');

$i = mysqli_query($con, "SELECT * FROM eventos WHERE data>='$data' AND periodo = 'Vespertino'  ORDER BY data LIMIT 5");

if ($i == false){

        echo("<tr class=\"text-info\"><center><td colspan=\"8\"><center><strong>Não foram cadastradas Eventos para o período VESPERTINO.<strong></center></td></tr>");
    }else{
	while ($ln = mysqli_fetch_array($i)){
?>
	<tr <?php if ($ln['data'] == $data) {echo 'class="success dcTxtPreto"';} ?>>
    <td><?php $dia = date('d/m/Y', strtotime($ln['data']));
    	echo $dia;
    ?></td>
    <td><?php echo $ln['periodo']; ?></td>
    <td><?php echo substr($ln['inicio'],0,5). ' às '. substr($ln['termino'],0,5); ?></td>
    <td  > <?php echo $ln['local']; ?></td>
    <td><?php echo $ln['equipamentos'];?></td>
    <td><?php echo $ln['professor']; ?></td>
    
    <td><?php echo $ln['descricao']; ?></td>
    <td><?php $nomeFuncionario = explode(" ", $ln['usuario']); echo $nomeFuncionario[0]; ?></td>

    
    

  </tr>
<?php
 } 
    } 