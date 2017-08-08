
<div id="header">
		<div class="logo">
					<h1>
                    	<a href="index.php?p=home">
                        	<img src="css/images/logoUniverso.png" title="Retornar ao inicio" />
                        </a>
                    </h1>
                    
                    <p style="margin-top:-9px;margin-bottom:-12px; font-size:18px !important; color:#0c2256">
                    	Audio Visual - Goiânia
                    </p>
                    
                    <p style="color:#000">
						<?php if (isset($_SESSION['nome'])){echo "Olá Prof ".$_SESSION['nome'].", Seja bem vindo ao Agendamento Online universo!".' <a 
                        href="includes/logout.php" title="Clique aqui para sair"><span style="text-transform:uppercase; font-size:14px; color:#F00 
                        !important;"> Sair</span></a>  ';} ?>
                    </p>


    <?php if(@$_SESSION['nome']) { ?>
	<nav class="menu">
		<ul>
            <li><a href="index.php?p=home" title="Agendamentos HOJE.">inicio</a></li>
            <li><a href="includes/logout.php" title="Clique aqui para sair">Sair</a></li>
            <li><a href="index.php?p=editar" title="Clique aqui para EDITAR seus DADOS">EDITAR</a></li>
            <li><a href="index.php?p=formcontato" title="Entre em contato">Contato</a></li>
            <li><a href="index.php?p=formbuscar" title="Nesse menu você pode buscar salas em uma data especifica, e agendar no horário desejado.">Reservar
             Sala</a></li>
		</ul>
	</nav>
    <?php } else { ?>
    	<!-- menu inicio -->
	<!-- menu logado -->
	<nav class="menu">
		<ul>
            <li><a href="index.php?p=home" title="Agendamentos HOJE.">Inicio</a></li>
            <li><a href="index.php?p=login">Login</a></li>
            <li><a href="index.php?p=formcadastro">Cadastre-se</a></li>
            <li><a href="index.php?p=formcontato" title="Entre em contato">Contato</a></li>
            <li><a href="index.php?p=formbuscar" title="Nesse menu você pode buscar salas em uma data especifica, e agendar no horário desejado.">Reservar
             Sala</a></li>
		</ul>
	</nav>
    <?php }  ?>
    
    
</div>

					

</div>