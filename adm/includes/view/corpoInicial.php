<?php
if (isset($_SESSION['nome']) && isset($_SESSION['sobrenome']) && isset($_SESSION['id'])) {
 ?>

<div class="row-fluid">
	<?php if (isset($flash)){
		echo $flash;
	} ?>
</div>
<div class="row-fuid tamanhoMinimo">
		
		<div class="span3 spann3 bgPos bradius ">
		<center><h1><small>Cadastrar novo evento</small></h1></center>
		<hr>
		<form class="form-horizontal inicial" method="POST" action="?p=cadastrarEvento">

			Data <input type="date" required="required" name="data" id="inputDate" placeholder="Data"><br>
			<!--class="margin mini input-mini"-->
			Horário, Das: <input type="time" required="required" name="inicio" class="margin input-small"  >
			às <input type="time" required="required" name="termino" class="margin input-small" ><br>

			Local <select name="local" id="" class="margin">
			<option value="" selected="selected">Selecione</option>
			<option value="NPJ">NPJ</option>
			<option value="Mezanino">Mezanino</option>
			<option value="SALA 501D">SALA 501D</option>
			<option value="SALA 502D">SALA 502D</option>
			<option value="SALA 503D">SALA 503D</option>
			<option value="SALA 504D">SALA 504D</option>
			<option value="SALA 505D">SALA 505D</option>
			<option value="SALA 506D">SALA 506D</option>
			<option value="SALA 507D">SALA 507D</option>
			<option value="SALA 508D">SALA 508D</option>

			<option value="outro">Outro</option>
		</select><br>

		Outro local: <input type="text" name="local2" placeholder="Qual o outro local?" class="margin"><br>

		Professor(a) <input type="text" required="required"  name="professor" class="margin" placeholder="Responsável pelo evento"><br>
		Equipamentos: <input type="text" required="required"  name="equipamentos" class="margin" placeholder="Equipamentos necessários"><br>
		Descrição: <input type="text" name="descricao" required="required"  name="descricao" class="margin" placeholder="Descrição do evento" id="">
		<hr>
		<button type="submit" name="cadastrarEvento" class="btn margin">Cadastrar</button>		
		
	</form>

</div>






<div class="span3 spann3 bgPos bradius ">


	<center><h1><small>Cadastrar Pós-Graduação</small></h1></center>
	<hr>
	<form class="form-horizontal inicial" method="POST" action="?p=cadastrarPos">

		Data <input type="date" required="required" name="data" id="inputDate" placeholder="Data"><br>
		<!--class="margin mini input-mini"-->
		Horário, Das: <input type="time" required="required" name="inicio" class="margin input-small"  >
		às <input type="time" required="required" name="termino" class="margin input-small" ><br>

		Local <select name="local" id="" class="margin">
		<option value="" selected="selected">Selecione</option>
		<option value="SALA 501D">SALA 501D</option>
		<option value="SALA 502D">SALA 502D</option>
		<option value="SALA 503D">SALA 503D</option>
		<option value="SALA 504D">SALA 504D</option>
		<option value="SALA 505D">SALA 505D</option>
		<option value="SALA 506D">SALA 506D</option>
		<option value="SALA 507D">SALA 507D</option>
		<option value="SALA 508D">SALA 508D</option>

		<option value="outro">Outro</option>
	</select><br>

	Outro local: <input type="text" name="local2" placeholder="Qual o outro local?" class="margin"><br>

	Professor(a) <input type="text" required="required"  name="professor" class="margin" placeholder="Responsável pela aula"><br>
	Equipamentos: <input type="text" required="required"  name="equipamentos" class="margin" placeholder="Equipamentos necessários"><br>
	Disciplina <input type="text" name="disciplina" required="required"   class="margin" placeholder="Descrição do evento" >
	<hr>
	<button type="submit" name="cadastrarEvento" class="btn margin">Cadastrar</button>		
	
</form>

</div>




<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
		<center><h1><small>Proximos Eventos Matutino</small></h1></center>
			<thead>
				<tr>
					<th>Data</th>
					<th>Periodo</th>
					<th>Horario</th>
					<th>Local</th>
					<th>Equipamentos</th>
					<th>Professor(a)</th>
					<th>Descrição</th>
					<th>Usuario</th>
				</tr>
			</thead>
			<tbody>
				<?php include '../model/consultarEventosMatutino.php'; ?>
			</tbody>
		</table>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
			<center><h1><small>Proximos Eventos Vespertino</small></h1></center>
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
				<?php include '../model/consultarEventosVespertino.php'; ?>
			</tbody>
		</table>
	</div>
</div>



<!-- TAbela de eventos noturno -->
<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover bgPos">
			<center><h1><small>Proximos Eventos Noturno</small></h1></center>
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
				<?php include '../model/consultarEventosNoturno.php'; ?>
			</tbody>
		</table>
	</div>



</div>
<?php } else {
	header ("Location: ../../../adm/index.php");
} ?>
