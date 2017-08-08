<?php

include 'db.php';
$data = date('Y-m-d');
$usuarioLogado = $_SESSION['nome'].' '.$_SESSION['id'];

$i = mysqli_query($con, "SELECT * FROM eventos WHERE data>='$data' AND periodo = 'Vespertino'  ORDER BY data");
$j = mysqli_num_rows($i);
if ($j == false){

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
    <td><?php 
            if($usuarioLogado == $ln['usuario']){
                echo'<div class="btn-group">
                        <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                Menu <span class="caret"></span> 
                            </a>
                            
                        <ul class="dropdown-menu">
                            <li><a href="#" title="Atenção, o Menu EDITAR ainda não está pronto, para alterar, basta EXLUIR esse item e Cadastre OUTRO com as Alterações necessárias">Editar</a></li>
                            <li class="divider"></li>
                            <li> <a href="?p=excluirEventoV&id='.$ln["id"].' " title="Clique aqui para Excluir">Excluir</a> </li>
                           
                        </ul>
                    
                    </div>';
                
                }else{
                    $nomeFuncionario = explode(" ", $ln['usuario']);
                    echo $nomeFuncionario[0];
                }
                 ?>
    </td>
    
    

  </tr>
<?php
 }// fim do IF
	
	}// 