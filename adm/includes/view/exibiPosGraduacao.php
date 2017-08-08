<div class="row-fluid">
	<?php if (isset($flash)){
		echo $flash;
	} ?>
</div>

  <!-- TAbela de eventos noturno -->
<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
			<caption><h1><small>Pós-Graduação Matutino</small></h1></caption>
			<thead>
			<tr>
				<th>Data</th>
				<th>Periodo</th>
				<th>Horario</th>
				<th>Local</th>
				<th>Equipamentos</th>
				<th>Professor(a)</th>
				<th>Descrição</th>
				<th>Usuário</th>
			</tr>
			</thead>
			<tbody>
			<?php include '../model/consultarPosGraduacao.php'; ?>
			</tbody>
		</table>
	</div>
</div>



<!-- EXIBE POS GRADUAÇÃO VESPERTINO -->
  
<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
			<caption><h1><small>Pós-Graduação Vespertino</small></h1></caption>
			<thead>
			<tr>
				<th>Data</th>
				<th>Periodo</th>
				<th>Horario</th>
				<th>Local</th>
				<th>Equipamentos</th>
				<th>Professor(a)</th>
				<th>Descrição</th>
				<th>Usuário</th>
			</tr>
			</thead>
			<tbody>
			<?php include '../model/consultarPosGraduacaoVespertino.php'; ?>
			</tbody>
		</table>
	</div>
</div>


<!-- EXIBE POS GRADUAÇÃO VESPERTINO -->
  
<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
			<caption><h1><small>Pós-Graduação Noturno</small></h1></caption>
			<thead>
			<tr>
				<th>Data</th>
				<th>Periodo</th>
				<th>Horario</th>
				<th>Local</th>
				<th>Equipamentos</th>
				<th>Professor(a)</th>
				<th>Descrição</th>
				<th>Usuário</th>
			</tr>
			</thead>
			<tbody>
			<?php include '../model/consultarPosGraduacaoNoturno.php'; ?>
			</tbody>
		</table>
	</div>
</div>
