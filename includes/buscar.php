<?php
// função que retorna o dia da semana





//definindo o mes para ser comparado se o usuário colocou a adata do mês atual
$mes = date('m');
// ESSA FUNÇÃO TRATA A DATA RECEBIDA CASO ELA VENHA NO FORMATO: YYYY-MM-DD E  RETORNA NO FORMATO DD-MM-YYYY

$diaGet = ($_POST['data']);
$dia = explode("-",$diaGet);
$diaBarra = explode('/',$diaGet);


	if (@$dia[1] == $mes || @$diaBarra[1] == $mes){
		@$dia = @$dia[2].'/'.@$dia[1].'/'.@$dia[0];
		if( strlen($dia) == 12 ) { 
			$dia = substr($dia, 2, 10);
		}
		else{
	  	$dia;	
		}
	}
	else{
	$flash = "Você só tem permissão para reservar salas ou equipamentos  no MÊS ATUAL, contate o Audio Visual para maiores esclarecimentos.";
	echo"<div class=\"msg\"><div class=\"flasherro\">$flash </div> </div>";	
	return false;
	}
	

/*
$flash= '<div class="msg"><div class="flasherro"> Data inválida, as reservas só podem ser efetuadas para o  mês ATUAL,em caso de dúvidas contate o Audio Visual (62) 3238-3028 </div></div>';
$dia = 'Data inválida';
*/


// FIM DO TRATAMENTO DA DATA @DANIEL CUSTÓDIO!!
?>

<div class="table">
    <table width="99%" border="0" align="left">
       
        <tr height="40" colspan="5">
          <td height="35" colspan="12" align="right"><span style="font:16px arial; font-weight:bold; text-transform:uppercase; color:#000; ">Agendamento</span><span style="font:16px arial; font-weight:bold; text-transform:uppercase;color:#F60">
           <?php echo $dia;?></span></td>
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
		include"salas/exibe501d.php";
		include"salas/exibe502d.php";
		include"salas/exibe503d.php";
		include"salas/exibe504d.php";
		include"salas/exibe505d.php";
		include"salas/exibe506d.php";
		include"salas/exibe507d.php";
		include"salas/exibe508d.php";
	?>
	
    </table>
    </div>