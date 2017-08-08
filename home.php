
<?php 
		include "conexao.php";
		// inicio de verificação de edição de dados
		if (isset($_SESSION['editado'])){
			echo "<div class=\"msg\"><div class=\"flasherro\">Você acabou de Alterar seus dados, por medida de segurança saia e entre novamente no sistema para continuar suas atividades, Obrigado. </div> </div>";
			return false;
			}else{
		if (isset($_SESSION['login'])){ ?>

<?php
		$data = date("d/m/Y");
		$hora1 = '7:30 às 8:20';
		$hora2 = '8:20 às 9:10';
    	$hora3 = '9:10 às 10:10';
    	$hora4 = '10:10 às 11:00';
    	$hora5 = '11:00 às 11:50';
    	$hora6 = '11:50 às 13:00';
		$hora7 = '18:30 às 19:20';
		$hora8 = '19:20 às 20:10';
		$hora9 = '20:10 às 21:10';
		$hora10 = '21:10 às 22:00';
		$hora11 = '22:00 às 23:00';	
		$bgred = 'style="background:#F00; "';
							
			
		?>

<div class="table">
    <table width="99%" border="0" align="left">
       
        <tr height="40" colspan="5">
          <td height="35" colspan="12" align="right"><span style="font:16px arial; font-weight:bold; text-transform:uppercase; color:#000; ">Agendamento
          HOJE <?php echo $data.' - '. date("H:m");?></span></td>
        </tr>
        
        <tr height="40" colspan="5">
            <td rowspan="2"  align="right" class="fundosalas">SALAS</td>
            <td height="35" colspan="6"align="right" class="topocedo">MATUTINO</td>
            <td  height="35" colspan="5" align="right" class="toponoite">NOTURNO</td>
        </tr>
        <tr height="40" colspan="5">
            <td  height="35" align="right" class="topocedo">7:30 às 8:20</td>
            <td  height="35" align="right" class="topocedo">8:20 às 9:10</td>
            <td  height="35" align="right" class="topocedo">9:10 às 10:10 </td>
            <td  height="35" align="right" class="topocedo">10:10 às 11:00</td>
            <td  height="35" align="right" class="topocedo">11:00 às 11:50</td>
            <td  height="35" align="right" class="topocedo">11:50 às 13:00</td>
            <td  height="35" align="right" class="toponoite">18:30 às 19:20</td>
            <td  height="35" align="right" class="toponoite">19:20 às 20:10</td>
            <td  height="35" align="right" class="toponoite">20:10 às 21:10</td>
            <td  height="35" align="right" class="toponoite">21:10 às 22:00</td>
            <td  height="35" align="right" class="toponoite">22:00 às 23:00</td>
        </tr>
        
        <?php
			include("includes/salas/501d.php");
			include("includes/salas/502d.php");
			include("includes/salas/503d.php");
			include("includes/salas/504d.php");
			include("includes/salas/505d.php");
			include("includes/salas/506d.php");
			include("includes/salas/507d.php");
			include("includes/salas/508d.php");
		
		?>      
       
        
    </table>
   
</div>
		<?php 
		}else{
			include ("homevisitante.php");
		}
			}// fim else verifica alteração de dados
		?>