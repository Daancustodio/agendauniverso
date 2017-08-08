<div class="row-fluid">
	<?php if (isset($flash)){
		echo $flash;
	} ?>
</div>
<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
			<caption><h1><small>Todos os proximos eventos do período NOTURNO</small></h1></caption>
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
			<?php include '../model/todosEventosNoturno.php'; ?>
			</tbody>
		</table>
	</div>
</div>
