<?php 
			$sql = mysqli_query ($con,"SELECT * FROM 503d WHERE data = '$data' "); 
            $ln = mysqli_fetch_array($sql, MYSQLI_BOTH);
			$ln1 = $ln['horario1'];
			$ln2 = $ln['horario2'];
			$ln3 = $ln['horario3'];
			$ln4 = $ln['horario4'];
			$ln5 = $ln['horario5'];
			$ln6 = $ln['horario6'];
			$ln7 = $ln['horario7'];
			$ln8 = $ln['horario8'];
			$ln9 = $ln['horario9'];
			$ln10 = $ln['horario10'];
			$ln11 = $ln['horario11'];
			$cancelar = ' ';


?>

<!-- Inicio do código de atualização de status -->
        
	<tr height="40" colspan="5">
        <td height="35" align="right" class="fundosalas">503d</td>
        <td class="cedo"  height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln1, 3).'
                        </span>';				
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln2, 3).'
                        </span>';				
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln3, 3).'
                        </span>';				
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln4, 3).'
                        </span>';				
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln5, 3).'
                        </span>';				
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln6, 3).'
                        </span>';				
		?> 		
		</td>

    <td class="noite" height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln7, 3).'
                        </span>';				
		?> 		
		</td>

    <td class="noite" height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln8, 3).'
                        </span>';				
		?> 		
		</td>


    <td class="noite" height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln9, 3).'
                        </span>';				
		?> 		
		</td>


    <td class="noite" height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln10, 3).'
                        </span>';				
		?> 		
		</td>

    <td class="noite" height="35" align="right">
		<?php 
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln11, 3).'
                        </span>';				
		?> 		
		</td>
