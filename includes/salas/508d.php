<?php 
			$nomeprofessor = $_SESSION['nome'];
			$id = $_SESSION['id'];
			$sql = mysqli_query ($con,"SELECT * FROM 508d WHERE data = '$data' "); 
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
        <td height="35" align="right" class="fundosalas">508d</td>
        <td class="cedo"  height="35" align="right">
		<?php 
               
            if(!$ln1){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario1&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln1 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario1&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln1 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario1&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln1, 3).'
                        </span>';				
			}
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
            if(!$ln2){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario2&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln2 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario2&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln2 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario2&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln2, 3).'
                        </span>';				
			}
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
            if(!$ln3){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario3&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln3 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario3&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln3 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario3&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln3, 3).'
                        </span>';				
			}
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
            if(!$ln4){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario4&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln4 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario4&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln4 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario4&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln4, 3).'
                        </span>';				
			}
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
            if(!$ln5){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario5&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln5 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario5&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln5 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario5&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln5, 3).'
                        </span>';				
			}
		?> 		
		</td>

        <td class="cedo"  height="35" align="right">
		<?php 
               
            if(!$ln6){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario6&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln6 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario6&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln6 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario6&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln6, 3).'
                        </span>';				
			}
		?> 		
		</td>

    <td class="noite" height="35" align="right">
		<?php 
               
            if(!$ln7){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario7&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln7 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario7&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln7 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario7&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln7, 3).'
                        </span>';				
			}
		?> 		
		</td>

    <td class="noite" height="35" align="right">
		<?php 
               
            if(!$ln8){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario8&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln8 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario8&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln8 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario8&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln8, 3).'
                        </span>';				
			}
		?> 		
		</td>


    <td class="noite" height="35" align="right">
		<?php 
               
            if(!$ln9){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario9&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln9 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario9&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln9 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario9&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln9, 3).'
                        </span>';				
			}
		?> 		
		</td>


    <td class="noite" height="35" align="right">
		<?php 
               
            if(!$ln10){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario10&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln10 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario10&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln10 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario10&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln10, 3).'
                        </span>';				
			}
		?> 		
		</td>

    <td class="noite" height="35" align="right">
		<?php 
               
            if(!$ln11){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario11&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			if($ln11 == $cancelar ){
				echo "<span  style=\" color:#0F0;text-transform:uppercase;  font:12px arial; font-weight:bold;\"> 
						<a class=\"disponivel\" href=index.php?p=agendarsala&sala=508d&horario=horario11&data=$data title=\"Clique aqui para AGENDAR esse horário!\">
						Disponível
						</a>
                        </span>";
			}
			
		
			
			if ($ln11 == $id.$nomeprofessor){
				echo "<span style=\" text-transform:uppercase; font:12px arial; font-weight:bold;\"> 
						<a class=\"cancelar\" href=index.php?p=cancelar&sala=508d&horario=horario11&data=$data title=\"Clique aqui para CANCELAR esse horário!\">
						CANCELAR
						</a>
                        </span>";				
			}else{
				echo '<span style="color:#000; text-transform:uppercase; font:12px arial; font-weight:bold;"> 
						'.substr ($ln11, 3).'
                        </span>';				
			}
		?> 		
		</td>
 