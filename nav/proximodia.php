<?php
		
		$data1 = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
		$data = date("Y-m-d", $data1);
?>

<style type="text/css">
.table table {
}
</style>

    
   

<div class="table">
    <table width="99%" border="0" align="left">
       
        <tr height="40" colspan="5">
          <td height="35" colspan="12" align="right"><span style="font:16px arial; font-weight:bold; text-transform:uppercase; color:#fff; ">Agendamento
          amanhã <?php echo date("d-m-Y", $data1) ;?></span></td>
        </tr>
        
        <tr height="40" colspan="5">
          <td rowspan="2"  align="right" bgcolor="#0066FF">SALA</td>
          <td height="35" colspan="6"align="right" bgcolor="#FF9122">MATUTINO</td>
          <td  height="35" colspan="5" align="right" bgcolor="#6699FF">NOTURNO</td>
        </tr>
        <tr height="40" colspan="5">
        <td  height="35" align="right" bgcolor="#FF9122">7:30 às 8:20</td>
        <td  height="35" align="right" bgcolor="#FF9122">8:20 às 9:10</td>
        <td  height="35" align="right" bgcolor="#FF9122">9:10 às 10:10 </td>
        <td  height="35" align="right" bgcolor="#FF9122">10:10 às 11:00</td>
        <td  height="35" align="right" bgcolor="#FF9122">11:00 às 11:50</td>
        <td  height="35" align="right" bgcolor="#FF9122">11:50 às 13:00</td>
        <td  height="35" align="right" bgcolor="#6699FF">18:30 às 19:20</td>
        <td  height="35" align="right" bgcolor="#6699FF">19:20 às 20:10</td>
        <td  height="35" align="right" bgcolor="#6699FF">21:10 às 22:00</td>
        <td align="right" bgcolor="#6699FF">22:00 às 23:00</td>
        
        
        </tr>
        
        <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">501D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 501d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        
        
        <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">502D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 502d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        
        <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">503D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        
       <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">504D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 504d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">505D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 505d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        
       <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">506D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 506d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        
        
        <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">507D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 507d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
        <!-- Inicio do código de atualização de status -->
        
        <tr height="40" colspan="5">
          <td height="35" align="right" bgcolor="#0066FF">508D</td>
          <td bgcolor="#FDF953"  height="35" align="right"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora1' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold; ">Disponível</span>';}
		  ?></td>
          <td   height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora2' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora3' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora4' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora5' "); $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#FDF953"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora6' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora7' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora8' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td  height="35" align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora9' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
          <td align="right" bgcolor="#99CCFF"><?php $sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' AND hora='$hora10' ");
		   $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
		   if( mysqli_num_rows($sql)
		  == 1 ) {echo '<span style="color:#F00; text-transform:uppercase; font:12px arial; font-weight:bold;  ">'.$ln['idprofessor'].'</span>';} else {echo '<span style="color:#090; text-transform:uppercase; font:12px arial; font-weight:bold;  ">Disponível</span>';}
		  ?></td>
        </tr>
        
        <!-- fim do código de atualização de status -->
    </table>
   
</div>



    
